<?php
/*
__PocketMine Plugin__
name=Hunger
version=2.0.1 BETA
description=Gives hunger by every 5 minutes
author=TrilogiForce
class=HBSl
apiversion=9, 10 ,11 ,12 , 13
*/

/*
This its a beta version of Hunger plugin
please report any bugs to TrilogiForce or Syriamanal in Quantom.jimdo.com!!
*/

class HBSl implements Plugin{
private $api;
public function __construct(ServerAPI $api, $server = false){
$this->api = $api;
}

public function init(){
                  console("[Hunger] Plugin Started! ");
                $this->api->schedule(20* 20, array($this, "Hunger"), array(), true);
}


    public function __destruct() {}


                
    public function Hunger() {
        $players = $this->api->player->online();
        for($i=0;$i<count($players);$i++) {
            $player = $this->api->player->get($players[$i]);
            if ($player->entity->getHealth() <= 20) { 
                $player->entity->setHealth($player->entity->getHealth()-1, "Hunger"); //heal 1 health
                
            }
        }
    }
} 
    ?>
