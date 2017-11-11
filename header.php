<header role="banner" class="header">
    <div class="blog-header">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"
           title="<?php echo esc_attr( bloginfo( 'name' ) ); ?>"
           class="blog-home" rel="home">
            <img src="<?php echo esc_url( get_header_image() ); ?>"
                 alt="<?php echo esc_attr( bloginfo( 'name' ) ); ?>"
                 class="blog-logo" />
        </a>
        <div class="blog-name">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <?php bloginfo( 'name' ); ?>
            </a>
        </div>
        <div class="blog-description"><?php bloginfo( 'description' ); ?></div>
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