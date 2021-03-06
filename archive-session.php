<h1>The Prestige Sessions</h1>
<ul class="schedule--day-list session-list">
<?php while (have_posts()) : the_post(); ?>
        <li class="schedule--session">
            <section class="session--content">
                <h3 class="session--title">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?><?php if(get_field('session_subtitle')) : ?>: <?php the_field('session_subtitle'); ?>
                        <?php endif; ?>
                    </a>
                </h3>
                <?php
                $post_object = get_field('session_speaker');
                if($post_object) :
                    $post = $post_object;
                    setup_postdata($post);
                    ?>
                    <section class="session--speaker">
                        <a href="<?php the_permalink(); ?>"><?php if(has_post_thumbnail()) : the_post_thumbnail(); endif; ?></a>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

                    </section>
                    <?php
                    wp_reset_postdata();
                endif;
                ?>
                <section class="session--description">
                    <?php the_field('session_description'); ?>
                </section>
            </section>
        </li>
<?php endwhile; ?>
</ul>