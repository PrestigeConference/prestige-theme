<?php $activeConference = 'Aug15'; ?>
<div class="widget">
<h3>Our Sponsors</h3>
<?php
$sponsorQueryArgs = array('post_type' => 'Sponsor',
    'posts_per_page' => '100',
    'category_name' => $activeConference);
$sponsorQuery = new WP_Query( $sponsorQueryArgs ); ?>

<section class="sponsors--list_wrapper other-sponsors_wrapper">
    <ul class="sponsors--list sponsors--list_square">

    <?php  while($sponsorQuery->have_posts()) : $sponsorQuery->the_post(); ?>
        <?php $sponsorshipLevel = get_field('sponsorship_level');
        if($sponsorshipLevel == 'Primary') : ?>
            <li class="sponsor">
                <h6>Primary Sponsor</h6>
                <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                    <img src="<?php the_field('square_image_for_homepage') ?>" alt="<?php the_title(); ?>" />
                </a>
            </li>
        <?php endif; endwhile; ?>
        <?php  while($sponsorQuery->have_posts()) : $sponsorQuery->the_post(); ?>
            <?php $sponsorshipLevel = get_field('sponsorship_level');
            if($sponsorshipLevel == 'Afterparty') : ?>
                <li class="sponsor">
                    <h6>Afterparty</h6>
                    <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                        <img src="<?php the_field('square_image_for_homepage') ?>" alt="<?php the_title(); ?>" />
                    </a>
                </li>
            <?php endif; endwhile; ?>
    <?php  while($sponsorQuery->have_posts()) : $sponsorQuery->the_post(); ?>
        <?php $sponsorshipLevel = get_field('sponsorship_level');
        if($sponsorshipLevel == 'Gold') : ?>
            <li class="sponsor">
                <h6>Gold Sponsor</h6>
                <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                    <img src="<?php the_field('square_image_for_homepage') ?>" alt="<?php the_title(); ?>" />
                </a>
            </li>
        <?php endif; endwhile; ?>
    <?php  while($sponsorQuery->have_posts()) : $sponsorQuery->the_post(); ?>
        <?php $sponsorshipLevel = get_field('sponsorship_level');
        if($sponsorshipLevel == 'Silver') : ?>
            <li class="sponsor">
                <h6>Silver Sponsor</h6>
                <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                    <img src="<?php the_field('square_image_for_homepage') ?>" alt="<?php the_title(); ?>" />
                </a>
            </li>
        <?php endif; endwhile; ?>
    <?php  while($sponsorQuery->have_posts()) : $sponsorQuery->the_post(); ?>
        <?php $sponsorshipLevel = get_field('sponsorship_level');
        if($sponsorshipLevel == 'Bronze') : ?>
            <li class="sponsor">
                <h6>Bronze Sponsor</h6>
                <img src="<?php the_field('square_image_for_homepage') ?>" alt="<?php the_title(); ?>" />
            </li>
        <?php endif; endwhile; ?>
    </ul>
</section>
</div>
<?php dynamic_sidebar('sidebar-primary'); ?>