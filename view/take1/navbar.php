<nav class="navbar is-primary" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="<?php echo $app->navbar->getHomeLink() ?>">EFO</a>

        <!-- <button class="button navbar-burger">
            <span></span>
            <span></span>
            <span></span>
        </button> -->
    </div>

    <div class="navbar-menu">
        <div class="navbar-end">
            <?php echo $app->navbar->getLinks() ?>
        </div>
    </div>
</nav>
