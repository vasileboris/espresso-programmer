<?php get_header(); ?>

<?php get_sidebar('menu'); ?>

<div class="posts" role="main">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php get_template_part('content'); ?>
    <?php endwhile; endif; ?>

    <?php get_template_part('navigation'); ?>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>