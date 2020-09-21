<?php

declare(strict_types=1);


class Player
{
    // property declaration
    private array $cards;
    private bool $lost;

    // constructor
    public function __construct(array $cards, bool $lost)
    {
        $this->cards  = $cards;
        $this->lost  = $lost;
    }

    // method declaration
    public function hit()
    {
        echo "hit";
    }

    public function Surrender()
    {
        echo "Surrender";
    }

    public function getScore()
    {
        echo "getScore";
    }

    public function hasLost()
    {
        echo "hasLost";
    }
}
