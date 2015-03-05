<?php $activeConference = 'aug15'; ?>

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
                Hosted by <a href="http://westwerk.com">Westwerk</a> and <a href="http://ingroupconsulting.com/">InGroup Consulting</a> in Minneapolis, Minnesota and streamed live wherever you are.
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
            Instead of many tracks filled with volunteer speakers, we've scoured the digital marketplace for some of the very best speakers and are paying for their travel to come and speak in Minneapolis. What does that mean for you? You'll have a day full of great sessions on managing a business and your career.
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
            Confirmed Sessions:
            <!--Day 1: Friday, February 27:-->
        </time>
        <ul class="schedule--day-list">
            <?php
            $sessionQueryArgs = array('post_type' => 'Session',
                'posts_per_page' => '100',
                'category_name' => $activeConference);
            $sessionQuery = new WP_Query( $sessionQueryArgs );

            while($sessionQuery->have_posts()) : $sessionQuery->the_post(); ?>
            <li class="schedule--session">
                <time data-center-center="" class="session--start-time">
                    <?php the_field('time'); ?>
                </time>
                <section class="session--content">
                    <h3 class="session--title">
                        <?php the_title(); ?>
                    </h3>
                    <section class="session--speaker">
                        <?php $speaker = get_field('session_speaker'); echo get_the_title( $speaker->ID ) . ', ' . get_field('job_title', $speaker->ID); ?>
                    </section>
                    <section class="session--description">
                        <?php the_content(); ?>
                    </section>
                </section>
            </li>
            <?php endwhile; ?>
        </ul>
        <!--<time class="schedule--date">
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
                        More Than Just a Website
                    </h3>
                    <section class="session--speaker">
                        John Hawkins, Founder 9seeds and Kim Schaefer, DowntownProject
                    </section>
                    <section class="session--description">
                        Sometimes building websites isn’t just about the sites. Sometimes, it’s also about the community that those sites serve and how they help them to grow. John Hawkins of 9seeds and his client, Kim Schaefer, share the ups and downs of working together on a series of sites that exist at the center of a neighborhood and tech revitalization in Downtown Las Vegas.
                    </section>
                </section>
            </li>
            <li class="schedule--session">
                <time data-center-center="" class="session--start-time">
                    10:00-10:45 am
                </time>
                <section class="session--content">
                    <h3 class="session--title">
                        Cash is King:  Options for Funding Your Business
                    </h3>
                    <section class="session--speaker">
                        April Downing, CFO WP Engine
                    </section>
                    <section class="session--description">
                        Every business owner worries about cash flow.  Whether it’s cash flow to grow or to just keep the doors open.  From bootstrapping, to venture capital, to debt (and everything in between), there are so many options available today to fund businesses of all sizes and stages.  We will take a look at the different avenues for funding your business and how they relate to the goals you are trying to achieve.  I will share some of the good, bad and the ugly I have experienced from raising over $200 million for companies of all stages.  Cash is critical but how you get it and from whom makes all the difference in the world!
                    </section>
                </section>
            </li>
            <li class="schedule--session">
                <time data-center-center="" class="session--start-time">
                    11:00-11:45 am
                </time>
                <section class="session--content">
                    <h3 class="session--title">
                        What Can Easy Digital Downloads Tell Us About the WordPress Marketplace?
                    </h3>
                    <section class="session--speaker">
                        Pippin Williamson, Founder Pippin's Plugins and Jake Goldman, Founder 10up
                    </section>
                    <section class="session--description">
                        Just what does the "WordPress economy” look like, anyways? If there’s one man that might just have the answers, its probably Pippin Williamson. Easy Digital Downloads, his brainchild, is by any definition, a WordPress product made for WordPress makers: it’s successful… and profitable! But what exactly is successful in this marketplace? What does the top of the market look like? Is catering to the Presserati a scalable business plan?<br>
                        <br>
                        10up’s Jake Goldman sits down with EDD founder Pippin Williamson to understand his business, and the business of WordPress.
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
                        Hiring Employee Number One: From Freelancer to Agency
                    </h3>
                    <section class="session--speaker">
                        Brad Williams, Founder WebDevStudios
                    </section>
                    <section class="session--description">
                        From a part-time hobby to a full-blown agency, Brad has built WebDevStudios into one of the largest agencies in the world focusing 100% on WordPress development and design.  In this presentation Brad will talk through the history of the company, discuss challenges faced along the way, and share tips on how he grew a hobby to a distributed company with 32 full-time employees.
                    </section>
                </section>
            </li>
            <li class="schedule--session">
                <time data-center-center="" class="session--start-time">
                    2:00-2:45 pm
                </time>
                <section class="session--content">
                    <h3 class="session--title">
                        Stop Sucking At Accounting
                    </h3>
                    <section class="session--speaker">
                        Brianna Norcross, Owner Balance Virtual
                    </section>
                    <section class="session--description">
                        No matter how great your coding chops, your business needs a solid financial foundation to be able to thrive. This talk will outline the most common ways small business owners erode that foundation and how to build it right instead.
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
                        Tales from the CMS Wars: WordPress and the Enterprise
                    </h3>
                    <section class="session--speaker">
                        John Eckman, CEO 10up
                    </section>
                    <section class="session--description">
                        WordPress isn't your typical enterprise CMS - and that's a good thing. The typical enterprise CMS is expensive, complicated, and difficult to use - but the best have a strong market presence and also support robust ecosystems of implementation partners. WordPress, on the other hand, still faces challenges being taken seriously as "more than a blogging platform."<br>
                        <br>
                        What can the community of WordPress agencies interested in larger projects with more impact learn from other platforms aimed at the enterprise market? Adobe Experience Manager, Sitecore, and even Drupal offer object lessons in how to speak to enterprise buyers.<br>
                        <br>
                        We'll also look at other ways the enterprise market differs from the small-to-medium business market and how WordPress agencies can more effectively break into that conversation.<br>
                        <br>
                        Selling WordPress into the enterprise can be challenging - there are lots of assumptions and myths to be overcome - but it ultimately offers a compelling value proposition no other platform can touch.
                    </section>
                </section>
            </li>
            <li class="schedule--session">
                <time data-center-center="" class="session--start-time">
                    4:00-4:45 pm
                </time>
                <section class="session--content">
                    <h3 class="session--title">
                        Mining Lessons from the Commercial Plugin Gold Rush
                    </h3>
                    <section class="session--speaker">
                        Carl Hancock, Owner Rocket Genius
                    </section>
                    <section class="session--description">
                        Since 2007, Rocketgenius has been specializing in extending WordPress, especially through their flagship product: Gravity Forms. Carl Hancock, founder of Rocketgenius, joins us for an interview to dig into the business background of their commercial plugin success.<br>
                        <br>
                        If you heard Carl on our expert business panel in Minneapolis last year, you know he’s full of great information that can help other entrepreneurs grow their business. In Vegas, we’re dedicating an entire session to interviewing him about the organization design, revenue perspective, and profitably of Rocketgenius to answer the question - are WordPress products really the gold rush some people make them out to be?
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
        </ul>-->
        <section class="schedule--progress-line">
            <section class="schedule--progress-line_inner"
                     data-center-top="-webkit-transform: translate(0, -100%); transform: translate(0, -100%);"
                     data-center-bottom="-webkit-transform: translate(0, 0); transform: translate(0, 0);"></section>
        </section>
        <section class="schedule--the-end" data-center-top="">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 viewBox="0 0 140.312 58.188" enable-background="new 0 0 140.312 115.188" xml:space="preserve">


                                <path class="schedule--building" d="M11.4,53.047
                    c3.426,1.566,14.093,3.286,14.093,3.286l-0.236-15.329l-6.639-1.599l-2.776,2.132v7.51L11.4,45.53l-3.337,3.517v5.238"/>
                <path class="schedule--building" d="
                    M55.168,37.508V15.422l-1.23-0.673l-0.002-3.216l1.653-0.981v-0.404c-1.39-0.26-3.351-0.528-5.516-0.528
                    c-2.166,0-4.125,0.268-5.517,0.528v0.404l1.655,0.981v3.216L44.894,15.2v18.471"/>
                <path class="schedule--building" d="
                    M54.341,14.924c-1.076-0.202-2.593-0.409-4.268-0.409c-1.676,0-3.192,0.207-4.269,0.409"/>
                <path class="schedule--building" d="
                    M49.637,56.968c0.037-0.605-0.016-7.865-0.016-7.865l-13.057-2V36.886l-1.704-3.508l-1.103-8.521l-0.999,8.521l-1.81,3.508v10.036
                    l-3.205-0.282v8.931"/>
                <path class="schedule--building" d="M18.284,52.284
                    c0-2.239,0-0.87,0-15.597l5.187,1.484v2.402"/>
                <path class="schedule--building" d="M31.166,53.747
                    c0,0,3.531,0.67,8.824,0.799V37.155l4.865-1.243l5.055,1.243v2.732l5.238,0.947v13.586l-3.132,0.178v-7.863l-7.161-1.214v-6.474"/>
                <path class="schedule--building" d="M48.044,19.322
                    c0,0,4.747-0.939,10.077,0.956c0,1.184,0,31.029,0,31.029l9.481-1.955l4.494,2.625v2.528c0,0-10.179,1.421-10.711,1.421
                    c0-1.303,0-26.529,0-26.529l2.013-1.599v-1.627l4.382-2.309l6.211,3.758v2.783l1.836,1.362v21.186"/>
                <path class="schedule--building" d="
                    M67.603,21.422V8.672l3.398-2.754l4.826-1.155l7.609,2.491v36.147l4.536-1.355l5.813,2.625c0,0,0,5.353,0,5.906
                    c-1.673,0.553-13.48,2.666-13.48,2.666V2.672l-4.451-1.484l-4.941,1.155v20.452"/>
                <path class="schedule--building" d="M67.603,27.236V46.64
                    "/>
                <path class="schedule--building" d="M93.784,22.588V41.73
                    l-3.509-1.437V27.947"/>
                <path class="schedule--building" d="M103.333,53.333
                    v-15.79l6.077-3.204v16.528l-2.879,0.533V39.585l7.462-4.081l4.529,2.417v14.078l-4.885,0.356V39.297"/>
                <path class="schedule--building" d="M96.694,24.588
                    v25.848c0,0,1.891-0.317,3.76-0.73V26.792l-1.126-1.32v-2.219l-1.284-1.582v-2.075l-1.149-0.977v-1.954L93.159,15.6v1.447
                    l-1.206,1.76v1.696l-1.978,1.894v1.51l-2.003,1.972v13.668"/>
                <path class="schedule--building" d="M116.301,38.623"/>
                <path class="schedule--building" d="M113.636,27.15v4.938
                    l-2.309,1.244v-7.781l2.309-1.155l4.885,3.731v6.42l4.264,2.655v12.154h6.129v-4.264l5.685,1.954v7.536"/>
                <path class="schedule--building" d="M113.636,19.955
                    v3.997"/>
                <path class="schedule--building" d="M117.012,26.64v-3.49
                    "/>
                </svg>
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
        Prestige Conference Minneapolis 2015 will be held at <strong>St. Thomas Minneapolis Campus</strong>.<br>
        <a target="_blank" href="https://www.google.com/maps/place/Schulze+Hall,+University+of+St.+Thomas+-+Minneapolis+Campus,+46+S+11th+St,+Minneapolis,+MN+55403/@44.9742921,-93.2776462,17z/data=!3m1!4b1!4m2!3m1!1s0x52b332944c4be609:0xb98e7bf839108fa1">Get Directions</a>
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
                Two days of learning from the very best speakers the digital marketplace has to offer.
                <span>Tickets are transferrable but NOT refundable.</span>
            </section>
            <section class="tickets--button_wrapper">
                <a class="button" href="/tickets/">Register Now</a> <a class="button" href="/purchase-past-videos/">Purchase Past Events</a>
            </section>
        </header>
        <section class="tickets--list_wrapper">
            <ul class="tickets--list">
                <li class="ticket">
                    <h2 class="ticket--title">
                        <span class="ticket--date">Aug 1st-2nd</span>
                        Early-Bird<br>
                        Saturday + Sunday Conference
                    </h2>
                    <section class="ticket--description">
                        Saturday & Sunday Full Conference Pass - Includes full day pass for Saturday & Sunday, lunch both days, swag, & Saturday after party. Ticket includes access to stream all videos for 6 months on the Prestige Conference website.
                    </section>
                    <section class="ticket--price">
                        $149
                    </section>
                </li>
                <li class="ticket">
                    <h2 class="ticket--title">
                        <span class="ticket--date">Aug 1st-2nd</span>
                        Early-Bird<br>
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

