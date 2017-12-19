<?php

$links = $app->session->getLinks();

$number = $app->session->get("number");

?><h2 class="title">Session</h2>
<div class="session-buttons"><?= $links ?></div>

<p><?= ($number !== false) ? "The number is: ".$number : "" ?></p>
