<?php

declare(strict_types=1);

// START SESSION
session_start();


// REQUIRES
require 'Suit.php';
require 'Card.php';
require 'Deck.php';
require 'Player.php';
require 'Blackjack.php';

// require 'Script.php';

$blackjack = new blackjack();
// print_r($blackjack->getPlayer());
$blackjack->getPlayer()->hit();

echo '<pre>';
print_r($blackjack->getPlayer()->getCards());
echo '</pre>';



// whatIsHappening();
