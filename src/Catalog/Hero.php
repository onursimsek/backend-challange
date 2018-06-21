<?php


namespace Game\Catalog;

class Hero
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var float
     */
    private $power;

    public function __construct(string $name, float $power)
    {
        $this->name = $name;
        $this->power = $power;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return float
     */
    public function getPower(): float
    {
        return $this->power;
    }
}