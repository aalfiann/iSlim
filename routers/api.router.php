<?php

// GET api user route
$app->get('/api/user', function () use ($app) {
    $app->response->setStatus(200);
    echo 'tester api';
});