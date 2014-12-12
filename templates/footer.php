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
<!-- Facebook Conversion Code for Prestige Ticket Ad -->
<script>(function() {
        var _fbq = window._fbq || (window._fbq = []);
        if (!_fbq.loaded) {
            var fbds = document.createElement('script');
            fbds.async = true;
            fbds.src = '//connect.facebook.net/en_US/fbds.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(fbds, s);
            _fbq.loaded = true;
        }
    })();
    window._fbq = window._fbq || [];
    window._fbq.push(['track', '6017528258087', {'value':'0.01','currency':'USD'}]);
</script>
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6017528258087&amp;cd[value]=0.01&amp;cd[currency]=USD&amp;noscript=1" /></noscript>