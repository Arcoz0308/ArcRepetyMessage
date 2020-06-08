<?php

namespace arclegrandroi\arcbroakcast;

use pocketmine\scheduler\Task;
use pocketmine\Server;
use pocketmine\utils\Config;
use pocketmine\plugin\PluginBase;

use arclegrandroi\arcbroakcast\Main;

class PopupTask extends Task {
   
   /** @var Main */
    private $plugin;
   
    public function __construct(Main $plugin) {
        $this->plugin = $plugin;
    }
    public function onRun(int $Tick) {
            $server = Server::getInstance();
            
            $maxr = $this->plugin->config["random-popup"];
            $ramdom = mt_rand(1, $maxr);
            if($ramdom == 1){
                $online  = count($server->getOnlinePlayers());
                $message = $this->plugin->config["popup1"];
                $msg = str_replace("{online}", $online, $message);
                $server->broadcastPopup($msg);
            } elseif($ramdom == 2) {
                $online  = count($server->getOnlinePlayers());
                $message = $this->plugin->config["popup2"];
                $msg = str_replace("{online}", $online, $message);
                $server->broadcastPopup($msg);
            } elseif($ramdom == 3) {
               $online  = count($server->getOnlinePlayers());
                $message = $this->plugin->config["popup3"];
                $msg = str_replace("{online}", $online, $message);
                $server->broadcastPopup($msg);
            } elseif($ramdom == 4) {
                $online  = count($server->getOnlinePlayers());
                $message = $this->plugin->config["popup4"];
                $msg = str_replace("{online}", $online, $message);
                $server->broadcastPopup($msg);
            } elseif($ramdom == 5) {
                $online  = count($server->getOnlinePlayers());
                $message = $this->plugin->config["popup5"];
                $msg = str_replace("{online}", $online, $message);
                $server->broadcastPopup($msg);
            } elseif($ramdom == 6) {
                $online  = count($server->getOnlinePlayers());
                $message = $this->plugin->config["popup6"];
                $msg = str_replace("{online}", $online, $message);
                $server->broadcastPopup($msg);
            } elseif($ramdom == 7) {
                $online  = count($server->getOnlinePlayers());
                $message = $this->plugin->config["popup7"];
                $msg = str_replace("{online}", $online, $message);
                $server->broadcastPopup($msg);
            } elseif($ramdom == 8) {
                $online  = count($server->getOnlinePlayers());
                $message = $this->plugin->config["popup8"];
                $msg = str_replace("{online}", $online, $message);
                $server->broadcastPopup($msg);
            } elseif($ramdom == 9) {
                $online  = count($server->getOnlinePlayers());
                $message = $this->plugin->config["popup9"];
                $msg = str_replace("{online}", $online, $message);
                $server->broadcastPopup($msg);
            } elseif($ramdom == 10) {
                $online  = count($server->getOnlinePlayers());
                $message = $this->plugin->config["popup10"];
                $msg = str_replace("{online}", $online, $message);
                $server->broadcastPopup($msg);
            } elseif($ramdom == 11) {
                    $online  = count($server->getOnlinePlayers());
                $message = $this->plugin->config["popup11"];
                $msg = str_replace("{online}", $online, $message);
                $server->broadcastPopup($msg);
            } elseif($ramdom == 12) {
                $online  = count($server->getOnlinePlayers());
                $message = $this->plugin->config["popup12"];
                $msg = str_replace("{online}", $online, $message);
                $server->broadcastPopup($msg);
            } elseif($ramdom == 13) {
                $online  = count($server->getOnlinePlayers());
                $message = $this->plugin->config["popup13"];
                $msg = str_replace("{online}", $online, $message);
                $server->broadcastPopup($msg);
            } elseif($ramdom == 14) {
                $online  = count($server->getOnlinePlayers());
                $message = $this->plugin->config["message14"];
                $msg = str_replace("{online}", $online, $message);
                $server->broadcastPopup($msg);
            } elseif($ramdom == 15) {
                $online  = count($server->getOnlinePlayers());
                $message = $this->plugin->config["popup15"];
                $msg = str_replace("{online}", $online, $message);
                $server->broadcastPopup($msg);
            }
        
    }
}