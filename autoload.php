<?php

function autoload() {
    require_once("Entity/Heroes/Human.php");
    require_once("Entity/Heroes/Paladin.php");
    require_once("Entity/Monsters/Monster.php");
    require_once("Entity/Weapons/Weapon.php");
    require_once("Entity/Weapons/HammerWeapon.php");
    require_once("Entity/Weapons/ExcaliburWeapon.php");
    require_once("Entity/Weapons/FistsWeapon.php");
    require_once("Entity/Weapons/SwordWeapon.php");
    require_once("Service/Dungeon.php");
}

spl_autoload_register('autoload');
