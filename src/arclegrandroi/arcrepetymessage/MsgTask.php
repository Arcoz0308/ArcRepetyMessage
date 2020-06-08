<?php

namespace arclegrandroi\arcbroakcast;

use pocketmine\scheduler\Task;
use pocketmine\Server;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;

use arclegrandroi\arcbroakcast\Main;

class MsgTask extends Task {
   
   /** @var Main */
    private $plugin;
  


    public function __construct(Main $plugin) {
        $this->plugin = $plugin;
    }
    public function onRun(int $Tick) {
            $server = Server::getInstance();
            $maxr = $this->plugin->config["random-message"];
            $ramdom = mt_rand(1, $maxr);
            if($ramdom == 1){
                $online  = count($server->getOnlinePlayers());
                $message = $this->plugin->config["message1"];
                $msg = str_replace("{online}", $online, $message);
                $server->broadcastMessage($msg);
            } elseif($ramdom == 2) {
                $online  = count($server->getOnlinePlayers());
                $message = $this->plugin->config["message2"];
                $msg = str_replace("{online}", $online, $message);
                $server->broadcastMessage($msg);
            } elseif($ramdom == 3) {
               $online  = count($server->getOnlinePlayers());
                $message = $this->plugin->config["message3"];
                $msg = str_replace("{online}", $online, $message);
                $server->broadcastMessage($msg);
            } elseif($ramdom == 4) {
                $online  = count($server->getOnlinePlayers());
                $message = $this->plugin->config["message4"];
                $msg = str_replace("{online}", $online, $message);
                $server->broadcastMessage($msg);
            } elseif($ramdom == 5) {
                $online  = count($server->getOnlinePlayers());
                $message = $this->plugin->config["message5"];
                $msg = str_replace("{online}", $online, $message);
                $server->broadcastMessage($msg);
            } elseif($ramdom == 6) {
                $online  = count($server->getOnlinePlayers());
                $message = $this->plugin->config["message6"];
                $msg = str_replace("{online}", $online, $message);
                $server->broadcastMessage($msg);
            } elseif($ramdom == 7) {
                $online  = count($server->getOnlinePlayers());
                $message = $this->plugin->config["message7"];
                $msg = str_replace("{online}", $online, $message);
                $server->broadcastMessage($msg);
            } elseif($ramdom == 8) {
                $online  = count($server->getOnlinePlayers());
                $message = $this->plugin->config["message8"];
                $msg = str_replace("{online}", $online, $message);
                $server->broadcastMessage($msg);
            } elseif($ramdom == 9) {
                $online  = count($server->getOnlinePlayers());
                $message = $this->plugin->config["message9"];
                $msg = str_replace("{online}", $online, $message);
                $server->broadcastMessage($msg);
            } elseif($ramdom == 10) {
                $online  = count($server->getOnlinePlayers());
                $message = $this->plugin->config["message10"];
                $msg = str_replace("{online}", $online, $message);
                $server->broadcastMessage($msg);
            } elseif($ramdom == 11) {
                    $online  = count($server->getOnlinePlayers());
                $message = $this->plugin->config["message11"];
                $msg = str_replace("{online}", $online, $message);
                $server->broadcastMessage($msg);
            } elseif($ramdom == 12) {
                $online  = count($server->getOnlinePlayers());
                $message = $this->plugin->config["message12"];
                $msg = str_replace("{online}", $online, $message);
                $server->broadcastMessage($msg);
            } elseif($ramdom == 13) {
                $online  = count($server->getOnlinePlayers());
                $message = $this->plugin->config["message13"];
                $msg = str_replace("{online}", $online, $message);
                $server->broadcastMessage($msg);
            } elseif($ramdom == 14) {
                $online  = count($server->getOnlinePlayers());
                $message = $this->plugin->config["message14"];
                $msg = str_replace("{online}", $online, $message);
                $server->broadcastMessage($msg);
            } elseif($ramdom == 15) {
                $online  = count($server->getOnlinePlayers());
                $message = $this->plugin->config["message15"];
                $msg = str_replace("{online}", $online, $message);
                $server->broadcastMessage($msg);
            }
        
    }
}