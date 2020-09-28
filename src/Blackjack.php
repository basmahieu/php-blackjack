<?php

declare(strict_types=1);


class Blackjack
{
    // Properties
    private Deck $deck;
    private Player $player;
    private Dealer $dealer;

    // Constructor
    public function __construct()
    {
        $this->deck = new Deck();
        $this->deck->shuffle();

        $this->player = new Player($this->deck);
        $this->dealer = new Dealer($this->deck);
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

    public function getDealer(): Dealer
    {
        return $this->dealer;
    }

    public function winner()
    {
        if ($this->player->stop()) {
            echo  '<div class="alert alert-danger text-center font-weight-bold rounded-0 " role="alert"> You lose, dealer wins!</div>';
        } else if ($this->player->getScore() > 21) {
            echo  '<div class="alert alert-danger text-center font-weight-bold rounded-0 " role="alert"> You lose, dealer wins!</div>';
        } else if ($this->dealer->getScore() > 21) {
            echo '<div class="alert alert-success text-center font-weight-bold rounded-0 " role="alert"> You win!!!</div>';
        }
    }
}

// if ($blackjack->getPlayer()->getScore() > 21) {
//     echo '<div class="alert alert-danger text-center font-weight-bold rounded-0 " role="alert"> You lose, dealer wins!</div>';
// } else if ($blackjack->getDealer()->getScore() > 21) {
//     echo '<div class="alert alert-success text-center font-weight-bold rounded-0 " role="alert"> You win!!!</div>';
// }


// public function winner()
//     {
//         if ($this->player->stop()) {
//             return  '<div class="alert alert-danger text-center font-weight-bold rounded-0 " role="alert"> You lose, dealer wins!</div>';
//         } else if ($this->dealer->stop()) {
//             return '<div class="alert alert-success text-center font-weight-bold rounded-0 " role="alert"> You win!!!</div>';
//         } else if ($this->dealer->getScore() >= $this->dealer->getScore()) {
//             return  '<div class="alert alert-danger text-center font-weight-bold rounded-0 " role="alert"> You lose, dealer wins!</div>';
//         } else if ($this->dealer->getScore() < $this->dealer->getScore()) {
//             return '<div class="alert alert-success text-center font-weight-bold rounded-0 " role="alert"> You win!!!</div>';
//         }
//     }