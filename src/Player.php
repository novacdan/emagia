<?php

require_once 'enums/StatEnum.php';

abstract class Player {
    protected $name;
    protected $health;
    protected $strength;
    protected $defence;
    protected $speed;
    protected $luck;
    
    public function __construct($name, $health, $strength, $defence, $speed, $luck) {
        $this->name = $name;
        $this->health = $health;
        $this->strength = $strength;
        $this->defence = $defence;
        $this->speed = $speed;
        $this->luck = $luck;
    }
    
    abstract public function useSkills($defender, $skill);

    public function attack($defender) {
         //If the defense is greater than the attack power, the damage will be 0
        $damage = max(0, $this->getStrength() - $defender->getDefence());

        if(rand(0,100) > $defender->getLuck()) {
         $defender->setHealth($defender->getHealth() - $damage);
        } 
        
        echo "\033[0;33m " . $this->getName() . " does " . $damage . " damage to " . $defender->getName() ." (HP: " . $defender->getHealth() .")\033[0m\n";

    }

    public function defend() {
        echo "\033[0;33m " . $this->getName() . " defended!\033[0m\n";
    }
   
    public function getName() {
        return $this->name;
    }
    
    public function getHealth() {
        return $this->health < 0 ? 0 : $this->health;
    }
    
    public function setHealth($health) {
        $this->health = $health;
    }
    
    public function getStrength() {
        return $this->strength;
    }
    
    public function getDefence() {
        return $this->defence;
    }
    
    public function getSpeed() {
        return $this->speed;
    }
    
    public function getLuck() {
        return $this->luck;
    }

    // public function resetStat($stat) {
        // $factory = new Factory();

        // switch ($stat) {
        //     case StatEnum::Strength:
        //         $this->strength = $factory->generateStrength($config);
        //         break;
        //     case StatEnum::Defence:
        //         $this->defence = $factory->generateDefence($config);
        //         break;
        //     case StatEnum::Speed:
        //         $this->speed = $factory->generateSpeed($config);
        //         break;
        //     case StatEnum::Luck:
        //         $this->luck = $factory->generateLuck($config);
        //         break;
        //     default:
        //         echo "Invalid statistic to reset (". $this->getName() .").";
        // }
    // }

}