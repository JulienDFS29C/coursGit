<?php

namespace App\Entity;

class TirageInterfaceAdapter implements TirageInterface
{
    private Deck $deck;



    public function __construct($deck)
    {
        $this->deck = $deck;

    }

    function tirageAuSort():int
    {
        return $this->deck->tirageAuSort();
    }
}