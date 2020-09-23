<?php

declare(strict_types=1);




class Blackjack
{
    // property declaration
    private Player $player;
    private  $dealer;
    private Deck $deck;

    // constructor
    public function __construct()
    {
        $this->deck = new Deck();
        $this->deck->shuffle();

        $this->player = new Player($this->deck);
        $this->dealer = new Player($this->deck);
    }


    // method declaration
    public function getPlayer(): Player
    {
        return $this->player;
    }

    public function getDealer()
    {
        return $this->dealer;
    }
    public function getDeck(): Deck
    {
        return $this->deck;
    }
}
