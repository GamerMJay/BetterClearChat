<?php

namespace GamerMJay\EasyClearChat\commands;

use GamerMJay\EasyClearChat\Main;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\player\Player;
use pocketmine\Server;

class clearchat extends Command
 {
    private $plugin;

    public function __construct(Main $plugin) {
        $this->plugin = $plugin;
		parent::__construct($this->plugin->getConfig()->get("command"), $this->plugin->getConfig()->get("description"), "/clearchat", $this->plugin->getConfig()->get("aliases"));
        $this->setPermission("clearchat.use");
	}

    public function execute(CommandSender $sender, string $commandLabel, array $args)
    {
        if ($sender instanceof Player) {
            $player = $sender;
            foreach (Server::getInstance()->getOnlinePlayers() as $player) {
                Server::getInstance()->broadcastmessage("\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n");
                Server::getInstance()->broadcastMessage(str_replace("{player}", $player->getName(), $this->plugin->config->get("clearchat-succes")));
            }
            return;
        }
        $sender->sendMessage($this->plugin->config->get("run-ingame"));
    }
}
