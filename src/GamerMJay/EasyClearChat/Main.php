<?php

namespace GamerMJay\EasyClearChat;

use GamerMJay\EasyClearChat\commands\clearchat;

use pocketmine\plugin\PluginBase;
use pocketmine\tile\Tile;
use pocketmine\utils\Config;


class Main extends PluginBase {
    public $config;

    public function onEnable(): void {
        $this->saveResource("config.yml");
        $this->config = new Config($this->getDataFolder() . "config.yml", 2);
        $this->getServer()->getCommandMap()->register("clearchat", new clearchat($this));
    }
}
