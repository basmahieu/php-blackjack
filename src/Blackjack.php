<?php

declare(strict_types=1);


class Blackjack
{
    // Properties
    private Deck $deck;
    private Player $player;
    private $dealer;

    // Constructor
    public function __construct()
    {
        $this->deck = new Deck();
        $this->deck->shuffle();

        $this->player = new Player($this->deck);
        // $this->dealer = new Dealer($this->deck);
    }

    // Methods


    public function getDeck(): Deck
    {
        return $this->deck;
    }

    public function getPlayer(): Player
    {
        return $this->player;
    }

    public function getDealer()
    {
        return $this->dealer;
    }
}
