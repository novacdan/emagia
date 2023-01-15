<?php

require_once 'Player.php';

class Hero extends Player {

    public function useSkills($defender, $skill) {
        if ($skill === SkillsEnum::RapidStrike) {
            if (rand(0,100) < 10){
                echo "\033[0;35m " .$this->getName() . " uses ". $skill ."\033[0m\n";
                $this->attack($defender);
            }
        }

        if ($skill === SkillsEnum::MagicShield) {
            if (rand(0,100) < 20){
                echo "\033[0;35m " .$this->getName() . " uses " . $skill ."\033[0m\n";
                $this->defence *= 2;
            }
        }
    }
}