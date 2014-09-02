<?php while (have_posts()) : the_post(); ?>
    <?php if ( has_post_thumbnail() ) : ?>

        <h1 class="sponsor--title">
            <?php the_post_thumbnail();
    else : ?>
        <h1 class="sponsor--title no-featured">
            <img src="<?php the_field('square_image_for_homepage'); ?>" alt="<?php the_title(); ?>" /> <?php the_title(); ?>
    <?php endif; ?>
    </h1>
    <section class="sponsor--level">
        <?php the_field('sponsorship_level'); ?> Sponsor
    </section>
    <section class="sponsor--writeup">
        <?php the_content(); ?>
    </section>
<?php endwhile; ?>
