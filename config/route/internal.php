<?php

$app->router->addInternal("404", function () use ($app){
    $body = <<<EOD
<!doctype html>
<meta charset="utf-8">
<title>404</title>
<h1>404 Not Found</h1>
<p>The route could not be found!</p>
EOD;

$app->response->setBody($body)
              ->send(404);
});
