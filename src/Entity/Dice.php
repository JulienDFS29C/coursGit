<?php

class Dice implements Tirage
{


    public function tirageAuSort()
    {
        return rand(1, 6);

    }
}