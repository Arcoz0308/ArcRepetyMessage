<?php

namespace arclegrandroi\arcrepetymessage;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;

use arclegrandroi\arcrepetymessage\MsgTask;
use arclegrandroi\arcrepetymessage\PopupTask;

class Main extends PluginBase {
   
   /** @var array */
   public $config;
   
    public function onEnable() {
        @mkdir($this->getDataFolder());
        
        
        $this->saveResource("config.yml");
        $this->config = $this->getConfig()->getAll();
        $s1 = $this->config["message-time"];
        $s2 = $this->config["popup-time"];
        $randomMessage = 5;
       
        $time1 = 20 * $s1;
        $time2 = 20 * $s2;
        if($this->config["message"] == true) {
            $time1 = 20 * $s1;
            $this->getScheduler()->scheduleRepeatingTask(new msgTask($this), $time1);
            $this->getLogger()->notice("message random repetitif es actif");
        } else {
            $this->getLogger()->notice("message random repetitif n'es pas actif");
        }
        if($this->config["popup"] == true) {
            $this->getScheduler()->scheduleRepeatingTask(new popupTask($this), $time2);
            $this->getLogger()->notice("popup random repetitif es actif");
        } else {
            $this->getLogger()->notice("popup random repetitif n'es pas actif");
        }
    }
}
