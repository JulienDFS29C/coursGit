<?php

namespace App\Entity;

use ContainerPZqafgj\getConsole_ErrorListenerService;
use mysql_xdevapi\Result;
use phpDocumentor\Reflection\Types\This;

class Dice
{



    public function __construct($nbLancers)
    {
        $this->nbLancers = $nbLancers;
    }


    function lancer($nbLancers, $result): bool
    {


        // Lancer la pièce
        $coinSide = rand(0, 1);
        $result += $coinSide;

        // Appeler récursivement pour le prochain lancer
        return lancer($nbLancers - 1, $result);
    }

}