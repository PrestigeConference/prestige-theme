<nav class="home--sections-nav">
    <section class="sections-nav_inner">
        <a class="section-link speakers-link">
            <span>Speakers</span>
        </a>
        <a class="section-link schedule-link">
            <span>Schedule</span>
        </a>
        <a class="section-link tickets-link">
            <span>Tickets</span>
        </a>
    </section>
</nav>
<!-- SPEAKERS -->
<section class="home--speakers">
    <header class="speakers--header">
        <h1 class="home--title speakers--title">
            <span>The Best</span>
            Speakers Around
        </h1>
        <section class="header--description">
            Instead of many tracks filled with volunteer speakers, we've scoured the WordPress community for some fo the very best speakers and are paying for their travel to come and speak in Minneapolis. What does that mean for you? You'll have a day full of great sessions on managing a business and your career.
            <section class="header--biography_wrapper" id="headerBiography"></section>
        </section>
        <nav class="speakers--nav">
            <a id="prevSpeaker" class="arrow-left icon-arrow-left"></a>
            <a id="nextSpeaker" class="arrow-right icon-arrow-right"></a>
        </nav>
    </header>
    <section class="speakers--list_wrapper">
        <ul class="speakers--list">
            <?php
            $speakerQueryArgs = array('post_type' => 'Speaker',
                'posts_per_page' => '100');
            $speakerQuery = new WP_Query( $speakerQueryArgs );

            while($speakerQuery->have_posts()) : $speakerQuery->the_post(); ?>
                <li class="speaker">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <figure class="speaker--picture">
                            <?php the_post_thumbnail(); ?>
                        </figure>
                    <?php endif; ?>
                    <section class="speaker--content">
                        <h3 class="speaker--name">
                            <?php the_title(); ?>
                        </h3>
                        <section class="speaker--biography_wrapper">
                            <section class="speaker--biography">
                                <?php the_field('biography'); ?>
                            </section>
                            <div class="speaker--links">
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
<section class="home--schedule">
    <header class="schedule--header">
        <h1 class="home--title schedule--title">
            <span>The</span>Schedule
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
                    <section class="session--description">
                        We’ll be coming together for food, drinks, and alcohol-fueled honest answers from some successful WordPress business owners.<br>
                        <br>
                        This will be the only session of the entire weekend that is neither live-streamed nor recorded for later rebroadcast. Admission is limited to the first 50 tickets sold due to space limitations. This event replaces the typical speakers’ dinner.
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
                    8:00-8:45 am
                </time>
                <section class="session--content">
                    <h3 class="session--title">
                        Registration
                    </h3>
                </section>
            </li>
            <li class="schedule--session">
                <time data-center-center="" class="session--start-time">
                    8:45-9:00 am
                </time>
                <section class="session--content">
                    <h3 class="session--title">
                        Welcome and Announcements
                    </h3>
                </section>
            </li>
            <li class="schedule--session">
                <time data-center-center="" class="session--start-time">
                    9:00-10:00 am
                </time>
                <section class="session--content">
                    <h3 class="session--title">
                        Satisfy the Want, Deliver the Need
                    </h3>
                    <section class="session--speaker">
                        Jennifer Bourn, Founder Bourn Creative
                    </section>
                    <section class="session--description">
                        Design infuses every part of our world. It stirs emotions, creates experiences, shapes memories, and persuades actions. Design showcases exceptional code, supports compelling content, and drives consumers to make the decision to buy -- to invest in hiring you, buying from you, or learning from you.<br>
                        <br>
                        In its 10th year, Bourn Creative satisfies what clients want most with a design first approach, and delivers what they need with clean, flexible code and a conversion-based strategy centered around WordPress -- and we take A LOT of vacation. But getting there wasn't easy, wasn't a straight path, and was sometimes really ugly.<br>
                        <br>
                        In this talk, you'll get candid and honest insights on the hurdles, the successes, the mindset shifts we had to make, and the lessons learned along the way.
                    </section>
                </section>
            </li>
            <li class="schedule--session">
                <time data-center-center="" class="session--start-time">
                    9:00-10:00 am
                </time>
                <section class="session--content">
                    <h3 class="session--title">
                        Satisfy the Want, Deliver the Need
                    </h3>
                    <section class="session--speaker">
                        Jennifer Bourn, Founder Bourn Creative
                    </section>
                    <section class="session--description">
                        Design infuses every part of our world. It stirs emotions, creates experiences, shapes memories, and persuades actions. Design showcases exceptional code, supports compelling content, and drives consumers to make the decision to buy -- to invest in hiring you, buying from you, or learning from you.<br>
                        <br>
                        In its 10th year, Bourn Creative satisfies what clients want most with a design first approach, and delivers what they need with clean, flexible code and a conversion-based strategy centered around WordPress -- and we take A LOT of vacation. But getting there wasn't easy, wasn't a straight path, and was sometimes really ugly.<br>
                        <br>
                        In this talk, you'll get candid and honest insights on the hurdles, the successes, the mindset shifts we had to make, and the lessons learned along the way.
                    </section>
                </section>
            </li>
            <li class="schedule--session">
                <time data-center-center="" class="session--start-time">
                    9:00-10:00 am
                </time>
                <section class="session--content">
                    <h3 class="session--title">
                        Satisfy the Want, Deliver the Need
                    </h3>
                    <section class="session--speaker">
                        Jennifer Bourn, Founder Bourn Creative
                    </section>
                    <section class="session--description">
                        Design infuses every part of our world. It stirs emotions, creates experiences, shapes memories, and persuades actions. Design showcases exceptional code, supports compelling content, and drives consumers to make the decision to buy -- to invest in hiring you, buying from you, or learning from you.<br>
                        <br>
                        In its 10th year, Bourn Creative satisfies what clients want most with a design first approach, and delivers what they need with clean, flexible code and a conversion-based strategy centered around WordPress -- and we take A LOT of vacation. But getting there wasn't easy, wasn't a straight path, and was sometimes really ugly.<br>
                        <br>
                        In this talk, you'll get candid and honest insights on the hurdles, the successes, the mindset shifts we had to make, and the lessons learned along the way.
                    </section>
                </section>
            </li>
            <li class="schedule--session">
                <time data-center-center="" class="session--start-time">
                    9:00-10:00 am
                </time>
                <section class="session--content">
                    <h3 class="session--title">
                        Satisfy the Want, Deliver the Need
                    </h3>
                    <section class="session--speaker">
                        Jennifer Bourn, Founder Bourn Creative
                    </section>
                    <section class="session--description">
                        Design infuses every part of our world. It stirs emotions, creates experiences, shapes memories, and persuades actions. Design showcases exceptional code, supports compelling content, and drives consumers to make the decision to buy -- to invest in hiring you, buying from you, or learning from you.<br>
                        <br>
                        In its 10th year, Bourn Creative satisfies what clients want most with a design first approach, and delivers what they need with clean, flexible code and a conversion-based strategy centered around WordPress -- and we take A LOT of vacation. But getting there wasn't easy, wasn't a straight path, and was sometimes really ugly.<br>
                        <br>
                        In this talk, you'll get candid and honest insights on the hurdles, the successes, the mindset shifts we had to make, and the lessons learned along the way.
                    </section>
                </section>
            </li>
            <li class="schedule--session">
                <time data-center-center="" class="session--start-time">
                    9:00-10:00 am
                </time>
                <section class="session--content">
                    <h3 class="session--title">
                        Satisfy the Want, Deliver the Need
                    </h3>
                    <section class="session--speaker">
                        Jennifer Bourn, Founder Bourn Creative
                    </section>
                    <section class="session--description">
                        Design infuses every part of our world. It stirs emotions, creates experiences, shapes memories, and persuades actions. Design showcases exceptional code, supports compelling content, and drives consumers to make the decision to buy -- to invest in hiring you, buying from you, or learning from you.<br>
                        <br>
                        In its 10th year, Bourn Creative satisfies what clients want most with a design first approach, and delivers what they need with clean, flexible code and a conversion-based strategy centered around WordPress -- and we take A LOT of vacation. But getting there wasn't easy, wasn't a straight path, and was sometimes really ugly.<br>
                        <br>
                        In this talk, you'll get candid and honest insights on the hurdles, the successes, the mindset shifts we had to make, and the lessons learned along the way.
                    </section>
                </section>
            </li>
            <li class="schedule--session">
                <time data-center-center="" class="session--start-time">
                    9:00-10:00 am
                </time>
                <section class="session--content">
                    <h3 class="session--title">
                        Satisfy the Want, Deliver the Need
                    </h3>
                    <section class="session--speaker">
                        Jennifer Bourn, Founder Bourn Creative
                    </section>
                    <section class="session--description">
                        Design infuses every part of our world. It stirs emotions, creates experiences, shapes memories, and persuades actions. Design showcases exceptional code, supports compelling content, and drives consumers to make the decision to buy -- to invest in hiring you, buying from you, or learning from you.<br>
                        <br>
                        In its 10th year, Bourn Creative satisfies what clients want most with a design first approach, and delivers what they need with clean, flexible code and a conversion-based strategy centered around WordPress -- and we take A LOT of vacation. But getting there wasn't easy, wasn't a straight path, and was sometimes really ugly.<br>
                        <br>
                        In this talk, you'll get candid and honest insights on the hurdles, the successes, the mindset shifts we had to make, and the lessons learned along the way.
                    </section>
                </section>
            </li>
            <li class="schedule--session">
                <time data-center-center="" class="session--start-time">
                    6:00-10:00 pm
                </time>
                <section class="session--content">
                    <h3 class="session--title">
                        After Party
                    </h3>
                    <section class="session--description">
                        Attendees will be joining the organizers, speakers, and sponsors at WerkPress for appetizers, drinks, conversation, and plenty of foosball.
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



<!-- SPONSORS -->
<section class="home--sponsors">
    <div class="home--sponsors_inner">
        <header class="sponsors--header">
            <h1 class="home--title sponsors--title">
                <span>Our</span>
                Sponsors
            </h1>
            <section class="header--description">
                These awesome community members make Prestige Conference possible.
            </section>
        </header>
        <section class="sponsors--content">
            <h3>Primary Sponsors</h3>
            <ul class="sponsors--list">
                <li class="sponsor">
                    <a href="/sponsor/press75/">
                        <img src="/link/to/sponsor/square/image.png" />
                    </a>
                </li>
                <li class="sponsor">
                    <a href="/sponsor/press75/">
                        <img src="/link/to/sponsor/square/image.png" />
                    </a>
                </li>
                <li class="sponsor">
                    <a href="/sponsor/press75/">
                        <img src="/link/to/sponsor/square/image.png" />
                    </a>
                </li>
            </ul>
            <h3>Gold Sponsors</h3>
            <ul class="sponsors--list">
                <li class="sponsor">
                    <a href="/sponsor/press75/">
                        <img src="/link/to/sponsor/square/image.png" />
                    </a>
                </li>
                <li class="sponsor">
                    <a href="/sponsor/press75/">
                        <img src="/link/to/sponsor/square/image.png" />
                    </a>
                </li>
                <li class="sponsor">
                    <a href="/sponsor/press75/">
                        <img src="/link/to/sponsor/square/image.png" />
                    </a>
                </li>
                <li class="sponsor">
                    <a href="/sponsor/press75/">
                        <img src="/link/to/sponsor/square/image.png" />
                    </a>
                </li>
            </ul>
            <h3>Silver Sponsors</h3>
            <ul class="sponsors--list">
                <li class="sponsor">
                    <a href="/sponsor/press75/">
                        <img src="/link/to/sponsor/square/image.png" />
                    </a>
                </li>
                <li class="sponsor">
                    <a href="/sponsor/press75/">
                        <img src="/link/to/sponsor/square/image.png" />
                    </a>
                </li>
                <li class="sponsor">
                    <a href="/sponsor/press75/">
                        <img src="/link/to/sponsor/square/image.png" />
                    </a>
                </li>
                <li class="sponsor">
                    <a href="/sponsor/press75/">
                        <img src="/link/to/sponsor/square/image.png" />
                    </a>
                </li>
                <li class="sponsor">
                    <a href="/sponsor/press75/">
                        <img src="/link/to/sponsor/square/image.png" />
                    </a>
                </li>
                <li class="sponsor">
                    <a href="/sponsor/press75/">
                        <img src="/link/to/sponsor/square/image.png" />
                    </a>
                </li>
                <li class="sponsor">
                    <a href="/sponsor/press75/">
                        <img src="/link/to/sponsor/square/image.png" />
                    </a>
                </li>
                <li class="sponsor">
                    <a href="/sponsor/press75/">
                        <img src="/link/to/sponsor/square/image.png" />
                    </a>
                </li>
                <li class="sponsor">
                    <a href="/sponsor/press75/">
                        <img src="/link/to/sponsor/square/image.png" />
                    </a>
                </li>
            </ul>
        </section>
    </div>
</section>
<section class="home--tickets">
    <header class="tickets--header">
        <h1 class="home--title tickets--title">
            Tickets
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
            <li class="ticket">
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
                <h2 class="ticket--title">
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
<section class="home--map">
    <a target="_blank" href="https://www.google.com/maps/preview?ie=UTF-8&fb=1&gl=us&cid=11125183430936972151&q=University+of+St.+Thomas+-+Minneapolis+Campus&ei=q6j2U8bDIs-cygTytIDgBQ&ved=0CIsBEPwSMAs">View St. Thomas on Google Maps</a>
</section>
<section class="home--mailing-list">
    <header class="mailing-list--header">
        <h1 class="home--title mailing-list--title">
            <span>Join</span>
            Our Email List
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

<script type="text/javascript">
    window.onload = function() {
        var s = skrollr.init({forceHeight: false});
    }
</script>