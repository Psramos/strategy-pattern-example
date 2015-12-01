<?php

namespace Service;

use Entity\Heroes\Human;
use Entity\Monsters\Monster;

class Dungeon
{
    /**
     * Perform a combat between hero and a monster.
     *
     * @param Human   $human
     * @param Monster $monster
     *
     * @return integer Damage done
     */
    public function battle(Human $human, Monster $monster)
    {
        return $human->attackEnemy($monster);
    }
}
