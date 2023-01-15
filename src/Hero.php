<?php

require_once 'Player.php';

class Hero extends Player {

    public function useSkills($defender) {
        //Rapid Strike SKILL
        if(rand(0,100) < 10){
            echo "\033[0;35m " .$this->getName() . " uses Rapid Strike!\033[0m\n";
            $this->attack($defender);
        }

        //Magic Shield SKILL
        if(rand(0,100) < 20){
            echo "\033[0;35m " .$this->getName() . " uses Magic Shield!\033[0m\n";
            $this->defence *= 2;
        }
    }
}