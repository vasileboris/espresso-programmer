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
<div class="page">

<header role="banner" class="header">
    <div class="blog-header">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"
           title="<?php echo esc_attr( bloginfo( 'name' ) ); ?>"
           class="blog-home" rel="home">
            <img src="<?php echo esc_url( get_header_image() ); ?>"
                 alt="<?php echo esc_attr( bloginfo( 'name' ) ); ?>"
                 class="blog-logo" />
        </a>
        <div class="blog-info">
            <div class="blog-name">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <?php bloginfo( 'name' ); ?>
                </a>
            </div>
            <div class="blog-description"><?php bloginfo( 'description' ); ?></div>
        </div>
    </div>
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