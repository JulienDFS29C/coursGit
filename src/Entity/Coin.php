<?php



namespace App\Entity;

use phpDocumentor\Reflection\Types\Boolean;

class Coin
{


    function lancer($nbLancers): bool
    {

        /**************Algo NOK******************/


        while ($nbLancers >= 0) {
            $result = rand(0, 1);
            --$nbLancers;
            return $nbLancers * $this->lancer($nbLancers);

        }
        return boolval( 'sthg');
    }
}
