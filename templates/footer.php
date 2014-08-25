<footer class="footer-main" role="contentinfo">
    <a href="http://twitter.com/prestigeconf" class="twitter-link"></a>
	<aside class="footer--copyright">
        &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> / <a href="mailto:joshbroton+prestige@gmail.com">email</a>
    </aside>
    <nav class="nav-footer" role="navigation">
        <?php
        if (has_nav_menu('footer_navigation')) :
            wp_nav_menu(array('theme_location' => 'footer_navigation', 'menu_class' => 'footer--menu'));
        endif;
        ?>
    </nav>
</footer>
<?php wp_footer(); ?>