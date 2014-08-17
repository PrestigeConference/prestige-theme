<?php while (have_posts()) : the_post(); ?>
    <section class="session">
        <section class="session--content">
            <header class="session--header">
                <h1 class="session--name">
                    <?php the_title(); ?>
                    <?php if(get_field('session_subtitle')) : ?>
                        <div class="session--subtitle">
                            <?php the_field('session_subtitle'); ?>
                        </div>
                    <?php endif; ?>
                </h1>
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
            </header>

            <section class="session--description">
                <?php the_field('session_description'); ?>
            </section>
        </section>
    </section>
<?php endwhile; ?>