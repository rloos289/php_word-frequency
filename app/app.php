<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RepeatCounter.php";

    session_start();
    if (empty($_SESSION['collection'])) {
        $_SESSION['collection'] = array();
    }

    $app = new Silex\Application();

    $app['debug'] = true;
    error_reporting(E_ERROR | E_PARSE);

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

  //loads actual twig file
    $app->get("/", function() use ($app) {
      return $app['twig']->render("home.html.twig");
    });

  //loads basic php
    $app->post("/result", function() use ($app) {
      $newSearch = new RepeatCounter;
      $inputSentence = $_POST['user_sentence'];
      $inputWord = $_POST['user_word'];
      $wordCount = $newSearch->wordFrequency($inputSentence, $inputWord);
      return $app['twig']->render("result.html.twig", array('result' => $wordCount, 'word' => $inputWord));
    });

    return $app;
?>
