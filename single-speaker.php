<?php while (have_posts()) : the_post(); ?>
    <h1>Speaker: <?php the_title(); ?></h1>
    <section class="speaker">
        <section class="speaker--info">
            <?php if ( has_post_thumbnail() ) : ?>
                <figure class="speaker--picture">
                    <?php the_post_thumbnail(); ?>
                </figure>
            <?php endif; ?>
            <section class="speaker--metadata">
                <h3 class="speaker--name">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h3>
                <section class="speaker--links">
                    <a href="http://www.twitter.com/<?php the_field('twitter'); ?>">@<?php the_field('twitter'); ?></a>
                    | <a href="<?php the_field('url'); ?>">website</a>
                </section>
            </section>
        </section>
        <section class="speaker--bio">
            <?php the_field('biography'); ?>
        </section>
    </section>
<?php endwhile; ?>
