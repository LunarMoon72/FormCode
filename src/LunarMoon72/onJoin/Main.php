<?php

namespace LunarMoon72\onJoin;

use pocketmine\plugin\PluginBase

use pocketmine\event\player\PlayerJoinEvent;

use pocketmine\event\player\PlayerQuitEvent;

use pocketmine\Player;

use pocketmine\Server;

use pocketmine\event\Listener;

use pocketmine\utils\TextFormat;

class Main extends PluginBase implements Listener{
	public function onEnabled(){
		$this->getServer()->getPluginManager()->registerEvents($this,$this);
		$this->getLogger()->info("Plugin has been enabled");

	}

	public function onDisabled(){
		$this->getLogger()->info("Plugin is Disabled");

	}

	public function onLoad(){
		$this->getLogger()->info("Plugin is loading");
	}
	public function onJoin(PlayerJoinEvent $event){
		$player = $event->getPlayer();
		$name = $player->getName();
		$this->getServer()->broadcastMessage(TextFormat::GREEN."[+] Welcome back $name")
	}

}
