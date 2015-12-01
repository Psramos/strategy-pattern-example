<?php

namespace Entity\Heroes;

use Entity\Monsters\Monster;
use Entity\Weapon\Weapon;

abstract class Human
{
    /** @var  integer $baseDamage */
    protected $baseDamage;

    /** @var  Weapon $weapon */
    protected $weapon;

    public function setWeapon(Weapon $weapon)
    {
        $this->weapon = $weapon;
    }

    public function getWeapon()
    {
        return $this->weapon;
    }

    public function getBaseDamage()
    {
        return $this->baseDamage;
    }

    abstract function attackEnemy(Monster $monster);
}
