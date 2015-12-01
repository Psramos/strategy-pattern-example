<?php

include "/vagrant/autoload.php";

use Entity\Heroes\Paladin;
use Entity\Monsters\Monster;
use Entity\Weapon\ExcaliburWeapon;
use Entity\Weapon\SwordWeapon;
use Service\Dungeon;

class DungeonTest extends \PHPUnit_Framework_TestCase
{
    public function testAttackWithFistsWillReturnHalfBaseDamage()
    {
        $dungeon = new Dungeon();

        $paladin = new Paladin();

        $monster = new Monster();

        $damage  = $dungeon->battle($paladin, $monster);

        $this->assertEquals($paladin->getBaseDamage() / 2, $damage);
    }

    public function testAttackWithSwordWeaponShouldReturnBaseDamageX2()
    {
        $dungeon = new Dungeon();

        $paladin = new Paladin();

        $paladin->setWeapon(new SwordWeapon());

        $monster = new Monster();

        $damage  = $dungeon->battle($paladin, $monster);

        $this->assertEquals($paladin->getBaseDamage() * 2, $damage);
    }

    public function testAttackWithExcaliburWeaponShouldReturnBaseDamageX10()
    {
        $dungeon = new Dungeon();

        $paladin = new Paladin();

        $paladin->setWeapon(new ExcaliburWeapon());

        $monster = new Monster();

        $damage  = $dungeon->battle($paladin, $monster);

        $this->assertEquals($paladin->getBaseDamage() * 10, $damage);
    }
}
