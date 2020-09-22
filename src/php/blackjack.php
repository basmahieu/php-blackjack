<?php

declare(strict_types=1);

require('Player.php');
require('Dealer.php');
require('whatshappening.php');

// Blackjack Rules
// Cards are between 1-11 points.
// Faces are worth 10
// Ace is always worth 11
// Getting more than 21 points, means that you lose.
// To win, you need to have more points than the dealer, but not more than 21.
// The dealer is obligated to keep taking cards until they have at least 15 points.
// We are not playing with blackjack rules on the first turn (having 21 on first turn) 

// Still to do
// step 9: Save this instance in the session (you're gonna need it).



class Blackjack
{
    // property declaration
    private $player;
    private $dealer;
    private $deck;

    // constructor
    public function __construct()
    {
        $this->deck = new Deck();
        $this->deck->shuffle();

        $this->player = new Player($this->deck);
        $this->dealer = new Player($this->deck);
    }


    // method declaration
    public function getPlayer()
    {
        return $this->player;
    }

    public function getDealer()
    {
        return $this->Dealer;
    }
}
