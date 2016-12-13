<?php

// GET example index route
$app->get('/', function () use ($app) {
    $oStuff = new models\Starter();
    $hello = $oStuff->set();
    $app->render('frontend/index.html', array('hello' => $hello));
});

// GET example loop route
$app->get('/loop', function () use ($app) {
    $oStuff = new models\Starter();
    $hello = $oStuff->getAll();
    $items = array();
    foreach ($hello as $doc){
        $items[] = $doc;        
    }  
    $app->render('frontend/loop.html', array('items' => $items));
});
