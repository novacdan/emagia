<?php

require_once 'src/Hero.php';
require_once 'src/WildBeast.php';
require_once 'src/Battle.php';

//Configuration
require_once 'config/hero_config.php';
require_once 'config/wild_beast_config.php';

$heroHealth = rand($hero_config['health']['min'], $hero_config['health']['max']);
$heroStrength = rand($hero_config['strength']['min'], $hero_config['strength']['max']);
$heroDefence = rand($hero_config['defence']['min'], $hero_config['defence']['max']);
$heroSpeed = rand($hero_config['speed']['min'], $hero_config['speed']['max']);
$heroLuck = rand($hero_config['luck']['min'], $hero_config['luck']['max']);

$wildBeastHealth = rand($wild_beast_config['health']['min'], $wild_beast_config['health']['max']);
$wildBeastStrength = rand($wild_beast_config['strength']['min'], $wild_beast_config['strength']['max']);
$wildBeastDefence = rand($wild_beast_config['defence']['min'], $wild_beast_config['defence']['max']);
$wildBeastSpeed = rand($wild_beast_config['speed']['min'], $wild_beast_config['speed']['max']);
$wildBeastLuck = rand($wild_beast_config['luck']['min'], $wild_beast_config['luck']['max']);

$hero = new Hero(
    $hero_config['name'], //Hero Name
    $heroHealth, 
    $heroStrength,
    $heroDefence, 
    $heroSpeed, 
    $heroLuck 
); 

$wildBeast = new WildBeast(
    $wild_beast_config['name'], //Wild Beast Name
    $wildBeastHealth, 
    $wildBeastStrength, 
    $wildBeastDefence, 
    $wildBeastSpeed, 
    $wildBeastLuck 
);

$battle = new Battle($hero, $wildBeast);
$battle->start();


// $battle = new Battle($hero, $wildBeast);
// $battle->start();
