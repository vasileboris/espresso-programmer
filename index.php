<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php wp_title( '-', true, 'right' ); ?>
    </title>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php wp_head(); ?>
</head>
<body>
    <div>
        <?php get_header(); ?>

        <div>
            <div role="main">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part('content'); ?>
                <?php endwhile; endif; ?>

                <?php get_template_part('navigation'); ?>
            </div>

            <?php get_sidebar(); ?>
        </div>

        <?php get_footer(); ?>
    </div>
</body>
</html>