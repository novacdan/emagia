<?php

require_once 'src/Hero.php';
require_once 'src/WildBeast.php';
require_once 'src/Battle.php';
require_once 'src/Factory.php';

//Configuration
require_once 'config/hero_config.php';
require_once 'config/wild_beast_config.php';

$factory = new Factory();
$hero = $factory->createHero($hero_config);
$wildBeast = $factory->createWildBeast($wild_beast_config);
$battle = new Battle($hero, $wildBeast);
$battle->start();