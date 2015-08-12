<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RPSGame.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));


    // Route directory starts game
    $app->get("/", function() use ($app) {
        return $app['twig']->render('start_game.html.twig');
    });

    // Results route
    $app->get("/shoot", function() use($app)
    {
        $my_RPSGame = new RPSGame;
        $winner = $my_RPSGame->chooseWinner($_GET['Player1'], $_GET['Player2']);
        return $app['twig']->render('shoot.html.twig', array('winner' => $winner));
    });

    // Play computer form
    $app->get("/play_computer", function() use ($app) {
        return $app['twig']->render('play_computer.html.twig');
    });

    // Play computer results
    $app->get("/shoot_computer", function() use($app)
    {
        $my_RPSGame = new RPSGame;
        $options = array("Rock", "Paper", "Scissors");
        $computer = $options[rand(0,2)];
        $winner = $my_RPSGame->chooseWinner($_GET['Player1'], $computer);
        return $app['twig']->render('shoot_computer.html.twig', array('winner' => $winner, 'player1' => $_GET['Player1'], 'computer' => $computer));
    });

    return $app;

?>
