<section class="past-videos">
    <h1>Past Videos</h1>
    <?php while (have_posts()) : the_post(); ?>

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
                        <?php
                        $post_object = get_field('speaker');
                        if($post_object) :
                            $post = $post_object;
                            setup_postdata($post);
                            ?>
                            <section class="past-videos--speaker">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </section>
                            <?php
                            wp_reset_postdata();
                        endif;
                        ?>
                    </section>
                    <?php echo $videoDescription; ?>
                </section>
            </section>
        </section>

    <?php endwhile; ?>
</section>