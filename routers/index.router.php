<?php

// GET index route
$app->get('/', function () use ($app) {
    $oStuff = new models\Stuff();
    $hello = $oStuff->getAllStuff();
    $items = array();
    foreach ($hello as $doc){
        $items[] = $doc;        
    }  
    $app->render('index.html', array('items' => $items));
});
