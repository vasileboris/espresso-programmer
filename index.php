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
    <header role='banner'>
        <div>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( bloginfo( 'name' ) ); ?>" rel="home">
                <img src="<?php echo esc_url( get_header_image() ); ?>"
                     height="<?php echo absint( get_custom_header()->height ); ?>"
                     width="<?php echo absint( get_custom_header()->width ); ?>"
                     alt="<?php echo esc_attr( bloginfo( 'name' ) ); ?>" />
            </a>
        </div>
        <div>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <?php bloginfo( 'name' ); ?>
            </a>
        </div>
        <div><?php bloginfo( 'description' ); ?></div>
        <?php wp_nav_menu(
                array(
                    'theme_location' => 'primary',
                    'container'       => 'nav',
                    'container_id'    => 'menu-primary',
                    'container_class' => 'menu',
                    'menu_id'         => 'menu-primary-items',
                    'menu_class'      => 'menu-items',
                    'depth' => 1
                )); ?>
    </header>

    <div>
        <div role="main">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <article role="article" itemscope itemtype="http://schema.org/Article">
                    <header>
                        <h1>
                            <a href="<?php the_permalink() ?>">
                                <?php the_title(); ?>
                            </a>
                        </h1>
                        <time datetime="<?php the_time('Y-m-d'); ?>" itemprop="datePublished">
                            <?php the_time('F j, Y'); ?>
                        </time>
                    </header>
                    <div itemprop="articleBody">
                        <?php the_content('Read More &raquo;'); ?>
                    </div>
                </article>
            <?php endwhile; endif; ?>

            <div>
                <?php posts_nav_link(); ?>
            </div>
        </div>

        <?php if ( is_active_sidebar( 'espresso_programmer_right' ) ) : ?>
            <div id="right-sidebar" role="complementary">
                <?php dynamic_sidebar( 'espresso_programmer_right' ); ?>
            </div>
        <?php endif; ?>
    </div>

    <footer>
        <?php echo espresso_programmer_footer_credits(); ?>
    </footer>
</div>

<?php wp_footer(); ?>
</body>
</html>