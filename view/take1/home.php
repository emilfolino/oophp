<?php
$imgUrl = $app->url->asset("image/me.jpg?w=300");

?><h1 class="title">Home</h1>
<p>This is my homepage for the oophp course.</p>

<p>I am Emil Folino (efo) and I teach in the course. Besides teaching I do a bit of pedagogical research. And when I'm not at work I enjoy running real fast in the forrest.</p>

<img src="<?= $imgUrl ?>" alt="Image of Emil Folino" />
