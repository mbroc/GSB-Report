<?php

// Register global error and exception handlers
use Symfony\Component\Debug\ErrorHandler;

ErrorHandler::register();

use Symfony\Component\Debug\ExceptionHandler;

ExceptionHandler::register();

// Register service providers.
$app->register(new Silex\Provider\DoctrineServiceProvider());
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__ . '/../views',
));

// Register services.
$app['dao.family'] = $app->share(function ($app) {
    return new GSB\DAO\FamilyDAO($app['db']);
});
$app['dao.drug'] = $app->share(function ($app) {
    $drugDAO = new GSB\DAO\DrugDAO($app['db']);
    $drugDAO->setFamilyDAO($app['dao.family']);
    return $drugDAO;
});

$app['dao.practitionerType'] = $app->share(function ($app) {
    return new GSB\DAO\PractitionerTypeDAO($app['db']);
});

$app['dao.practitioner'] = $app->share(function ($app) {
    $practitionerDAO = new GSB\DAO\PractitionerDAO($app['db']);
    $practitionerDAO->setPractitionerTypeDAO($app['dao.practitionerType']);
    return $practitionerDAO;
});

$app->register(new Silex\Provider\SessionServiceProvider());
$app->register(new Silex\Provider\UrlGeneratorServiceProvider());
$app->register(new Silex\Provider\SecurityServiceProvider(), array(
    'security.firewalls' => array(
        'login' => array(
            'pattern' => '^/login$',
            'anonymous' => true
        ),
        'secured' => array(
            'pattern' => '^.*$',
            'logout' => true,
            'form' => array('login_path' => '/login', 'check_path' => '/login_check'),
            'users' => $app->share(function () use ($app) {
                return new GSB\DAO\VisitorDAO($app['db']);
            }),
        ),
    ),
));