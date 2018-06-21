<?php

namespace src\Tests;

use PHPUnit\Framework\TestCase;
use Game\Catalog\Hero;
use Game\Catalog\MultiHero;

class MultiHeroTest extends TestCase
{
    public function test()
    {
        $hero1 = new Hero('Lifestealer', 200);
        $hero2 = new Hero('Rikimaru', 350);
        $multiHero = new MultiHero([$hero1, $hero2]);
        $this->assertInstanceOf(Hero::class, $multiHero);
        $this->assertEquals('Lifestealer + Rikimaru', $multiHero->getName());
        $this->assertEquals(550, $multiHero->getPower());
    }
}