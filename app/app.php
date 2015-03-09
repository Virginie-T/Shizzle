<?php

    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/PingPongGenerator.php";


    $app = new Silex\Application();
    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get('/', function() use ($app) {
        return $app['twig']->render('form.twig');
    });

    $app->get("/view_result", function() use ($app)  {
        $my_PingPongGenerator = new PingPongGenerator;
        $ping_pong_array = $my_PingPongGenerator->generatePingPongArray($_GET['number']);
        return $app['twig']->render('ping_pong.twig', array('results' => $ping_pong_array));
    });

    return $app;

 ?>
