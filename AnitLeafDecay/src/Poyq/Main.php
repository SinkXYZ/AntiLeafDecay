<?php

namespace Poyq;

// ---------- CLASSES ------------ //
use pocketmine\event\Listener;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\event\block\LeavesDecayEvent;
use pocketmine\utils\TextFormat as TF;
use pocketmine\plugin\PluginBase;


// ------------ CODE ------------- //

class Main extends PluginBase implements Listener{


    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->info(TF::AQUA . "
    _       _      ____    
U  /\"\  u  |\"|    |  _\"\   
 \/ _ \/ U | | u /| | | |  
 / ___ \  \| |/__U| |_| |\ 
/_/   \_\  |_____||____/ u 
 \\    >>  //  \\  |||_    
(__)  (__)(_\")(\"_)(__)_)   
");
    }
    public function onDecay(LeavesDecayEvent $event){
        $event->setCancelled(true);
    }
}
