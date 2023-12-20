<?php

namespace App\Entity;

use phpDocumentor\Reflection\Types\This;

class Deck implements TirageInterface
{
    private $topCard;
    private $cardRanks;
    private $color ;

    public function __construct()
    {
        $this->cardRanks = [
            ['sept' => 7],
            ['huit' => 8],
            ['neuf' => 9],
            ['dix' => 10],
            ['valet' => 11],
            ['dame' => 12],
            ['roi' => 13],
            ['as' => 14]
        ];

        $this->color = ['pique', 'coeur', 'carreau', 'trefle'];
    }

    function pioche(): array
    {
        $this->topCard = [
            [$this->color[rand(1,4)]],
            [$this->cardRanks[rand(0,7)]]
        ];
        return $this->topCard;
    }

    function tirageAuSort(): int
    {
        $pioche = $this->pioche();
        return $pioche[0]*$pioche[1];
    }
}

