<?php

include "/vagrant/autoload.php";

use Entity\Heroes\Paladin;
use Entity\Monsters\Monster;
use Service\Dungeon;

$dungeon = new Dungeon();

$hero    = new Paladin();

$enemy   = new Monster();

$result  = $dungeon->battle($hero, $enemy);

echo "---------------------------------------------\n";
$weapon = new \ReflectionClass($hero->getWeapon());
echo "| The hero base damage is {$hero->getBaseDamage()}\n";
echo "| The hero attacks monster with {$weapon->getShortName()}\n";
echo "| Damage done: $result points\n";
echo "---------------------------------------------\n";
