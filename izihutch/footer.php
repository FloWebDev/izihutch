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

    // $footerMenu = str_replace('menu-item ', 'left__nav-item ', $footerMenu);

    echo $footerMenu;

?>    
    
    </main>

<footer>
    <p>
        &copy; Copyright <?= date('Y'); ?> - Florian Mathevon - Tous droits réservés - <a href="<?php echo wp_login_url(get_permalink()); ?>" title="Login">Connexion</a> <?php wp_register('- ', ''); ?>
        <br>
        Thème izihutch - Version 0.0.1
    </p>
</footer>

</div>

<?php wp_footer(); ?>

</body>
</html>