<?php

$router->add("", function () {
    echo <<<EOD
<!doctype html>
<meta charset="utf-8">
<title>Home</title>
<h1>Home</h1>
<p>This is the homepage.</p>
EOD;
});

$router->add("about", function () {
    echo <<<EOD
<!doctype html>
<meta charset="utf-8">
<title>About</title>
<h1>About</h1>
<p>This is the page about me.</p>
EOD;
});
