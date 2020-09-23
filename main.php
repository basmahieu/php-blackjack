<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
    <title>Blackjack</title>
</head>

<body>
    <?php
    require 'src/php/Blackjack.php';
    $blackjack = new Blackjack();

    if (isset($_POST["hit"])) {
        $blackjack->getPlayer()->Hit($blackjack->getDeck());
        echo 'I hit the buttonnnnn';
    };
    ?>

    <div class="player">
        <h1>Player</h1>
        <p>These are your cards:</p>
        <p style="font-size:200px;"> <?php foreach ($blackjack->getPlayer()->getCards() as $card) {
                                            echo $card->getUnicodeCharacter(true);
                                        } ?>
        </p>
        <p> The sum is <?php echo $blackjack->getPlayer()->getScore(); ?> </p>
    </div>

    <form method="post">
        <button type="submit" id="hit" name="hit" value="hit">Hit me!</button>
        <button type="submit" id="stand" name="stand" value="stand">Stand</button>
        <button type="submit" id="surrender" name="surrender" value="surrender">Surrender</button>
    </form>

    <?php



    print_r($blackjack->getPlayer()->getCards());

    var_dump($_POST);
    ?>

</body>

</html>