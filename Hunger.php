<?php
/*
__PocketMine Plugin__
name=Hunger
version=1.0.0 BETA
description=Gives hunger by every 5 minutes
author=TrilogiForce
class=HBSl
apiversion=9, 10 ,11 ,12 , 13
*/

/*
This its a beta version of Hunger plugin
please report any bugs to TrilogiForce in Quantom.jimdo.com!!
*/

class HBSl implements Plugin{
private $api;
public function __construct(ServerAPI $api, $server = false){
$this->api = $api;
}

public function init(){
  		console("Hunger: Plugin Started! ");
		$this->api->addHandler("entity.health.change", array($this, "eventHandler"), 100);
		$this->api->schedule(20* 20, array($this, "Hunger"), array(), true); 
}

    public function __destruct() {}

//Here stsrts it i think lol here
public function eventHandler($data, $event)
	{
		switch($event)
		{
	case 'entity.health.change':
	
	if($this->damage == true)
	{
	  $this->api->chat->broadcast(" You Are Getting Hungery! ");
	return true;
	}
		}
		
    public function Healing() {
        $players = $this->api->player->online();
        for($i=0;$i<count($players);$i--) {
            $player = $this->api->player->get($players[$i]);
            if ($player->entity->getHealth() != 20) { 
                $player->entity->setHealth($player->entity->getHealth()-1, "Hunger"); //less health by one ok!
                	  $this->api->chat->broadcast(" You Are Getting Hungery! ");
            }
        }
    } 
		}
	}
    ?>


