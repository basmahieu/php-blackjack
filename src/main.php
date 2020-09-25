<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- CSS -->
    <link rel="stylesheet" href="src/css/style.css" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />

    <title>BLACKJACK</title>
</head>

<body class="bg-info">


    <h1 class="text-light font-weight-bold text-center mt-4">Blackjack</h1>
    <!-- Buttons -->
    <div class=" text-center">
        <div class="bg-light container p-4 mt-4 rounded ">
            <form method="post">
                <button class="m-2 btn btn-lg btn-success" type="submit" id="play" name="play" value="play">Play</button>
                <button class="m-2 btn btn-lg btn-primary" type="submit" id="hit" name="hit" value="hit">Hit</button>
                <button class="m-2 btn btn-lg btn-dark" type="submit" id="hold" name="hold" value="hold">Hold</button>
                <button class="m-2 btn btn-lg btn-danger" type="submit" id="stop" name="stop" value="stop">Stop</button>
            </form>
        </div>
    </div>

    <!-- Player -->
    <div class="bg-light container p-4 mt-4 rounded shadow p-3">
        <h2 class="font-weight-bold text-center">Player</h2>


        <p class="text-center" style="font-size:160px; margin-top:-60px;">
            <?= $blackjack->getPlayer()->cardsImg(); ?>
            <h3 class="font-weight-bold text-center  
            <?=
                $score = $blackjack->getPlayer()->getScore();
            if ($score < 21) {
                echo ' text-primary';
            } else {
                echo ' text-danger';
            }
            ?>">
                <?= $blackjack->getPlayer()->getScore(); ?>
            </h3>
    </div>
    <!-- Dealer -->
    <div class="bg-light container p-4 mt-4 rounded shadow p-3">
        <h2 class="font-weight-bold text-center">Dealer</h2>


        <p class="text-center" style="font-size:160px; margin-top:-60px;">
            <?= $blackjack->getDealer()->cardsImg(); ?>
            <h3 class="font-weight-bold text-center  
            <?=
                $score = $blackjack->getDealer()->getScore();
            if ($score < 21) {
                echo ' text-primary';
            } else {
                echo ' text-danger';
            }
            ?>">
                <?= $blackjack->getDealer()->getScore(); ?>
            </h3>
    </div>

</body>

</html>