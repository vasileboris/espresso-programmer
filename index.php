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

        <div role="main">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <article role="article" itemscope itemtype="http://schema.org/Article">
                    <header>
                        <h1>
                            <?php if ( is_single() || is_page() ) : ?>
                                <?php the_title(); ?>
                            <?php else : ?>
                                <a href="<?php the_permalink() ?>">
                                    <?php the_title(); ?>
                                </a>
                            <?php endif; ?>
                        </h1>
                        <?php if ( !is_page() ) : ?>
                            <time datetime="<?php the_time('Y-m-d'); ?>" itemprop="datePublished">
                                <?php the_time('F j, Y'); ?>
                            </time>
                        <?php endif; ?>
                    </header>
                    <div itemprop="articleBody">
                        <?php the_content(); ?>
                    </div>
                </article>
            <?php endwhile; endif; ?>

            <?php get_template_part('navigation'); ?>
        </div>

        <?php get_sidebar(); ?>
    </div>

    <?php get_footer(); ?>
</body>
</html>