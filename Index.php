<?php

declare(strict_types=1);

// Start Session
session_start();

// Requires
require('src/Suit.php');
require('src/Card.php');
require('src/Deck.php');
require('src/Player.php');
require('src/Blackjack.php');

// global
$winner = '';

// Start and restart
if (isset($_POST['play'])) {
    unset($blackjack);
    session_unset();
    $blackjack = new Blackjack;
    $blackjack->getPlayer()->getStarted();
}

if (!isset($_SESSION['blackjack'])) {
    $blackjack = new Blackjack;
    $_SESSION['blackjack'] = serialize($blackjack);
} else {
    $blackjack = unserialize($_SESSION['blackjack']);
}

if (isset($_POST["hit"])) {
    $blackjack->getPlayer()->hit($blackjack->getDeck());
    $blackjack->getDealer()->hit($blackjack->getDeck());
    $_SESSION['blackjack'] = serialize($blackjack);
    $winner = $blackjack->winner();
}

if (isset($_POST["hold"])) {
    $blackjack->getDealer()->Hit($blackjack->getDeck());
    $_SESSION['blackjack'] = serialize($blackjack);
    $winner = $blackjack->winner();
}

if (isset($_POST["stop"])) {
    $blackjack->getPlayer()->stop();
    $_SESSION['blackjack'] = serialize($blackjack);
    echo  '<div class="alert alert-danger text-center font-weight-bold rounded-0 " role="alert"> You lose, dealer wins!</div>';;
}


// if ($blackjack->getPlayer()->getScore() > 21) {
//     echo '<div class="alert alert-danger text-center font-weight-bold rounded-0 " role="alert"> You lose, dealer wins!</div>';
// } else if ($blackjack->getDealer()->getScore() > 21) {
//     echo '<div class="alert alert-success text-center font-weight-bold rounded-0 " role="alert"> You win!!!</div>';
// }


// echo '<pre>';
// print_r($blackjack->winner());
// echo '</pre>';











// html
require 'src/main.php';
// debug();
