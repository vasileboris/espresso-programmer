<?php if ( !(is_single() || is_page()) ) : ?>
    <nav>
        <div>
            <?php if( get_previous_posts_link() ) :
                previous_posts_link( 'Newer Entries' );
            endif; ?>
        </div>
        <div>
            <?php if( get_next_posts_link() ) :
                next_posts_link( 'Older Entries' );
            endif; ?>
        </div>
    </nav>
<?php endif; ?>
<?php if ( is_single() ) : ?>
    <nav>
        <div>
            <?php if( get_next_post_link() ) : ?>
                <div>Next</div>
                <div><?php next_post_link( '%link' ); ?></div>
            <?php endif; ?>
        </div>
        <div>
            <?php if( get_previous_post_link() ) : ?>
                <div>Previous</div>
                <div><?php previous_post_link( '%link' ); ?></div>
            <?php endif; ?>
        </div>
    </nav>
<?php endif; ?>
