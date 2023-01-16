<?php

require_once 'enums/SkillsEnum.php';

class Battle {
    protected $hero;
    protected $wildBeast;
    protected $turns = 0;
    protected $maxTurns = 20;
    protected $isHeroFirst = false;

    public function __construct($hero, $wildBeast) {
        $this->hero = $hero;
        $this->wildBeast = $wildBeast;
    }

    public function start() {
        while($this->hero->getHealth() > 0 && $this->wildBeast->getHealth() > 0 && $this->turns < $this->maxTurns) {

            $this->isHeroFirst = !$this->isHeroFirst;

            if ($this->turns === 0) {
                $this->isHeroFirst = $this->isHeroFirst();
            }

            $this->turns++;
            echo "\n\n Turn " . $this->turns . "\n";

            if ($this->isHeroFirst) {
                $this->hero->useSkills($this->wildBeast, SkillsEnum::RapidStrike);
                $this->hero->attack($this->wildBeast);
                if($this->wildBeast->getDefence() > $this->hero->getStrength()) {
                    $this->wildBeast->defend();
                }
            } else {
                $this->wildBeast->attack($this->hero);
                if ($this->hero->getHealth() > 0) {
                    $this->hero->useSkills($this->wildBeast, SkillsEnum::MagicShield);
                }

                if ($this->hero->getDefence() > $this->wildBeast->getStrength()) {
                    $this->hero->defend();
                }
            }
        }

        if ($this->hero->getHealth() > 0) {
            echo "\n Hero wins!\n";
        } else {
            echo "\n Wild Beast wins!\n";
        }
    }
    

    private function isHeroFirst() {
        if ($this->hero->getSpeed() > $this->wildBeast->getSpeed()) {
            return true;
        }

        if ($this->hero->getSpeed() === $this->wildBeast->getSpeed() && $this->hero->getLuck() > $this->wildBeast->getLuck()) {
            return true;
        }
        
        return false;
    }
}