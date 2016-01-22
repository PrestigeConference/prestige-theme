<?php $activeConference = 'Aug15'; ?>

<section class="past-videos">
    <h1>Completed Sessions</h1>
    <?php while (have_posts()) : the_post(); ?>
        <?php if(has_category($activeConference)) : ?>
        <section class="video">
            <section class="past-video--content">
                <section class="video--thumbnail">
                    <a class="video--thumbnail_link" href="<?php the_permalink(); ?>">
                        <?php if(has_post_thumbnail()) : the_post_thumbnail(); endif; ?>
                    </a>
                </section>
                <section class="video--description">
                    <a class="past-videos--title_link" href="<?php the_permalink(); ?>">
                            <?php
                            $post_object = get_field('session');
                            if($post_object) :
                                $post = $post_object;
                                setup_postdata($post);

                                $videoTitle = get_the_title();
                                $videoDescription = get_field('session_description');
                                $videoSubtitle = get_field('session_subtitle');

                                if($videoSubtitle) :
                                    $videoTitle = $videoTitle . ": " . $videoSubtitle;
                                endif;

                                wp_reset_postdata();
                            endif;
                            echo $videoTitle; ?>
                    </a>
                    <section class="video--metadata">
                        <section class="past-videos--speaker">
                            <?php
                            $post_object = get_field('speaker');
                            $post = $post_object;
                            setup_postdata($post);
                            ?>
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            <?php
                            wp_reset_postdata();


                            $post_object = get_field('speaker_2');
                            if($post_object) :
                                $post = $post_object;
                                setup_postdata($post);
                                ?>
                                    , <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                <?php
                                wp_reset_postdata();
                            endif;

                            $post_object = get_field('speaker_3');
                            if($post_object) :
                                $post = $post_object;
                                setup_postdata($post);
                                ?>
                                , <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                <?php
                                wp_reset_postdata();
                            endif;

                            $post_object = get_field('speaker_4');
                            if($post_object) :
                                $post = $post_object;
                                setup_postdata($post);
                                ?>
                                , <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                <?php
                                wp_reset_postdata();
                            endif;
                            ?>

                        </section>
                    </section>
                    <?php echo $videoDescription; ?>
                </section>
            </section>
        </section>

    <?php endif; endwhile; ?>
    <div class="more-coming" style="display: none;">
        Thank you for your interest in our past videos. Our Minneapolis event just finished and we're busy editing the videos. We'll add them here as we complete them. Expect them all by Thursday.
    </div>
</section>