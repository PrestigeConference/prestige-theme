<!-- MAILING LIST -->
<section class="home--mailing-list">
    <header class="mailing-list--header">
        <h1 class="home--title mailing-list--title title_centered">
            Join Our Mailing List
        </h1>
        <section class="header--description">
            Subscribe to our mailing list to stay up-to-date on the event.
        </section>
    </header>
    <section class="mailing-list--form">
        <div id="mc_embed_signup">
            <form action="http://3them.us3.list-manage1.com/subscribe/post?u=ff9b1b919f5610284e398ddbc&amp;id=cfae067c87" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                <label for="mce-EMAIL">Subscribe to our mailing list</label>
                <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
                <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;"><input type="text" name="b_ff9b1b919f5610284e398ddbc_cfae067c87" tabindex="-1" value=""></div>
            </form>
        </div>
    </section>
</section>

<footer class="footer-main" role="contentinfo">
    <a href="http://twitter.com/prestigeconf" class="twitter-link"></a> <a href="http://facebook.com/prestigeconf" class="facebook-link"></a>
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