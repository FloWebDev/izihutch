<div id="pagination">
<p><?php previous_posts_link( '<i class="fas fa-arrow-left"></i>' ); ?></p>
<p><?php next_posts_link( '<i class="fas fa-arrow-right"></i>' ); ?></p>
</div>

<?php

$footerMenu = wp_nav_menu([
    'theme_location' => 'footerIzi',
    'container' => 'nav',
    'container_class' => 'izihutch-nav',
    'menu_class' => 'izihutch-ul',
    'echo' => false
    ]);

    // $menu = str_replace('menu-item ', 'left__nav-item ', $menu);
    // $menu = str_replace(' href', ' class="left__nav-link" href', $menu);
    // $secondMenu = str_replace('menu-menu-footer-hutch-container', 'nope', $secondMenu);

    echo $footerMenu;

?>    
    
    </main>

<footer>
    <p>
        &copy; Copyright 2017 - <?= date('Y'); ?> - Florian Mathevon - Tous droits réservés <?php wp_register('- ', ''); ?>
        <br>
        Thème izihutch - Version 0.0.1
        <br>
    </p>
</footer>

</div>

<?php wp_footer(); ?>

</body>
</html>