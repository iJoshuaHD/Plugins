<?php
/*
__PocketMine Plugin__
name=Hunger Megga
version=1.0.0 BETA
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
                  console("Hunger: Plugin Started! ");
                $this->api->schedule(20* 20, array($this, "Alert"), array(), true);
                $this->api->schedule(80* 100, array($this, "Clear"), array(), true);
                $this->api->schedule(40* 100, array($this, "Chat1"), array(), true);
                $this->api->schedule(50* 100, array($this, "Chat2"), array(), true);
                $this->api->schedule(60* 100, array($this, "Chat3"), array(), true);
                $this->api->schedule(70* 100, array($this, "Chat4"), array(), true);
                $this->api->schedule(80* 100, array($this, "Chat5"), array(), true);
                $this->api->schedule(90* 100, array($this, "Chat5"), array(), true);
                $this->api->schedule(100* 100, array($this, "Chat6"), array(), true);
                $this->api->schedule(100* 100, array($this, "Chat7"), array(), true);
                $this->api->schedule(20* 90, array($this, "Hunger"), array(), true);
                $this->api->addHandler('entity.health.change', array($this, 'entityHurt'));
                }
 public function __destruct() {}
 
public function Chat1() {
						$this->api->chat->broadcast(" ");
						$this->api->chat->broadcast(" [Quantum Network] This server is still in beta!");
						$this->api->chat->broadcast(" ");
               }

public function Chat2 () {
						$this->api->chat->broadcast(" ");
						$this->api->chat->broadcast(" [Quantum Network] Did you see our website at ");
						$this->api->chat->broadcast(" [Quantum Network] quantom.jimdo.com ");
						$this->api->chat->broadcast(" ");
              }


public function Chat3 () {
						$this->api->chat->broadcast(" ");
						$this->api->chat->broadcast(" [Quantum Network] Did you remember to buy VIP! ");
						$this->api->chat->broadcast(" ");
               }


public function Chat4 () {
						$this->api->chat->broadcast(" ");
						$this->api->chat->broadcast(" [Quantum Network] Did you say high to our ops today!");
						$this->api->chat->broadcast(" ");
              }
public function Chat5 () {
						$this->api->chat->broadcast(" ");
						$this->api->chat->broadcast(" [Quantum Network] Like this server? Then share it!");
						$this->api->chat->broadcast(" ");
              }
public function Chat6 () {
						$this->api->chat->broadcast(" ");
						$this->api->chat->broadcast(" [Quantum Network] Help us keep the server running and help by donating! ");
						$this->api->chat->broadcast(" ");
              }
public function Chat7 () {
						$this->api->chat->broadcast(" ");
						$this->api->chat->broadcast(" [Quantom Networl] Quantum Network Is Registered Under Quantum Works! ");
						$this->api->chat->broadcast(" ");
              }
public function Clear() {
						$this->api->chat->broadcast(" ");
						$this->api->chat->broadcast(" ");
						$this->api->chat->broadcast(" ");
						$this->api->chat->broadcast(" ");
						$this->api->chat->broadcast(" ");
						$this->api->chat->broadcast(" ");
						$this->api->chat->broadcast(" ");
						$this->api->chat->broadcast(" ");
						$this->api->chat->broadcast(" ");
						$this->api->chat->broadcast(" ");
						$this->api->chat->broadcast(" ");
						$this->api->chat->broadcast(" ");
						$this->api->chat->broadcast(" ");
						$this->api->chat->broadcast(" ");
						$this->api->chat->broadcast(" ");
						$this->api->chat->broadcast(" ");
						$this->api->chat->broadcast(" ");
						$this->api->chat->broadcast(" ");
						$this->api->chat->broadcast(" ");
						$this->api->chat->broadcast(" ");
						$this->api->chat->broadcast(" ");
						$this->api->chat->broadcast(" [Quantum Network] Chat Cleared! ");
              } 

public function Alert () {     
        $players = $this->api->player->online();
        for($i=0;$i<count($players);$i++) {
        $player = $this->api->player->get($players[$i]);

	if ($player->entity->getHealth() == 20) {
						$this->api->chat->broadcast(" ");
						$this->api->chat->broadcast("[Quantum Network]   Your Health Is Full! ");
						$this->api->chat->broadcast(" ");
	                                        } 
 elseif ($player->entity->getHealth() == 19) {
						$this->api->chat->broadcast(" ");
						$this->api->chat->broadcast("[Quantum Network]  Your Health Is At 19! ");
						$this->api->chat->broadcast(" ");
                                            }
 elseif ($player->entity->getHealth() == 18) {
						$this->api->chat->broadcast(" ");
						$this->api->chat->broadcast("[Quantum Network]  Your Health Is At 18! ");
						$this->api->chat->broadcast(" ");
	                                        }
 elseif ($player->entity->getHealth() == 17) {
						$this->api->chat->broadcast(" ");
						$this->api->chat->broadcast("[Quantum Network]  Your Health Is At 17! ");	
						$this->api->chat->broadcast(" ");
                                             }
 elseif ($player->entity->getHealth() == 16) {
						$this->api->chat->broadcast(" ");
						$this->api->chat->broadcast("[Quantum Network]  Your Health Is At 16! ");
						$this->api->chat->broadcast(" ");
                                             }
 elseif ($player->entity->getHealth() == 15) {
						$this->api->chat->broadcast(" ");
						$this->api->chat->broadcast("[Quantum Network]  Your Health Is At 15! ");
						$this->api->chat->broadcast(" ");
                                             }
 elseif ($player->entity->getHealth() == 14) {
						$this->api->chat->broadcast(" ");
						$this->api->chat->broadcast("[Quantum Network]  Your Health Is At 14! ");	
						$this->api->chat->broadcast(" ");
                                             }
 elseif ($player->entity->getHealth() == 13) {
						$this->api->chat->broadcast(" ");
						$this->api->chat->broadcast("[Quantum Network]  Your Health Is At 13! ");	
						$this->api->chat->broadcast(" ");
                                             }
 elseif ($player->entity->getHealth() == 12) {
						$this->api->chat->broadcast(" ");
						$this->api->chat->broadcast("[Quantum Network]  Your Health Is At 12! ");	
						$this->api->chat->broadcast(" ");
                                             }
 elseif ($player->entity->getHealth() == 11) {
						$this->api->chat->broadcast(" ");
						$this->api->chat->broadcast("[Quantum Network]  Your Health Is At 11! ");	
						$this->api->chat->broadcast(" ");
                                             }
 elseif ($player->entity->getHealth() == 10) {
						$this->api->chat->broadcast(" ");
						$this->api->chat->broadcast("[Quantum Network]   Your Health Is At 10! ");
						$this->api->chat->broadcast(" ");
                                             }
 elseif ($player->entity->getHealth() == 9) {
						$this->api->chat->broadcast(" ");
						$this->api->chat->broadcast("[Quantum Network]  Your Health Is At 9! ");
						$this->api->chat->broadcast(" ");
                                             }
 elseif ($player->entity->getHealth() == 8) {
						$this->api->chat->broadcast(" ");
						$this->api->chat->broadcast("[Quantum Network]  Your Health Is At 8! ");
						$this->api->chat->broadcast(" ");
                                             }
 elseif ($player->entity->getHealth() == 7) {
						$this->api->chat->broadcast(" ");
						$this->api->chat->broadcast("[Quantum Network]  Your Health Is At 7! ");
						$this->api->chat->broadcast(" ");
                                             }
 elseif ($player->entity->getHealth() == 6) {
						$this->api->chat->broadcast(" ");
						$this->api->chat->broadcast("[Quantum Network]  Your Health Is At 6! ");
						$this->api->chat->broadcast(" ");
                                             }
 elseif ($player->entity->getHealth() == 5) {
						$this->api->chat->broadcast(" ");
						$this->api->chat->broadcast("[Quantum Network]  Your Health Is At 5! ");
						$this->api->chat->broadcast(" ");
                                             }
 elseif ($player->entity->getHealth() == 4) {
						$this->api->chat->broadcast(" ");
						$this->api->chat->broadcast("[Quantum Network]  Your Health Is At 4! ");
						$this->api->chat->broadcast(" ");
                                             }
 elseif ($player->entity->getHealth() == 3) {
						$this->api->chat->broadcast(" ");
						$this->api->chat->broadcast("[Quantum Network]  Your Health Is At 3! ");
						$this->api->chat->broadcast(" ");
                                             }
 elseif ($player->entity->getHealth() == 2) {
						$this->api->chat->broadcast(" ");
						$this->api->chat->broadcast("[Quantum Network]  Your Health Is At 2! ");
						$this->api->chat->broadcast(" ");
                                             }
 elseif ($player->entity->getHealth() == 1) {
						$this->api->chat->broadcast(" ");
						$this->api->chat->broadcast("[Quantum Network]   Your Health Is At 1! ");	
						$this->api->chat->broadcast("[Quantum Network]   Your Health Is Very Low!");
						$this->api->chat->broadcast(" ");
                                             }
 elseif ($player->entity->getHealth() == 0) {
						$this->api->chat->broadcast(" ");
						$this->api->chat->broadcast("[Quantum Network]    Your Health Is At 0! ");	
						$this->api->chat->broadcast(" ");
                                             }
              }           
              }

 
    public function Hunger() {
        $players = $this->api->player->online();
        for($i=0;$i<count($players);$i++) {
        $player = $this->api->player->get($players[$i]);
        if ($player->entity->getHealth() != 20) {
	   $this->api->chat->broadcast(" You Are Getting Hungry! ");
        $player->entity->setHealth($player->entity->getHealth()-1, "Hunger"); 
                                   }
				}
				}
				}
    ?>

