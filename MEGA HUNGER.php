<?php
/*
__PocketMine Plugin__
name=Hunger Megga
version=1.0.3 BETA
description=Gives hunger by every 5 minutes
author=Syriamanal, TrilogiForce
class=HungerMegga
apiversion=11, 12, 13
*/

class HungerMegga implements Plugin{
private $api;
public function __construct(ServerAPI $api, $server = false){
$this->api = $api;
}
public function init(){
                  console("[Hunger] Plugin Started! ");
                $this->api->schedule(40* 90, array($this, "Chat1"), array(), true);
                $this->api->schedule(50* 90, array($this, "Chat2"), array(), true);
                $this->api->schedule(60* 90, array($this, "Chat3"), array(), true);
                $this->api->schedule(70* 90, array($this, "Chat4"), array(), true);
                $this->api->schedule(80* 90, array($this, "Chat5"), array(), true);
                $this->api->schedule(90* 90, array($this, "Chat5"), array(), true);
                $this->api->schedule(100* 90, array($this, "Chat6"), array(), true);
                $this->api->schedule(110* 90, array($this, "Chat7"), array(), true);
                $this->api->schedule(110* 90, array($this, "Chat8"), array(), true);
                $this->api->schedule(110* 90, array($this, "Chat8"), array(), true);
                $this->api->schedule(20* 90, array($this, "Hunger"), array(), true);
                $this->api->addHandler('entity.health.change', array($this, 'entityHurt'));
                }
 public function __destruct() {}
 
public function Chat1() {
                                                $this->api->chat->broadcast("[QN] This server is still in beta!");
               }

public function Chat2 () {
                                                $this->api->chat->broadcast("[QN] Did you see our website at ");
                                                $this->api->chat->broadcast("[QN] Quantom.jimdo.com ");
              }


public function Chat3 () {
                                                $this->api->chat->broadcast("[QN] Did you remember to buy VIP! ");
                                                $this->api->chat->broadcast("[QN] But VIP still not avaible ");
               }


public function Chat4 () {
                                                $this->api->chat->broadcast(" [QN] Did you say hi to our ops today!");
              }
public function Chat5 () {
                                                $this->api->chat->broadcast("[QN] Like this server? Then share it!");
              }
public function Chat6 () {
                                                $this->api->chat->broadcast("[QN] Help us keep the server running and help by donating! ");
                                                $this->api->chat->broadcast("[QN] But donations are still not working");
              }
public function Chat7 () {
                                                $this->api->chat->broadcast("[QN] Quantom Network Is Registered Under Quantum Works! ");
              }

public function Chat8 () {
                                                $this->api->chat->broadcast("[QN] Server is online 24/7! ");
              }
              
public function HealthDanger () {
	$players = $this->api->player->online();
        for($i=0;$i<count($players);$i++) {
        $player = $this->api->player->get($players[$i]);
        if ($player->entity->getHealth() != 2) {
            $data['player']->sendChat(" Warning! Very Low Health Detected!");
         }
              }




 
    public function Hunger() {
        $players = $this->api->player->online();
        for($i=0;$i<count($players);$i++) {
        $player = $this->api->player->get($players[$i]);
        if ($player->entity->getHealth() != 20) {
            $data['player']->sendChat(" You Are Getting Hungry! ");
        $player->entity->setHealth($player->entity->getHealth()-1, "Hunger"); 
         }
		if ($player->entity->getHealth() != 1) {
        $player->entity->setHealth($player->entity->getHealth()+2, "Hunger"); 
		$data['player']->sendChat(" You Are Getting Healed! ");
		
	
                                   }
                                }
                                }
                                }
?>
