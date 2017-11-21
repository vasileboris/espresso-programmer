<?php get_header(); ?>

<?php get_sidebar('menu'); ?>

<div class="posts" role="main">
    <?php if ( have_posts() ) : ?>
        <header class="post-info">
            <h1><?php printf( __( 'Category Archives: %s', 'espresso-programmer' ), single_cat_title( '', false ) ); ?></h1>

            <?php if ( category_description() ) : // Show an optional category description ?>
                <div class="post-info-meta"><?php echo category_description(); ?></div>
            <?php endif; ?>
        </header>

        <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'content' ); ?>
        <?php endwhile; ?>

        <?php get_template_part('navigation'); ?>

    <?php else : ?>
        <?php get_template_part( 'content', 'none' ); ?>
    <?php endif; ?>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>