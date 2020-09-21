<?php

declare(strict_types=1);

// Blackjack Rules
// Cards are between 1-11 points.
// Faces are worth 10
// Ace is always worth 11
// Getting more than 21 points, means that you lose.
// To win, you need to have more points than the dealer, but not more than 21.
// The dealer is obligated to keep taking cards until they have at least 15 points.
// We are not playing with blackjack rules on the first turn (having 21 on first turn) 


class Blackjack
{
    // property declaration
    private $player;
    private $dealer;
    private $deck;

    // constructor
    public function __construct()
    {
        $this->cards  = $cards;
        $this->lost  = $lost;
    }

    // method declaration
    public function getPlayer()
    {
        echo "getPlayer";
    }

    public function getDealer()
    {
        echo "getDealer";
    }

    public function getPlayer()
    {
        echo "getPlayer";
    }
}
