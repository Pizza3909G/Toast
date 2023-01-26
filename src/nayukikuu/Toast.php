<?php

declare(strict_types=1);

namespace nayukikuu;

use pocketmine\network\mcpe\protocol\ToastRequestPacket;
use pocketmine\player\Player;
use pocketmine\plugin\PluginBase;

final class Toast{
    private PluginBase $plugin;

    public function __construct(PluginBase $plugin){
        $this->plugin = $plugin;
    }

    public function getPlugin(): PluginBase{
        return $this->plugin;
    }

    public function sendToast(Player $player, string $title = '', string $subtitle = ''): void{
        if($player->isClosed()) return;
        $packet = ToastRequestPacket::create($title, $subtitle);
        $player->getNetworkSession()->sendDataPacket($packet);
    }

    public function broadcastToast(string $title = '', string $subtitle = ''): void{
        foreach($this->getPlugin()->getServer()->getOnlinePlayers() as $player){
            if($player->isClosed()) return;
            $packet = ToastRequestPacket::create($title, $subtitle);
            $player->getNetworkSession()->sendDataPacket($packet);
        }
    }
}