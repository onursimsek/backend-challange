<?php
namespace src\Tests;

use PHPUnit\Framework\TestCase;
use Game\Team;
use Game\Catalog\MultiHero;
use Game\Catalog\Hero;

class TeamTest extends TestCase
{
    public function testSingleHero()
    {
        $team = new Team();

        $hero1 = new Hero('Lifestealer', 200);
        $hero2 = new Hero('Rikimaru', 350);

        $team->add($hero1);
        $team->add($hero2);

        $this->assertEquals($hero1->getPower() + $hero2->getPower(), $team->getTeamTotalPower());
    }

    public function testMultiHero()
    {
        $team = new Team();

        $hero1 = new Hero('Lifestealer', 200);
        $hero2 = new Hero('Rikimaru', 350);
        $hero3 = new Hero('Gondar', 350);
        $multiHero = new MultiHero([$hero1, $hero2]);

        $team->add($multiHero);
        $team->add($hero3);

        $this->assertEquals($multiHero->getPower() + $hero3->getPower(), $team->getTeamTotalPower());
    }
}