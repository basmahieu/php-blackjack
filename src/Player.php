<?php

declare(strict_types=1);


class Player
{
    // Property declaration
    private array $cards = [];
    private bool $lost = false;

    // Constructor
    public function __construct(Deck $deck)
    {
        $this->deck = $deck;
        $playerCard1 = $deck->drawCard();
        $playerCard2 = $deck->drawCard();
        $this->cards = [$playerCard1, $playerCard2];
    }

    // Getters
    public function getStarted()
    {
        echo '<div class="alert alert-success text-center font-weight-bold rounded-0 " role="alert"> New game</div>';
    }

    public function getCards(): array
    {
        return $this->cards;
    }

    //Methods
    public function cardsImg(): void
    {
        foreach ($this->cards as $card) {
            echo $card->getUnicodeCharacter(true);
        }
    }

    public function getScore()
    {
        $totalScore = 0;
        foreach ($this->cards as $card) {
            $totalScore += $card->getValue();
        }
        return $totalScore;
    }

    public function hit()
    {
        $playerAddCard = $this->deck->drawCard();
        array_push($this->cards, $playerAddCard);

        $score = $this->getScore();
        if ($score > 21) {
            echo '<div class="alert alert-danger text-center font-weight-bold rounded-0 " role="alert"> You lose, dealer wins!</div>';
        }
    }

    public function hold(): void
    {
    }

    public function stop()
    {
        return $this->lost = true;
    }
}
