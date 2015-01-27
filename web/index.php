<?php

use Nice\Extension\TemplatingExtension;
use Nice\Application;
use Nice\Router\RouteCollector;
use Symfony\Component\HttpFoundation\Response;

require __DIR__ . '/../vendor/autoload.php';

$app = new Application();
$app->appendExtension(new TemplatingExtension(array(
    'enable_php_engine' => true
)));
$app->set('routes', function (RouteCollector $r) {
    $r->map('/', 'home', function (Application $app) {
        return new Response($app->get('templating')->render('home.html.php'));
    });

    $r->map('/examples', 'examples', function (Application $app) {
        return new Response($app->get('templating')->render('examples.html.php'));
    });

    $r->map('/license', 'license', function (Application $app) {
        return new Response($app->get('templating')->render('license.html.php'));
    });
});
$app->run();
