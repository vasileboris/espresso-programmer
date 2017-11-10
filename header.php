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

<!-- main content div -->
<div>