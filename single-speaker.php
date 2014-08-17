<?php while (have_posts()) : the_post(); ?>
    <section class="speaker">
        <?php if ( has_post_thumbnail() ) : ?>
            <figure class="speaker--picture">
                <?php the_post_thumbnail(); ?>
            </figure>
        <?php endif; ?>
        <section class="speaker--content">
            <h3 class="speaker--name">
                <?php the_title(); ?>
            </h3>
            <section class="speaker--bio">
                <?php the_field('biography'); ?>
                <div class="speaker--links">
                    <a href="http://www.twitter.com/<?php the_field('twitter'); ?>">@<?php the_field('twitter'); ?></a>
                    | <a href="<?php the_field('url'); ?>">website</a>
                </div>
            </section>
        </section>
    </section>
<?php endwhile; ?>
