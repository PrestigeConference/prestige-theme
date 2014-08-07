<?php while (have_posts()) : the_post(); ?>
    <?php the_content(); ?>
    <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
<?php endwhile; ?>
<?php if(is_front_page()) : ?>
<section class="home--recent-posts">
    <h1>
        Recent Announcements
    </h1>
    <?php
    $args2 = array('post_type' => 'post',
        'posts_per_page' => '5');
    $query2 = new WP_Query( $args2 );

    while($query2->have_posts()) : $query2->the_post(); ?>
        <article <?php post_class(); ?>>
            <header>
                <h2 class="post--title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php get_template_part('templates/entry-meta'); ?>
            </header>
            <?php if ( has_post_thumbnail() ) : ?>
                <figure class="post--thumbnail"><?php the_post_thumbnail() ?></figure>
            <?php endif; ?>
            <div class="post--summary">
                <?php the_content('<p>Continue Reading...</p>'); ?>
            </div>
            <footer class="post--metadata">
                <section class="post--metadata_categories">
                    <span class="post--metadata--title"><?php _e('Categories: ', 'spring'); ?></span> <?php the_category(', '); ?>
                </section>
                <section class="post--metadata_tags">
                    <?php the_tags('<span class="post--metadata--title">Tags:</span> ', ', ', ''); ?>
                </section>
            </footer>
        </article>
    <?php endwhile; ?>
</section>
<?php endif; ?>


