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

    return $app;

?>
