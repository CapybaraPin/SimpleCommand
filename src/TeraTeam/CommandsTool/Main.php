<?php

declare(strict_types=1);
namespace TeraTeam\CommandsTool;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener {

    public function onEnable()
    {
       $this->getLogger()->info("CommandsTool : ON");
       $this->getServer()->getPluginManager()->registerEvents($this,$this);
    }

    public function onDisable()
    {
        $this->getLogger()->info("CommandsTool : OFF");
    }



    // Exemple (Discord)
    public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool
    {
        switch ($command->getName()){
            case "discord":
                $sender->sendMessage("[Discord] Liens vers le serveur discord : teracube.eu/discord");
            break;

        }
        return true;
    }

}


