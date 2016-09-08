<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/car.php';

    $app = new Silex\Application();

    session_start();
    if (empty($_SESSION['cars'])) {
        $_SESSION['cars'] = array();
    }

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get('/', function() use ($app) {
        return $app['twig']->render('inventory.html.twig', array('cars' => $_SESSION['cars']));
    });

    $app->post('/postcar', function() use ($app){
        $make = $_POST['make'];
        $model = $_POST['model'];
        $price = $_POST['price'];
        $color = $_POST['color'];
        $new_car = new Car($make, $model, $price, $color);
        array_push($_SESSION['cars'], $new_car);
        return $app->redirect('/');
    });

    return $app;
?>
