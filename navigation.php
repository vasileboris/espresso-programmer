<?php if ( !(is_single() || is_page()) ) : ?>
    <nav>
        <div>
            <?php if( get_previous_posts_link() ) :
                previous_posts_link( __( 'Newer Posts', 'espresso-programmer' ) );
            endif; ?>
        </div>
        <div>
            <?php if( get_next_posts_link() ) :
                next_posts_link( __( 'Older Posts', 'espresso-programmer' ) );
            endif; ?>
        </div>
    </nav>
<?php endif; ?>
