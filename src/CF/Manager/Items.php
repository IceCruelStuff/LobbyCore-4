<?php

namespace CF\Manager;

use pocketmine\utils\TextFormat as Text;
use pocketmine\item\Item;
use pocketmine\utils\Config;
use pocketmine\level\Position;
use pocketmine\{Player, Server};
use pocketmine\network\mcpe\protocol\LevelEventPacket;
use pocketmine\network\mcpe\protocol\LevelSoundEventPacket;
use CF\Main;

class Items {

public function getItems(Player $player){
$player->setHealth(20);
$player->setFood(20);
$player->setScale(1);
$player->removeAllEffects();
$player->getArmorInventory()->clearAll();
$player->getInventory()->clearAll();
$inventory = $player->getInventory();
$inventory->setItem(4, Item::get(345, 0, 1)->setCustomName("§1§kA§r§bTravel§1§kA"));
$inventory->setItem(0, Item::get(234, 0, 1)->setCustomName("§b§kB§r§aCosmetics§b§kB"));
$inventory->setItem(8, Item::get(450, 0, 1)->setCustomName("§e§kC§r§fInformation§e§kC"));
}
}
?>
