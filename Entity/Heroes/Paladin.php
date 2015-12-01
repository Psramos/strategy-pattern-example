<?php


namespace Entity\Heroes;

use Entity\Monsters\Monster;
use Entity\Weapon\FistsWeapon;

class Paladin extends Human
{
    public function __construct()
    {
        $this->setWeapon(new FistsWeapon());

        $this->baseDamage = 50;
    }

    function attackEnemy(Monster $monster)
    {
        $result =  $this->baseDamage * $this->weapon->damage();

        return $result;
    }
}
