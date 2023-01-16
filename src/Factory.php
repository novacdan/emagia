<?php 

class Factory
{
    public function createHero($config)
    {
        return new Hero(
            $config['name'], 
            $this->generateHealth($config), 
            $this->generateStrength($config),
            $this->generateDefence($config), 
            $this->generateSpeed($config), 
            $this->generateLuck($config) 
        );
    }

    public function createWildBeast($config)
    {
        return new WildBeast(
            $config['name'], 
            $this->generateHealth($config), 
            $this->generateStrength($config),
            $this->generateDefence($config), 
            $this->generateSpeed($config), 
            $this->generateLuck($config) 
        );
    }

    public function generateHealth($config)
    {
        return rand($config['health']['min'], $config['health']['max']);
    }

    public function generateStrength($config)
    {
        return rand($config['strength']['min'], $config['strength']['max']);
    }

    public function generateDefence($config)
    {
        return rand($config['defence']['min'], $config['defence']['max']);
    }

    public function generateSpeed($config)
    {
        return rand($config['speed']['min'], $config['speed']['max']);
    }

    public function generateLuck($config)
    {
        return rand($config['luck']['min'], $config['luck']['max']);
    }
}