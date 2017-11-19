<?php get_header(); ?>

<?php get_sidebar('menu'); ?>

<section class="posts" role="main">

    <?php if ( have_posts() ) : ?>

        <header class="post-info">
            <h1><?php printf( __( 'Tag Archives: %s', 'espresso-programmer' ), single_tag_title( '', false ) ); ?></h1>

            <?php if ( tag_description() ) : // Show an optional tag description ?>
                <div class="post-info-meta"><?php echo tag_description(); ?></div>
            <?php endif; ?>
        </header>

        <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'content' ); ?>
        <?php endwhile; ?>

        <?php get_template_part('navigation'); ?>

    <?php else : ?>
        <?php get_template_part( 'content', 'none' ); ?>
    <?php endif; ?>

</section>

<?php get_sidebar(); ?>

<?php get_footer(); ?>