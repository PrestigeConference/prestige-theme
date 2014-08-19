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
            <a class="arrow-left"></a>
            <a class="arrow-right"></a>
        </nav>
    </header>
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


<!-- SCHEDULE -->
<section class="home--schedule">
    <header class="schedule--header">
        <h1 class="home--title schedule--title">
            <span>The</span>
            Schedule
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
        <section class="schedule--the-end">

        </section>
    </section>

</section>



<!-- SPONSORS -->
<section class="home--sponsors">
    <header class="speakers--header">
        <h1 class="home--title sponsors--title">
            <span>Our</span>
            Sponsors
        </h1>
        <section class="header--description">
            These awesome community members make Prestige Conference possible.
        </section>
    </header>
    <section class="sponsors--content">
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
        </ul>
    </section>
</section>

<script type="text/javascript">
    window.onload = function() {
        var s = skrollr.init();
    }
</script>