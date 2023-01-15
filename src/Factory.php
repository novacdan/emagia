<?php 

class Factory
{
    public function createHero($config)
    {
        $entityHealth = rand($config['health']['min'], $config['health']['max']);
        $entityStrength = rand($config['strength']['min'], $config['strength']['max']);
        $entityDefence = rand($config['defence']['min'], $config['defence']['max']);
        $entitySpeed = rand($config['speed']['min'], $config['speed']['max']);
        $entityLuck = rand($config['luck']['min'], $config['luck']['max']);

        return new Hero(
            $config['name'], 
            $entityHealth, 
            $entityStrength,
            $entityDefence, 
            $entitySpeed, 
            $entityLuck 
        );
    }

    public function createWildBeast($config)
    {
        $entityHealth = rand($config['health']['min'], $config['health']['max']);
        $entityStrength = rand($config['strength']['min'], $config['strength']['max']);
        $entityDefence = rand($config['defence']['min'], $config['defence']['max']);
        $entitySpeed = rand($config['speed']['min'], $config['speed']['max']);
        $entityLuck = rand($config['luck']['min'], $config['luck']['max']);

        return new WildBeast(
            $config['name'], 
            $entityHealth, 
            $entityStrength,
            $entityDefence, 
            $entitySpeed, 
            $entityLuck 
        );
    }
}