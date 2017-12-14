<?php

$app->router->add("", function () use ($app) {
    $urlHome  = $app->url->create("");
    $urlAbout = $app->url->create("about");
    $navbar = <<<EOD
<navbar>
    <a href="$urlHome">Home</a> |
    <a href="$urlAbout">About</a>
</navbar>
EOD;

    $body = <<<EOD
<!doctype html>
<meta charset="utf-8">
<title>Home</title>
$navbar
<h1>Home</h1>
<p>This is the homepage.</p>
EOD;

    echo $body;
});

$app->router->add("about", function () use ($app) {
    $urlHome  = $app->url->create("");
    $urlAbout = $app->url->create("about");
    $navbar = <<<EOD
<navbar>
    <a href="$urlHome">Home</a> |
    <a href="$urlAbout">About</a>
</navbar>
EOD;

    $body = <<<EOD
<!doctype html>
<meta charset="utf-8">
<title>About</title>
$navbar
<h1>About</h1>
<p>This is the page about me.</p>
EOD;

    echo $body;
});

$app->router->add("debug", function () use ($app) {
    $currentRoute = $app->request->getRoute();
    $routes = "<ul>";
    foreach ($app->router->getAll() as $route) {
        $routes .= "<li>'" . $route->getRule() . "'</li>";
    }
    $routes .= "</ul>";

    $intRoutes = "<ul>";
    foreach ($app->router->getInternal() as $route) {
        $intRoutes .= "<li>'" . $route->getRule() . "'</li>";
    }
    $intRoutes .= "</ul>";

    $body = <<<EOD
<!doctype html>
<meta charset="utf-8">
<title>Debug</title>
<h1>Debug</h1>
<p>The route '$currentRoute' could not be found!</p>
<h2>Routes loaded</h2>
<p>The following routes are loaded:</p>
$routes
<p>The following internal routes are loaded:</p>
$intRoutes
EOD;

    echo $body;
});
