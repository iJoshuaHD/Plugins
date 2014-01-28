<?

/*
__PocketMine Plugin__
name=AutoPost
version=1.0.0
author=TrilogiForce
class=AutoPost
apiversion=9,10,11,12,13
*/

class AutoPost implements plugin {

        private $api, $server;
        private $config;
        private $nr = 0;
        private $interval;

        public function __construct(ServerAPI $api, $server = false) {
                $this->api = $api;
                $this->server = ServerAPI::request();
        }

        public function __destruct() {
                $this->config->save();
        }

        public function init() {
                $this->config = new Config($this->api->plugin->configPath($this) . "config.yml", CONFIG_YAML, array('interval' => 1, 'messages' => array("Example message")));
                $this->interval = $this->config->get("interval");
                $this->api->schedule(20 * 60 * $this->interval, array($this, "msg"), array(), false);
                $this->api->console->register('Post', "AutoPost", array($this, 'commandHandler'));
        }

        public function msg() {
                $messagesArray = $this->config->get("messages");
                if (count($messagesArray) > 1) {
                        $message = $messagesArray[$this->nr];
                        $this->api->chat->broadcast("[QNP] " . $message);
                        if ($this->nr < count($messagesArray)-1) {
                                $this->nr++;
                        } else {
                                $this->nr = 0;
                        }
                }
                $this->api->schedule(20 * 60 * $this->interval, array($this, "msg"), array(), false);
        }

        public function commandHandler($cmd, $params, $issuer, $alias) {
                $c = array_shift($params);
                if($c === 'add' && isset($params)){
                        $s = implode(" ",$params);
                        $a = $this->config->get("messages");
                        array_push($a,$s);
                        $this->saveConfig("messages",$a);
                        console("Message added");
                } else if($c === 'del' && isset($params)){
                        $n = implode(" ",$params);
                        $a = $this->config->get("messages");
                        array_splice($a, (int)$params, 1);
                        $this->saveConfig("messages",$a);
                        console("Deleted message");
                } else if($c === 'time' && isset($params)){
                        $n = implode(" ",$params);
                        $this->saveConfig("interval",(int)$n);
                        $this->interval = (int)$n;
                        console("Interval changed to ".(int)$n." minutes");
                } else {
                        $i = 0;
                        console("\tAutoPost Usage:\nAdd new message:\tautopost add <text>\nRemove a message:\tautopost del <nr>\nChange interval:\ttimeautopost time <nr>");
                        foreach($this->config->get("messages") as $m) {
                                console($i . ". " . $m);
                                $i++;
                        }
                }
        }

        public function saveConfig($k,$v) {
                $this->config->set($k,$v);
                $this->config->save();
        }
}
?>
