<?php

declare(strict_types=1);

//✔
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
        $playerAddCard = $this->deck->drawCard();
        array_push($this->cards, $playerAddCard);

        echo '<div  style="width:500px" class="alert alert-success mt-4">I hit the button</div>';


        $score = $this->getScore();
        if ($score > 21) {
            // echo "{$score} lost";
            return $this->lost;
        }
    }

    public function Surrender()
    {
        return $this->lost = true;
    }

    public function getScore()
    {
        $totalScore = 0;
        foreach ($this->cards as $card) {
            $totalScore += $card->getValue();
        }
        return $totalScore;
    }

    public function hasLost(): bool
    {
        return $this->lost;
    }
}


class Dealer extends Player
{

    public function __construct()
    {
        // Code
    }
}



  // $sum = 0;
        // foreach ($this->cards as $card) {
        //     $sum += $card->getValue();
        // }
        // if ($sum > 21) {
        //     $this->lost = true;
        //     echo 'You lost = ';
        // }
        // echo "<b>{$sum}</b>";