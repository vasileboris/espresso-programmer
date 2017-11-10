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
