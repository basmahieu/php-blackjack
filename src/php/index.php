<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body class="bg-light">
    <?php
    // REQUIRES
    require 'Suit.php';
    require 'Card.php';
    require 'Deck.php';
    require 'Player.php';
    require 'Blackjack.php';

    $blackjack = new blackjack();

    // $blackjack->getPlayer()->hit();

    if (isset($_POST["hit"])) {

        $blackjack->getPlayer()->Hit($blackjack->getDeck());
    }

    // if (isset($_POST["stand"])) {

    //     $blackjack->getPlayer()->Surrender($blackjack->getDeck());
    // }

    if (isset($_POST["surrender"])) {

        $blackjack->getPlayer()->Surrender($blackjack->getDeck());
    }

    ?>
    <container>
        <div class="player">
            <h1>Player</h1>
            <h3> score: <?php echo $blackjack->getPlayer()->getScore(); ?> </h3>
            <p>These are your cards:</p>
            <p style="font-size:160px;">
                <?php
                foreach ($blackjack->getPlayer()->getCards() as $card) {
                    echo $card->getUnicodeCharacter(true);
                }
                ?>
            </p>


            <!-- Buttons -->
            <form method="post">
                <button class="btn btn-primary" type="submit" id="hit" name="hit" value="hit">Hit me!</button>
                <button class="btn btn-success" type="submit" id="stand" name="stand" value="stand">Stand</button>
                <button class="btn btn-danger" type="submit" id="surrender" name="surrender" value="surrender">Surrender</button>
            </form>
            <br>



    </container>

    <?php
    echo '<pre>';
    print_r($blackjack->getPlayer()->getCards());
    echo '</pre>';

    var_dump($_POST);
    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>