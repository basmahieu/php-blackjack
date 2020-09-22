<?php

declare(strict_types=1);

require('Card.php');
require('Deck.php');


class Player
{
    // property declaration
    private array $cards = [];
    private bool $lost = false;

    // constructor
    public function __construct(Deck $deck)
    {
        // Draw 2 cards
        $playerCard1 = $deck->drawCard();
        $playerCard2 = $deck->drawCard();
        $this->cards = [$playerCard1, $playerCard2];
    }

    // method declaration
    public function hit()
    {
    }

    public function Surrender()
    {
        echo "Surrender";
    }

    public function getScore()
    {
        echo "getScore";
    }

    public function hasLost(bool $lost)
    {
        return $lost;
    }
}
