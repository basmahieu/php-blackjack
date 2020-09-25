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
    $blackjack->getPlayer()->Hit($blackjack->getDeck());
    $_SESSION['blackjack'] = serialize($blackjack);
}







// echo '<pre>';
// print_r($blackjack->getPlayer()->Hit());
// echo '</pre>';











// html
require 'src/main.php';
// debug();
