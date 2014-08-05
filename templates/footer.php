<footer class="footer-main" role="contentinfo">
	<aside class="footer--copyright">
        &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="mailto:joshbroton+prestige@gmail.com">email</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="http://twitter.com/prestigeconf">@prestigeconf</a>
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