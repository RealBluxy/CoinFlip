<?php

/*
 *
 *╭━━╮╭╮
 *┃╭╮┃┃┃
 *┃╰╯╰┫┃╭╮╭┳╮╭┳╮╱╭╮
 *┃╭━╮┃┃┃┃┃┣╋╋┫┃╱┃┃
 *┃╰━╯┃╰┫╰╯┣╋╋┫╰━╯┃
 *╰━━━┻━┻━━┻╯╰┻━╮╭╯
 *╱╱╱╱╱╱╱╱╱╱╱╱╭━╯┃
 *╱╱╱╱╱╱╱╱╱╱╱╱╰━━╯
 *
 *                Copyright (C) <2021>  <Bluxy>
 *
 *    This program is free software: you can redistribute it and/or modify
 *    it under the terms of the GNU General Public License as published by
 *    the Free Software Foundation, either version 3 of the License, or
 *    any later version.
 *
 *    This program is distributed in the hope that it will be useful,
 *    but WITHOUT ANY WARRANTY; without even the implied warranty of
 *    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *    GNU General Public License for more details.
 *
 *    Note : If You Found Any Isuess Or Suggestions Please Contact Me On Discord : "Blux#4061"
 *
*/

declare(strict_types = 1);

namespace Bluxy\CoinFlip;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;


class CoinFlip extends PluginBase implements Listener {
    
    public function onEnable() : void{
    }

    public function onDisable() : void{
    }

    public function Flip(){

        $result = mt_rand(0,1);//1 tails : 0 heads

        return $result;
    }

    public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool {
        switch ($command->getName()) {
          case "coinflip":
            
            if( $this->flip() == 1){
                
                $this->getServer()->broadcastMessage("§6>> §eA coin flip resulted in: §l§eTails");
                
            } else {
                
                $this->getServer()->broadcastMessage("§6>> §eA coin flip resulted in: §l§eHeads");

            }

            break;
        }
        return true;
    }
}

?>