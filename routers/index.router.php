<?php

// GET example index route
$app->get('/', function () use ($app) {
    $oStuff = new models\Starter();
    $hello = $oStuff->set();
    $app->render('frontend/index.html', array(
        'hello' => $hello['hello'],
        'description1' => $hello['description1'],
        'description2' => $hello['description2'],
        'author' => $hello['author']
    ));
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
