<?php

namespace Game\Catalog;

class MultiHero extends Hero
{
    /**
     * @var array
     */
    private $heroes;

    public function __construct(array $heroes)
    {
        foreach ($heroes as $hero) {
            if ($hero instanceof Hero) {
                $this->heroes[] = $hero;
            }
        }
    }

    public function getName(): string
    {
        return implode(' + ', array_map(function (Hero $hero) {
            return $hero->getName();
        }, $this->heroes));
    }

    public function getPower(): float
    {
        return array_sum(array_map(function (Hero $hero) {
            return $hero->getPower();
        }, $this->heroes));
    }
}