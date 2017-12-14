<?php
$urlHome  = $app->url->create("");
$urlAbout = $app->url->create("about");

?><nav class="navbar is-primary" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="<?= $urlHome ?>">EFO</a>

        <button class="button navbar-burger">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>

    <div class="navbar-menu">
        <div class="navbar-end">
            <a class="navbar-item" href="<?= $urlHome ?>">Home</a>
            <a class="navbar-item" href="<?= $urlAbout ?>">About</a>
        </div>
    </div>
</nav>
