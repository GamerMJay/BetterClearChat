<?php

namespace GamerMJay\BetterClearChat\commands;

use GamerMJay\BetterClearChat\Main;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\player\Player;
use pocketmine\Server;
use pocketmine\utils\TextFormat;

class clearchat extends Command
{

    public function __construct(Main $plugin) {
		$this->plugin = $plugin;
		parent::__construct($this->plugin->getConfig()->get("command"), $this->plugin->getConfig()->get("description"), "/clearchat", [""]);
	}


    public function execute(CommandSender $sender, string $commandLabel, array $args)
    {
        if ($sender instanceof Player) {
            $player = $sender;
            if (!$player->hasPermission("clearchat.use")) {
                $sender->sendMessage($this->plugin->config->get("no-permission"));
                return;
            }
            foreach (Server::getInstance()->getOnlinePlayers() as $p) {

                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
                $p->sendMessage("§r");
$p->sendMessage(str_replace("{player}", $player->getName(), $this->plugin->config->get("clearchat-succes")));
            }
            return;
        }
        $sender->sendMessage($this->plugin->config->get("run-ingame"));
    }
}