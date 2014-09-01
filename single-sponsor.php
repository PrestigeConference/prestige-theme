<?php while (have_posts()) : the_post(); ?>
    <h1 class="sponsor--title">
        <?php if ( has_post_thumbnail() ) :
                the_post_thumbnail();
            else : ?>
                <img src="<?php the_field('square_image_for_homepage'); ?>" alt="<?php the_title(); ?>" />
            <?php endif; ?>
    </h1>
    <section class="sponsor--writeup">
        <?php the_content(); ?>
    </section>
<?php endwhile; ?>
