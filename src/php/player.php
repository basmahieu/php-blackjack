<?php

declare(strict_types=1);


class Player
{
    // property declaration
    private array $cards = [];
    private bool $lost = false;
    private Deck $deck;

    // constructor
    public function __construct(Deck $deck)
    {
        // Draw 2 cards
        $this->deck = $deck;
        $playerCard1 = $deck->drawCard();
        $playerCard2 = $deck->drawCard();
        $this->cards = [$playerCard1, $playerCard2];
    }

    //GETTER
    public function getCards()
    {
        return $this->cards;
    }

    // method declaration
    public function hit()
    {
        // get cards ✔ 
        // add card to player ✔
        // Get value, above 21 lost = true

        $playerAddCard = $this->deck->drawCard();
        array_push($this->cards, $playerAddCard);
    }



    public function Surrender()
    {
        // code
    }

    public function getScore()
    {
        // code

    }

    public function hasLost(bool $lost): bool
    {
        return $lost;
    }
}


class Dealer extends Player
{

    public function __construct()
    {
        // Code
    }
}
