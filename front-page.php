<?php $activeConference = 'feb15'; ?>

<!-- INTRO -->
<section class="home--intro faux-paper">
    <div class="intro_inner">
        <header class="intro--header faux-paper--header">
            Prestige Conference is about community. It’s about growth. It’s about sharing knowledge and learning from each other.
        </header>
        <section class="intro--content">
            Prestige is a business and career development conference geared towards freelancers, entrepreneurs, and small shops operating in the digital marketplace. We bring in experts from around the country to share their expertise and advice to help you launch your own business into the next stage of success. Join our mailing list to stay up-to-date:
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
            <section class="intro--hosted-in">
                Hosted by <a href="http://innevation.com">Innevation</a> and <a href="http://9seeds.com">9seeds</a> in Las Vegas, Nevada and streamed live wherever you are.
            </section>
        </section>
    </div>
</section>



<!-- PRESS -->
<section class="home--press">
    <header class="press--header">
        <h1 class="home--title home--press--title title_centered">
            Buzz for Prestige
        </h1>
        Check out what others have to say about Prestige Conferece. We take pride in putting together a great conference for our attendees to truly benefit from.
    </header>
    <section class="press--content">
        <section class="press--quote">
            <section class="quote--image">
                <img src="http://prestigeconf.com/wp-content/uploads/2014/07/matt.jpg" alt="Matt Medeiros" />
            </section>
            <div class="quote--name">
                Matt Medeiros, Slocum Studios
            </div>
            <section class="quote--text">
                PrestigeConf was a refreshing experience as a speaker and for the attendees seeking to enhance their business prowess. Scoring from top to bottom, starting with communication of the organizing team to the logistics the day of, the PrestigeConf team receives an A+ in my book. <a class="quote--read-more-link">(read more)</a> <span class="quote--read-more-content hidden">Josh and Kiko managed to put something together that broke the mold for those of us caught in the circuit of conferences and provided real ROI for attendees.<br>
                    <br>
                    Their secret sauce? Creating an intimate atmosphere where attendees could interact with featured speakers and extend their conference experience. PrestigeConf was a tremendous event with super value -- don't miss the next one.
                </span>
            </section>
        </section>
        <section class="press--quote">
            <section class="quote--image">
                <img src="http://prestigeconf.com/wp-content/uploads/2014/07/jake.jpg" alt="Jake Goldman" />
            </section>
            <div class="quote--name">
                Jake Goldman, 10up
            </div>
            <section class="quote--text">
                Kudos to #prestigeconf for a solid business event. Exactly what we need: a lot less preaching, and a lot more teaching.
            </section>
        </section>
        <section class="press--quote">
            <section class="quote--image">
                <img src="http://prestigeconf.com/wp-content/uploads/2014/09/James-Dalman.jpg" alt="James Dalman" />
            </section>
            <div class="quote--name">
                James Dalman, Happy Joe
            </div>
            <section class="quote--text">
                If I didn't say it already, #PrestigeConf was better than any WordCamp I've ever attended. So MUCH great stuff!
            </section>
        </section>
        <section class="press--quote">
            <section class="quote--image">
                <img src="http://prestigeconf.com/wp-content/uploads/2015/01/jeremy-ward.jpg" alt="Jeremy Ward" />
            </section>
            <div class="quote--name">
                Jeremy Ward, Westwerk
            </div>
            <section class="quote--text">
                Most of today's technology conferences focus solely on tools and techniques for building cutting-edge web applications. Prestige breaks the mold by offering something different: real-talk from leaders in the tech community about what it actually means <a class="quote--read-more-link">(read more)</a> <span class="quote--read-more-content hidden">to run a products or client services business. With topics ranging from how to grow your business, what to expect upon entering the products market, how to identify process inefficiencies, and what to charge, Prestige provides a valuable new set of tools for entrepreneurial developers and leaders. I highly recommend it.</span>
            </section>
        </section>
    </section>
</section>


<!-- SPEAKERS -->
<section class="home--speakers" id="speakers">
    <header class="home--speakers--header">
        <h1 class="home--title home--speakers--title" data-30p-center-top="">
            Our Speakers
        </h1>
        <section class="header--description">
            Instead of many tracks filled with volunteer speakers, we've scoured the WordPress community for some of the very best speakers and are paying for their travel to come and speak in Las Vegas. What does that mean for you? You'll have a day full of great sessions on managing a business and your career.
            <section class="header--biography_wrapper" id="headerBiography"></section>
        </section>
        <nav class="home--speakers--nav">
            <a id="prevSpeaker" class="arrow-left icon-arrow-left"></a>
            <a id="nextSpeaker" class="arrow-right icon-arrow-right"></a>
        </nav>
    </header>
    <section class="home--speakers--list_wrapper">
        <ul class="home--speakers--list">
            <?php
            $speakerQueryArgs = array('post_type' => 'Speaker',
                'posts_per_page' => '100',
                'category_name' => $activeConference);
            $speakerQuery = new WP_Query( $speakerQueryArgs );

            while($speakerQuery->have_posts()) : $speakerQuery->the_post(); ?>
                <li class="home--speaker" data-url="<?php the_permalink(); ?>">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <section class="home--speaker--picture">
                            <?php the_post_thumbnail(); ?>
                        </section>
                    <?php endif; ?>
                    <section class="home--speaker--content">
                        <h3 class="home--speaker--name">
                            <?php the_title(); ?>
                        </h3>
                        <section class="home--speaker--biography_wrapper">
                            <section class="home--speaker--biography">
                                <?php the_field('biography'); ?>
                            </section>
                            <div class="home--speaker--links">
                                <a href="http://www.twitter.com/<?php the_field('twitter'); ?>">@<?php the_field('twitter'); ?></a>
                                | <a href="<?php the_field('url'); ?>">website</a>
                            </div>
                        </section>
                    </section>
                </li>
            <?php endwhile; ?>
        </ul>
    </section>

</section>


<!-- SCHEDULE -->
<section class="home--schedule" id="schedule">
    <header class="schedule--header">
        <h1 class="home--title schedule--title title_centered" data-30p-center-top="">
            Our Schedule
            <!--<span class="title--small">Purchase These</span>
            <span>Videos</span>-->
        </h1>
    </header>
    <section class="schedule--content">
        <time class="schedule--date">
            Day 1: Friday, February 27:
        </time>
        <ul class="schedule--day-list">
            <li class="schedule--session">
                <time data-center-center="" class="session--start-time">
                    6:00-7:00 pm
                </time>
                <section class="session--content">
                    <h3 class="session--title">
                        Registration and Social Hour
                    </h3>
                </section>
            </li>
            <li class="schedule--session">
                <time data-center-center="" class="session--start-time">
                    7:00-8:00 pm
                </time>
                <section class="session--content">
                    <h3 class="session--title">
                        From Enterprise Software to WordPress
                    </h3>
                    <section class="session--speaker">
                        Jake Goldman and Chris Lema
                    </section>
                    <section class="session--description">

                    </section>
                </section>
            </li>
            <li class="schedule--session">
                <time data-center-center="" class="session--start-time">
                    8:30-10:00 pm
                </time>
                <section class="session--content">
                    <h3 class="session--title">
                        Honest Answers from Business Experts
                    </h3>
                    <section class="session--speaker">
                        Cory Miller, Ben Fox, Andrew Norcross, Jake Goldman (moderator)
                    </section>
                    <section class="session--description">

                    </section>
                </section>
            </li>
        </ul>
        <time class="schedule--date">
            Day 2: Saturday, February 28:
        </time>
        <ul class="schedule--day-list">
            <li class="schedule--session">
                <time data-center-center="" class="session--start-time">
                    8:00-8:30 am
                </time>
                <section class="session--content">
                    <h3 class="session--title">
                        Registration
                    </h3>
                </section>
            </li>
            <li class="schedule--session">
                <time data-center-center="" class="session--start-time">
                    8:30-9:00 am
                </time>
                <section class="session--content">
                    <h3 class="session--title">
                        Welcome and Announcements
                    </h3>
                </section>
            </li>
            <li class="schedule--session">
                <time data-center-center="" class="session--start-time">
                    9:00-9:45 am
                </time>
                <section class="session--content">
                    <h3 class="session--title">
                        Keynote
                    </h3>
                    <section class="session--speaker">
                        John Hawkins, Founder 9seeds and Kim Schaefer, DowntownProject
                    </section>
                    <section class="session--description">

                    </section>
                </section>
            </li>
            <li class="schedule--session">
                <time data-center-center="" class="session--start-time">
                    10:00-10:45 am
                </time>
                <section class="session--content">
                    <h3 class="session--title">
                        The Value of a Great Customer Experience
                    </h3>
                    <section class="session--speaker">
                        Tina Dobie, VP Customer Experience WP Engine
                    </section>
                    <section class="session--description">

                    </section>
                </section>
            </li>
            <li class="schedule--session">
                <time data-center-center="" class="session--start-time">
                    11:00-11:45 am
                </time>
                <section class="session--content">
                    <h3 class="session--title">
                        The Value, Challenges, and Boundaries of Serving the WordPress Economy
                    </h3>
                    <section class="session--speaker">
                        Pippin Williamson, Founder Pippin's Plugins and Jake Goldman, Founder 10up
                    </section>
                    <section class="session--description">

                    </section>
                </section>
            </li>
            <li class="schedule--session">
                <time data-center-center="" class="session--start-time">
                    11:45-1:00 pm
                </time>
                <section class="session--content">
                    <h3 class="session--title">
                        Lunch Break
                    </h3>
                    <section class="session--description">
                        Supplied at the venue.
                    </section>
                </section>
            </li>
            <li class="schedule--session">
                <time data-center-center="" class="session--start-time">
                    1:00-1:45 pm
                </time>
                <section class="session--content">
                    <h3 class="session--title">
                        Making Your First Hire
                    </h3>
                    <section class="session--speaker">
                        Brad Williams, Founder WebDevStudios
                    </section>
                    <section class="session--description">

                    </section>
                </section>
            </li>
            <li class="schedule--session">
                <time data-center-center="" class="session--start-time">
                    2:00-2:45 pm
                </time>
                <section class="session--content">
                    <h3 class="session--title">
                        Accounting for a Small Business
                    </h3>
                    <section class="session--speaker">
                        Brianna Norcross, Owner Balance Virtual
                    </section>
                    <section class="session--description">

                    </section>
                </section>
            </li>
            <li class="schedule--session">
                <time data-center-center="" class="session--start-time">
                    2:45-3:00 pm
                </time>
                <section class="session--content">
                    <h3 class="session--title">
                        Afternoon Snacks
                    </h3>
                </section>
            </li>
            <li class="schedule--session">
                <time data-center-center="" class="session--start-time">
                    3:00-3:45 pm
                </time>
                <section class="session--content">
                    <h3 class="session--title">
                        WordPress in the Enterprise
                    </h3>
                    <section class="session--speaker">
                        John Eckman, CEO 10up
                    </section>
                    <section class="session--description">

                    </section>
                </section>
            </li>
            <li class="schedule--session">
                <time data-center-center="" class="session--start-time">
                    4:00-4:45 pm
                </time>
                <section class="session--content">
                    <h3 class="session--title">
                        Growing a Big Small Company
                    </h3>
                    <section class="session--speaker">
                        Carl Hancock, Owner Rocket Genius
                    </section>
                    <section class="session--description">

                    </section>
                </section>
            </li>
            <li class="schedule--session">
                <time data-center-center="" class="session--start-time">
                    4:45-5:00 pm
                </time>
                <section class="session--content">
                    <h3 class="session--title">
                        Closing Remarks
                    </h3>
                </section>
            </li>
            <li class="schedule--session">
                <time data-center-center="" class="session--start-time">
                    5:00-10:00 pm
                </time>
                <section class="session--content">
                    <h3 class="session--title">
                        After Party
                    </h3>
                    <section class="session--description">

                    </section>
                </section>
            </li>
        </ul>
        <section class="schedule--progress-line">
            <section class="schedule--progress-line_inner"
                     data-center-top="-webkit-transform: translate(0, -100%); transform: translate(0, -100%);"
                     data-center-bottom="-webkit-transform: translate(0, 0); transform: translate(0, 0);"></section>
        </section>
        <section class="schedule--the-end" data-center-top="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/prestige-vegas.svg" alt="Prestige Conference Las Vegas" />
            <section class="the-end--text">
                The End
            </section>
        </section>
    </section>

</section>


<!-- SPONSORS -->
<section class="home--sponsors faux-paper" id="sponsors">
    <div class="home--sponsors_inner">
        <header class="sponsors--header faux-paper--header">
            <h1 class="home--title sponsors--title">
                Our Sponsors
            </h1>
            <section class="header--description">
                These awesome community members make Prestige Conference possible. There are several opportunities to be involved in Prestige Conference as a sponsor. If there’s a benefit you would like, but don’t see available, please get in touch – we’re happy to customize a sponsorship package to match your organization’s marketing goals.<br>
                <a href="/become-a-sponsor">Become a Sponsor</a>
            </section>
        </header>
        <section class="sponsors--content">
            <?php
            $sponsorQueryArgs = array('post_type' => 'Sponsor',
                'posts_per_page' => '100',
                'category_name' => $activeConference);
            $sponsorQuery = new WP_Query( $sponsorQueryArgs );
            $primary = 0;
            $gold = 0;
            $silver = 0;
            $bronze = 0;
            $design = 0;
            $afterparty = 0;
            $lanyard = 0;
            $sticker = 0;
            $localhost = 0;
            $community = 0;
            while($sponsorQuery->have_posts()) : $sponsorQuery->the_post();
                $sponsorshipLevel = get_field('sponsorship_level');

                if($sponsorshipLevel == 'Primary') {
                    $primary++;
                } elseif ($sponsorshipLevel == 'Gold') {
                    $gold++;
                } elseif ($sponsorshipLevel == 'Silver') {
                    $silver++;
                } elseif ($sponsorshipLevel == 'Bronze') {
                    $bronze++;
                } elseif ($sponsorshipLevel == 'Afterparty') {
                    $afterparty++;
                } elseif ($sponsorshipLevel == 'Design') {
                    $design++;
                } elseif ($sponsorshipLevel == 'Lanyard') {
                    $lanyard++;
                } elseif ($sponsorshipLevel == 'Sticker') {
                    $sticker++;
                } elseif ($sponsorshipLevel == 'Localhost') {
                    $localhost++;
                } elseif ($sponsorshipLevel == 'Community') {
                    $community++;
                }
            endwhile;
            if($primary > 0) : ?>
                <section class="sponsors--list_wrapper primary_wrapper">
                    <h3>Primary Sponsors</h3>
                    <ul class="sponsors--list primary">
                        <?php while($sponsorQuery->have_posts()) : $sponsorQuery->the_post(); ?>
                            <?php $sponsorshipLevel = get_field('sponsorship_level');
                            if($sponsorshipLevel == 'Primary') : ?>
                                <li class="sponsor">
                                    <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                                        <?php the_post_thumbnail(); ?>
                                    </a>
                                </li>
                            <?php endif; endwhile; ?>
                    </ul>
                </section>
            <?php endif;
            if($gold > 0) : ?>
                <section class="sponsors--list_wrapper gold_wrapper">
                    <h3>Gold Sponsors</h3>
                    <ul class="sponsors--list gold">
                        <?php  while($sponsorQuery->have_posts()) : $sponsorQuery->the_post(); ?>
                            <?php $sponsorshipLevel = get_field('sponsorship_level');
                            if($sponsorshipLevel == 'Gold') : ?>
                                <li class="sponsor">
                                    <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                                        <?php the_post_thumbnail(); ?>
                                    </a>
                                </li>
                            <?php endif; endwhile; ?>
                    </ul>
                </section>
            <?php endif;
            if($silver > 0) : ?>
                <section class="sponsors--list_wrapper silver_wrapper">
                    <h3>Silver Sponsors</h3>
                    <ul class="sponsors--list silver">
                        <?php  while($sponsorQuery->have_posts()) : $sponsorQuery->the_post(); ?>
                            <?php $sponsorshipLevel = get_field('sponsorship_level');
                            if($sponsorshipLevel == 'Silver') : ?>
                                <li class="sponsor">
                                    <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                                        <?php the_post_thumbnail(); ?>
                                    </a>
                                </li>
                            <?php endif; endwhile; ?>
                    </ul>
                </section>
            <?php endif;
            if($bronze > 0) : ?>
                <section class="sponsors--list_wrapper bronze_wrapper">
                    <h3>Bronze Sponsors</h3>
                    <ul class="sponsors--list bronze">
                        <?php  while($sponsorQuery->have_posts()) : $sponsorQuery->the_post(); ?>
                            <?php $sponsorshipLevel = get_field('sponsorship_level');
                            if($sponsorshipLevel == 'Bronze') : ?>
                                <li class="sponsor">
                                    <?php the_post_thumbnail(); ?>
                                </li>
                            <?php endif; endwhile; ?>
                    </ul>
                </section>
            <?php endif; ?>

            <section class="sponsors--list_wrapper other-sponsors_wrapper">
                <ul class="sponsors--list sponsors--list_square">

                <?php if($afterparty > 0) : ?>
                    <?php  while($sponsorQuery->have_posts()) : $sponsorQuery->the_post(); ?>
                        <?php $sponsorshipLevel = get_field('sponsorship_level');
                        if($sponsorshipLevel == 'Afterparty') : ?>
                            <li class="sponsor">
                                <h6>Afterparty Sponsor</h6>
                                <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                                    <img src="<?php the_field('square_image_for_homepage') ?>" alt="<?php the_title(); ?>" />
                                </a>
                            </li>
                        <?php endif; endwhile; ?>
                <?php endif;
                if($design > 0) : ?>
                    <?php  while($sponsorQuery->have_posts()) : $sponsorQuery->the_post(); ?>
                        <?php $sponsorshipLevel = get_field('sponsorship_level');
                        if($sponsorshipLevel == 'Design') : ?>
                            <li class="sponsor">
                                <h6>Design Sponsor</h6>
                                <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                                    <img src="<?php the_field('square_image_for_homepage') ?>" alt="<?php the_title(); ?>" />
                                </a>
                            </li>
                        <?php endif; endwhile; ?>
                <?php endif;
                if($lanyard > 0) : ?>
                    <?php  while($sponsorQuery->have_posts()) : $sponsorQuery->the_post(); ?>
                        <?php $sponsorshipLevel = get_field('sponsorship_level');
                        if($sponsorshipLevel == 'Lanyard') : ?>
                            <li class="sponsor">
                                <h6>Lanyard Sponsor</h6>
                                <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                                    <img src="<?php the_field('square_image_for_homepage') ?>" alt="<?php the_title(); ?>" />
                                </a>
                            </li>
                        <?php endif; endwhile; ?>
                <?php endif;
                if($sticker > 0) : ?>
                    <?php  while($sponsorQuery->have_posts()) : $sponsorQuery->the_post(); ?>
                        <?php $sponsorshipLevel = get_field('sponsorship_level');
                        if($sponsorshipLevel == 'Sticker') : ?>
                            <li class="sponsor">
                                <h6>Sticker Sponsor</h6>
                                <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                                    <img src="<?php the_field('square_image_for_homepage') ?>" alt="<?php the_title(); ?>" />
                                </a>
                            </li>
                        <?php endif; endwhile; ?>
                <?php endif;
                if($localhost > 0) : ?>
                    <?php  while($sponsorQuery->have_posts()) : $sponsorQuery->the_post(); ?>
                        <?php $sponsorshipLevel = get_field('sponsorship_level');
                        if($sponsorshipLevel == 'Localhost') : ?>
                            <li class="sponsor">
                                <h6>Localhost Sponsor</h6>
                                <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                                    <img src="<?php the_field('square_image_for_homepage') ?>" alt="<?php the_title(); ?>" />
                                </a>
                            </li>
                        <?php endif; endwhile; ?>
                <?php endif;
                if($community > 0) : ?>
                    <li class="community-sponsor-list">
                    <h6>Community Sponsors:</h6>
                <?php  while($sponsorQuery->have_posts()) : $sponsorQuery->the_post(); ?>
                    <?php $sponsorshipLevel = get_field('sponsorship_level');
                    if($sponsorshipLevel == 'Community') : ?>
                        <span class="community-sponsor"><?php the_title(); ?></span>
                    <?php endif; endwhile; ?>
                    </li>
                <?php endif; ?>
                    <!--<li class="sponsor empty"></li>
                    <li class="sponsor empty"></li>-->
                </ul>
            </section>
        </section>
    </div>
</section>


<!-- MAP -->
<section class="home--map">
    <section class="faux-paper">
        <header class="faux-paper--header">
            Location
        </header>
        Prestige Conference Las Vegas will be held at <strong>The Innevation Center</strong>.<br>
        <a target="_blank" href="https://www.google.com/maps/place/The+Innevation+Center,+Powered+by+SUPERNAP/@36.066639,-115.213307,17z/data=!3m1!4b1!4m2!3m1!1s0x80c8c63d8de58c57:0x4f1c35e8f68b2e74">Get Directions</a>
    </section>
</section>


<!-- TICKETS -->
<section class="home--tickets" id="tickets">
    <div class="tickets_inner">
        <header class="tickets--header">
            <h1 class="home--title tickets--title title_centered">
                Event Tickets
            </h1>
            <section class="header--description">
                Two days of learning from the very best speakers the WordPress business community has to offer.
                <span>Tickets are transferrable but NOT refundable.</span>
            </section>
            <section class="tickets--button_wrapper">
                <a class="button" href="/tickets/">Register Now</a> <a class="button alt" href="/purchase-past-videos/">Purchase Past Events</a>
            </section>
        </header>
        <section class="tickets--list_wrapper">
            <ul class="tickets--list">
                <li class="ticket">
                    <h2 class="ticket--title">
                        <span class="ticket--date">Feb 27th-28th</span>
                        Saturday Conference + Friday Night Panel
                    </h2>
                    <section class="ticket--description">
                        Includes lunch, swag, Saturday ticket, Saturday after party, and the Friday night business panel. Ticket includes access to stream all videos for 6 months on the Prestige Conference website.
                    </section>
                    <section class="ticket--price">
                        $149
                    </section>
                </li>
                <li class="ticket">
                    <h2 class="ticket--title">
                        <span class="ticket--date">Feb 27th-28th</span>
                        Prestige Streaming Ticket
                    </h2>
                    <section class="ticket--description">
                        Streaming ticket to the event as well as access to stream all videos for 6 months on the Prestige Conference website.
                    </section>
                    <section class="ticket--price">
                        $49
                    </section>
                </li>
            </ul>
        </section>
        <section class="tickets--button_wrapper">
            <a class="button" href="/tickets/">Register Now</a> <a class="button alt" href="/purchase-past-videos/">Purchase Past Events</a>
        </section>
    </div>
</section>


<!-- TICKETS -->
<section class="home--videos" id="tickets">
    <header class="videos--header">
        <h1 class="home--title videos--title">
            Prestige Conference Videos
        </h1>
        Along with building a conference we are building a resource. These resources include all every Prestige Conference video from our past conferences.
    </header>
    <section class="videos--thumbnail">
        <div class="youtube">
            <iframe src="//player.vimeo.com/video/111037358?title=0&byline=0&portrait=0&color=1a3b64" width="900" height="506" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>
    </section>
    <section class="videos--button_wrapper">
        <a class="button" href="/purchase-past-videos/">Purchase Streaming Access</a>
    </section>
</section>

