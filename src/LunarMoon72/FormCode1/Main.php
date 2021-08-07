<?php

namespace LunarMoon72\FormCode1;

use pocketmine\plugin\PluginBase;

use pocketmine\Player;
use pocketmine\Server;

use pocketmine\item\Item;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;

use pocketmine\event\Listener;

use musqit\invmenu\InvMenu;
use musqit\invmenu\InvMenuHandler;

use pocketmine\inventory\transaction\action\SlotChangeAction;

class Main extends PluginBase implements Listener{
    public function onEnabled(){
     if(!InvMenuHandler::isRegistered()){
      InvMenuHandler::register($this);
    }
        $this->getServer()->getPluginManager()->registerEvents($this,$this);
        $this->getLogger()->info("Plugin is enabled");

    }
    public function onCommand(CommandSender $sender, Command $cmd, String $label, Array $args) : bool {
    switch($cmd->getName("inv")){
      case "inv":
        if($sender instanceof Player){
          $menu = InvMenu::create(InvMenu::TYPE_CHEST);
          $inventory = $menu->getInventory()->setContents([
             Item::get(Item::DIAMOND_SWORD),
             Item::get(Item::DIAMOND_PICKAXE)
          ]);
          $menu->setName("CustomCrate")
          $menu->getInventory()->addItem(Item::get(Item::DIAMOND_AXE));
          $menu->getInventory()->setItem(3, Item::get(Utem::GOLD_INGOT));
          $menu->send($player);
        }

    }
  }


}
