<?php while (have_posts()) : the_post(); ?>

    <section class="video">
        <h1 class="video--title">
            <?php
            $post_object = get_field('session');
            if($post_object) :
                $post = $post_object;
                setup_postdata($post);

                $videoTitle = get_the_title();
                $videoDescription = get_field('session_description');
                $videoSubtitle = get_field('session_subtitle');

                wp_reset_postdata();
            endif;
            echo $videoTitle; ?>
        </h1>
        <?php if($videoSubtitle) : ?>
            <h2 class="video--subtitle">
                <?php echo $videoSubtitle; ?>
            </h2>
        <?php endif; ?>
        <section class="video--content">
            <?php if(get_field('full_video_available_to_public') || pmpro_hasMembershipLevel(array(1,2,3))): ?>
                <section class="youtube">
                    <?php the_field('full_video_embed_code'); ?>
                </section>
            <?php else: ?>
                <section class="signup preview">
                    Please <a href="/wp-login.php">login</a> to view the full video, or <a href="/purchase-past-videos/">purchase access to past videos</a>.
                </section>
                <section class="youtube preview">
                    <?php the_field('preview_video_embed_code'); ?>
                </section>
            <?php endif; ?>
            <section class="video--description">
                <?php echo $videoDescription; ?>
            </section>
            <section class="video--metadata">
                <?php
                $post_object = get_field('speaker');
                if($post_object) :
                    $post = $post_object;
                    setup_postdata($post);
                    ?>
                    <section class="video--speaker">
                        <section class="video--speaker--picture">
                            <?php if(has_post_thumbnail()) : the_post_thumbnail(); endif; ?>
                        </section>
                        <section class="video--speaker--content">
                            <h3 class="video--speaker--name">
                                <?php the_title(); ?>
                            </h3>
                            <section class="video--speaker--links">
                                <a href="http://www.twitter.com/<?php the_field('twitter'); ?>">@<?php the_field('twitter'); ?></a>
                                | <a href="<?php the_field('url'); ?>">website</a>
                            </section>
                        </section>
                    </section>
                    <?php
                    wp_reset_postdata();
                endif;
                ?>
            </section>
        </section>
    </section>

<?php endwhile; ?>