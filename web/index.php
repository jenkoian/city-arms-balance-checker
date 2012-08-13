<?php
require_once __DIR__.'/../vendor/autoload.php';
use Silex\Application;
use Silex\Provider\TwigServiceProvider;
use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$app = new Application();
$app['debug'] = true;
$app->register(new TwigServiceProvider(), array(
    'twig.path'    => array(__DIR__.'/../templates'),
    'twig.options' => array('cache' => __DIR__.'/../cache'),
));

$app->get('/', function (Request $request) use ($app) {

    $defaultUrl = 'https://wwws-uk1.givex.com/public/balance/history.py?282650254+_LANGUAGE_:en+webinfo_id:3800985114x55833f801f6dcbcec42c8b670a5b5846x38';

    return $app['twig']->render('index.twig', array(
        'defaultUrl' => $defaultUrl
    ));
})->bind('homepage');

$app->get('/balance', function (Request $request) use ($app) {

    $balance = 'Error: Tidy has probably overloaded the system';

    if ($url = $request->get('url')) {
        $crawler = new Crawler();
        $crawler->addContent(file_get_contents($url));

        $balance = $crawler->filter('font[color="#ff6633"]')->text();
    }
    echo $balance;
    exit;

})->bind('balance');

$app->get('/wtf', function (Request $request) use ($app) {
    return $app['twig']->render('wtf.twig');
})->bind('wtf');

$app->run();