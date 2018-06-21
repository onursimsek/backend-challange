<?php
namespace Game;

use Game\Catalog\Hero;

class Team
{
    /**
     * @var Hero[]
     */
    private $heroes;

    public function add(Hero $hero)
    {
        $this->heroes[] = $hero;
    }

    public function getTeamTotalPower()
    {
        $teamTotalPower = array_map(function(Hero $item) {return $item->getPower(); }, $this->heroes);
        return array_sum($teamTotalPower);
    }
}