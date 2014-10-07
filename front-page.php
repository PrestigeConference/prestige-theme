<nav class="home--sections-nav">
    <section class="sections-nav_inner">
        <a href="#speakers" class="section-link speakers-link">
            <span>Speakers</span>
        </a>
        <a href="#schedule" class="section-link schedule-link">
            <span>Schedule</span>
        </a>
        <a href="#tickets" class="section-link tickets-link">
            <span>Tickets</span>
        </a>
    </section>
</nav>
<!-- SPEAKERS -->
<section class="home--speakers" id="speakers">
    <header class="home--speakers--header">
        <h1 class="home--title home--speakers--title" data-30p-center-top="">
            <span class="title--small">The Best</span>
            Speakers Around
        </h1>
        <section class="header--description">
            Instead of many tracks filled with volunteer speakers, we've scoured the WordPress community for some fo the very best speakers and are paying for their travel to come and speak in Minneapolis. What does that mean for you? You'll have a day full of great sessions on managing a business and your career.
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
                'posts_per_page' => '100');
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
            <span class="title--small">The</span>
            <span>Schedule</span>
        </h1>
    </header>
    <section class="schedule--content">
        <time class="schedule--date">
            Day 1: Friday, October 3:
        </time>
        <ul class="schedule--day-list">
            <li class="schedule--session">
                <time data-center-center="" class="session--start-time">
                    6:00-10:00 pm
                </time>
                <section class="session--content">
                    <h3 class="session--title">
                        Honest Answers from WordPress Business Experts
                    </h3>
                    <section class="session--speaker">
                        Carl Hancock, Reid Peifer, Travis Totz, Matt Medeiros (moderator)
                    </section>
                    <section class="session--description">
                        <p>We’ll be coming together for food, drinks, and alcohol-fueled honest answers from some successful WordPress business owners.</p>
                        <p>This will be the only session of the entire weekend that is neither live-streamed nor recorded for later rebroadcast. Admission is limited to the first 50 tickets sold due to space limitations. This event replaces the typical speakers’ dinner.</p>
                        <p>Location: <a href="https://www.google.com/maps/place/Westwerk/@44.9916507,-93.2289806,17z/data=!3m1!4b1!4m2!3m1!1s0x52b32d07598d4bb9:0x76f2d9926484dd59">WerkPress/Press75</a></p>
                    </section>
                </section>
            </li>
        </ul>
        <time class="schedule--date">
            Day 2: Saturday, October 4:
        </time>
        <ul class="schedule--day-list">
            <li class="schedule--session">
                <time data-center-center="" class="session--start-time">
                    9:00-9:45 am
                </time>
                <section class="session--content">
                    <h3 class="session--title">
                        Registration
                    </h3>
                </section>
            </li>
            <li class="schedule--session">
                <time data-center-center="" class="session--start-time">
                    9:45-10:00 am
                </time>
                <section class="session--content">
                    <h3 class="session--title">
                        Welcome and Announcements
                    </h3>
                </section>
            </li>
            <li class="schedule--session">
                <time data-center-center="" class="session--start-time">
                    10:00-10:45 am
                </time>
                <section class="session--content">
                    <h3 class="session--title">
                        Traits of Success: From Car Sales to Software Sales
                    </h3>
                    <section class="session--speaker">
                        Matt Medeiros, Host of The Matt Report, Co-founder Slocum Studios
                    </section>
                    <section class="session--description">
                        <p>"They told me to build it and they would come. Now I'm standing here with this pile of code and I'm thinking of getting a day job." We'll uncover the traits Matt fine-tuned over the years in his family owned auto dealership and how he implements them in his current WordPress agency startup.</p>
                    </section>
                </section>
            </li>
            <li class="schedule--session">
                <time data-center-center="" class="session--start-time">
                    11:00-11:45 am
                </time>
                <section class="session--content">
                    <h3 class="session--title">
                        You Should Charge More
                    </h3>
                    <section class="session--speaker">
                        Lisa Sabin-Wilson, Owner WebDevStudios and AppPresser, Author
                    </section>
                    <section class="session--description">
                        <p>As freelancers and entrepreneurs, we are in charge of assigning value to the work that we do. In 2004, as a freelancer, Lisa sold her first WordPress project for $75. Ten years later, as a partner in a thriving web design and development agency, she is frequently involved in projects 1000 times that much, often more.</p>
                        <p>There are different considerations in pricing as a freelancer, and pricing as an agency. Lisa explores these considerations and shares her insight into common mistakes she made in her career as a freelancer, as well as pricing lessons, strategies and advice she is using today.</p>
                        <p>This session will explore different pricing models, help you identify signs that your rates might be too low and some similarities and differences between freelancing vs. agency pricing strategies. You'll find out how she gradually increased her pricing as a freelancer because one of her (paying) clients encouraged her to do so, and you should be prepared for Lisa to encourage you to do the same!</p>
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
                        What the Hell Are We Doing?
                    </h3>
                    <section class="session--speaker">
                        Reid Peifer, Co-owner Modern Tribe
                    </section>
                    <section class="session--description">
                        <p>An honest no bullshit look at the advantages and challenges of running a product based business in the WordPress ecosystem. I’ll share comparisons to our agency business (Modern Tribe) both in workflow and in cost/profit analysis, and talk through why we love/hate both client services and products. I’ll tell you a harrowing story of how we almost sank the ship, and how that informs our ongoing product development strategies. I’ll squeeze in some of the marketing things that we’ve done that work, and I’d bee an idiot to not mention the role that support plays in our success.</p>
                        <p>This will be the story of how we took this funny little thing we had to build for a client, and turned it into a $1million dollar a year ‘side business' complete with as many of the stupid mistakes as I can remember.</p>
                    </section>
                </section>
            </li>
            <li class="schedule--session">
                <time data-center-center="" class="session--start-time">
                    2:00-2:45 pm
                </time>
                <section class="session--content">
                    <h3 class="session--title">
                        Satisfy the Want, Deliver the Need: A Design First Approach to Building a Sustainable Business Using WordPress
                    </h3>
                    <section class="session--speaker">
                        Jennifer Bourn, Founder Bourn Creative
                    </section>
                    <section class="session--description">
                        <p>Design infuses every part of our world. It stirs emotions, creates experiences, shapes memories, and persuades actions. Design showcases exceptional code, supports compelling content, and drives consumers to make the decision to buy -- to invest in hiring you, buying from you, or learning from you.</p>
                        <p>In its 10th year, Bourn Creative satisfies what clients want most with a design first approach, and delivers what they need with clean, flexible code and a conversion-based strategy centered around WordPress -- and we take A LOT of vacation. But getting there wasn't easy, wasn't a straight path, and was sometimes really ugly.</p>
                        <p>In this talk, you'll get candid and honest insights on the hurdles, the successes, the mindset shifts we had to make, and the lessons learned along the way.</p>
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
                        WordPress Moneyball: How a Little Web Shop Can Continually Out-muscle the Big Dogs by Exploiting <strong>Over</strong>valued Things
                    </h3>
                    <section class="session--speaker">
                        Toby Cryns, Founder The Mighty Mo! Design Co
                    </section>
                    <section class="session--description">
                        <p>You are small, scared, suck at writing code, don’t know what you are doing most of the time, and you work out of your basement office.  They are shiny, confident, and possess some of the best talent this side of the Atlantic Ocean.  But that doesn’t mean you can’t compete with and beat them.  I have seen it done countless times, and you can do it too!</p>
                        <p>In this session, Toby Cryns will share some of the unorthodox business strategies he and his friends use to outmuscle the bigger, better, and badder competition in a hyper-competitive marketplace.</p>
                    </section>
                </section>
            </li>
            <li class="schedule--session">
                <time data-center-center="" class="session--start-time">
                    4:00-4:45 pm
                </time>
                <section class="session--content">
                    <h3 class="session--title">
                        Upping 10up: Rewards and Scars from Bootstrapping 1 to 70 in 3.5 years
                    </h3>
                    <section class="session--speaker">
                        Jake Goldman, Founder 10up
                    </section>
                    <section class="session--description">
                        <p>Jake once told the community that he’d be happy to talk about the business of WordPress, but that a WordCamp wasn’t the right place for that talk: and we’re holding his feet to the fire. Mario Andretti once said, “If everything seems under control, you’re not going fast enough.” Nothing better captures 10up’s rise, and Jake’s journey.</p>
                        <p>In a wide ranging interview, Josh Broton will press Jake on the process of building 10up from 1 man in an office to a 70+ person brand in the WordPress space in less than 3.5 years. From watershed moments, to painful scars and mistakes, from risks that paid off, to decisions he regrets, we’ll open up new insights into the philosophies and business that happens behind the scenes at 10up.</p>
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
                        <p>Attendees will be joining the organizers, speakers, and sponsors at WerkPress for appetizers, drinks, conversation, and plenty of foosball.</p>
                        <p>Location: <a href="https://www.google.com/maps/place/Westwerk/@44.9916507,-93.2289806,17z/data=!3m1!4b1!4m2!3m1!1s0x52b32d07598d4bb9:0x76f2d9926484dd59">WerkPress/Press75</a></p>
                    </section>
                </section>
            </li>
        </ul>
        <section class="schedule--progress-line">
            <section class="schedule--progress-line_inner"
                     data-center-top="-webkit-transform: translate(0, -100%);"
                     data-center-bottom="-webkit-transform: translate(0, 0);"></section>
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



<!-- PRESS -->
<section class="home--press">
    <header class="press--header">
        <span class="title--small">Kind</span>
        Words
    </header>
    <section class="press--content">
        <section class="press--quote">
            <section class="quote--image">

            </section>
            <section class="quote--text">
                "All of these people that are talking... hearing just one of them speak is worth the ticket cost." - Pippen Williamson on Apply Filters
            </section>
        </section>
        <section class="press--quote">
            <section class="quote--image">

            </section>
            <section class="quote--text">
                "
            </section>
        </section>
        <section class="press--quote">
            <section class="quote--image">

            </section>
            <section class="quote--text">

            </section>
    </section>
</section>


<!-- SPONSORS -->
<section class="home--sponsors" id="sponsors">
    <div class="home--sponsors_inner">
        <header class="sponsors--header">
            <h1 class="home--title sponsors--title" data-30p-center-top="">
                <span class="title--small">Our</span>
                Sponsors
            </h1>
            <section class="header--description">
                These awesome community members make Prestige Conference possible. <a href="/become-a-sponsor">Become a Sponsor</a>
            </section>
        </header>
        <section class="sponsors--content">
            <h3>Primary Sponsors</h3>
            <ul class="sponsors--list">
                <?php
                $sponsorQueryArgs = array('post_type' => 'Sponsor',
                    'posts_per_page' => '100');
                $sponsorQuery = new WP_Query( $sponsorQueryArgs );

                while($sponsorQuery->have_posts()) : $sponsorQuery->the_post(); ?>
                <?php $sponsorshipLevel = get_field('sponsorship_level');
                    if($sponsorshipLevel == 'Primary') : ?>
                <li class="sponsor">
                    <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                        <img src="<?php the_field('square_image_for_homepage') ?>" alt="<?php the_title(); ?>" />
                    </a>
                </li>
                <?php endif; endwhile; ?>
                <li class="sponsor empty"></li>
                <li class="sponsor empty"></li>
            </ul>
            <h3>Gold Sponsors</h3>
            <ul class="sponsors--list">
                <?php  while($sponsorQuery->have_posts()) : $sponsorQuery->the_post(); ?>
                    <?php $sponsorshipLevel = get_field('sponsorship_level');
                    if($sponsorshipLevel == 'Gold') : ?>
                        <li class="sponsor">
                            <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                                <img src="<?php the_field('square_image_for_homepage') ?>" alt="<?php the_title(); ?>" />
                            </a>
                        </li>
                    <?php endif; endwhile; ?>
                <li class="sponsor become-a-sponsor-link">
                    <a href="/become-a-sponsor">
                        <span>Become a<br>Sponsor</span>
                    </a>
                </li>
                <li class="sponsor empty"></li>
            </ul>
            <h3>Silver Sponsors</h3>
            <ul class="sponsors--list">
                <?php  while($sponsorQuery->have_posts()) : $sponsorQuery->the_post(); ?>
                    <?php $sponsorshipLevel = get_field('sponsorship_level');
                    if($sponsorshipLevel == 'Silver') : ?>
                        <li class="sponsor">
                            <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                                <img src="<?php the_field('square_image_for_homepage') ?>" alt="<?php the_title(); ?>" />
                            </a>
                        </li>
                    <?php endif; endwhile; ?>
                <li class="sponsor empty"></li>
                <li class="sponsor empty"></li>
            </ul>
            <h3>Bronze Sponsors</h3>
            <ul class="sponsors--list">
                <?php  while($sponsorQuery->have_posts()) : $sponsorQuery->the_post(); ?>
                    <?php $sponsorshipLevel = get_field('sponsorship_level');
                    if($sponsorshipLevel == 'Bronze') : ?>
                        <li class="sponsor">
                            <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                                <img src="<?php the_field('square_image_for_homepage') ?>" alt="<?php the_title(); ?>" />
                            </a>
                        </li>
                    <?php endif; endwhile; ?>
                <li class="sponsor empty"></li>
                <li class="sponsor empty"></li>
            </ul>
            <h3>Afterparty Sponsors</h3>
            <ul class="sponsors--list">
                <?php  while($sponsorQuery->have_posts()) : $sponsorQuery->the_post(); ?>
                    <?php $sponsorshipLevel = get_field('sponsorship_level');
                    if($sponsorshipLevel == 'Afterparty') : ?>
                        <li class="sponsor">
                            <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                                <img src="<?php the_field('square_image_for_homepage') ?>" alt="<?php the_title(); ?>" />
                            </a>
                        </li>
                    <?php endif; endwhile; ?>
                <li class="sponsor empty"></li>
                <li class="sponsor empty"></li>
            </ul>
            <h3>Lanyard Sponsor</h3>
            <ul class="sponsors--list">
                <?php  while($sponsorQuery->have_posts()) : $sponsorQuery->the_post(); ?>
                    <?php $sponsorshipLevel = get_field('sponsorship_level');
                    if($sponsorshipLevel == 'Lanyard') : ?>
                        <li class="sponsor">
                            <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                                <img src="<?php the_field('square_image_for_homepage') ?>" alt="<?php the_title(); ?>" />
                            </a>
                        </li>
                    <?php endif; endwhile; ?>
                <li class="sponsor empty"></li>
                <li class="sponsor empty"></li>
            </ul>
        </section>
    </div>
</section>


<!-- TICKETS -->
<section class="home--tickets" id="tickets">
    <header class="tickets--header">
        <h1 class="home--title tickets--title title_centered" data-30p-center-top="">
            <span>Tickets</span>
        </h1>
        <section class="header--description">
            $49 - $119 for a day learning from the very best speakers the WordPress business community has to offer.
            <span>Tickets are transferrable but NOT refundable.</span>
        </section>
        <section class="tickets--button_wrapper">
            <a class="button" href="/tickets/">Register Now</a><br>
            <a href="/scholarships/">Apply for a scholarship</a>
        </section>
    </header>
    <section class="tickets--list_wrapper">
        <ul class="tickets--list">
            <li class="ticket sold-out">
                <h2 class="ticket--title">
                    <span class="ticket--date">October 3rd</span>
                    Friday Only Ticket
                </h2>
                <section class="ticket--description">
                    Friday night pre-conference business panel. Drinks and food included in ticket price. FRIDAY ONLY! Only buy this ticket if you're not going to any other Prestige events.
                </section>
                <section class="ticket--price">
                    $49
                </section>
            </li>
            <li class="ticket">
                <h2 class="ticket--title">
                    <span class="ticket--date">October 4th</span>
                    Saturday Conference
                </h2>
                <section class="ticket--description">
                    Includes lunch, swag, Saturday ticket, and Saturday after party. Ticket includes access to stream all Saturday videos for 6 months on the Prestige Conference website.
                </section>
                <section class="ticket--price">
                    $99
                </section>
            </li>
            <li class="ticket">
                <h2 class="ticket--title sold-out">
                    <span class="ticket--date">October 3rd - 4th</span>
                    Saturday Conference + Friday Night Panel
                </h2>
                <section class="ticket--description">
                    Includes lunch, swag, Saturday ticket, Saturday after party, and the Friday night pre-conference business panel. Ticket includes access to stream all Saturday videos for 6 months on the Prestige Conference website.
                </section>
                <section class="ticket--price">
                    $119
                </section>
            </li>
            <li class="ticket">
                <h2 class="ticket--title">
                    <span class="ticket--date">October 4th</span>
                    Prestige Streaming Ticket
                </h2>
                <section class="ticket--description">
                    Streaming ticket to the Saturday event as well as access to stream all Saturday videos for 6 months on the Prestige Conference website.
                </section>
                <section class="ticket--price">
                    $49
                </section>
            </li>
        </ul>
    </section>
    <section class="tickets--button_wrapper">
        <a class="button" href="/tickets/">Register Now</a><br>
        <a href="/scholarships/">Apply for a scholarship</a>
    </section>
</section>


<!-- MAP -->
<section class="home--map">
    <a target="_blank" href="https://www.google.com/maps/preview?ie=UTF-8&fb=1&gl=us&cid=11125183430936972151&q=University+of+St.+Thomas+-+Minneapolis+Campus&ei=q6j2U8bDIs-cygTytIDgBQ&ved=0CIsBEPwSMAs">View St. Thomas on Google Maps</a>
</section>


<!-- MAILING LIST -->
<section class="home--mailing-list">
    <header class="mailing-list--header">
        <h1 class="home--title mailing-list--title title_centered" data-30p-center-top="">
            <span class="title--small">Join Our</span>
            <span>Email List</span>
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