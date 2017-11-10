<?php
if ( post_password_required() )
    return;
?>

<div>
    <?php if ( have_comments() ) : ?>
        <h2>
            <?php
            printf( _n( 'One thought on "%2$s"', '%1$s thoughts on "%2$s"', get_comments_number(), 'espresso-programmer' ),
                number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
            ?>
        </h2>

        <ul>
            <?php wp_list_comments( array( 'type' => 'comment', 'reverse_top_level' => tue ) ); ?>
        </ul>

        <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
            <nav role="navigation">
                <h1><?php _e( 'Comment navigation', 'espresso-programmer' ); ?></h1>
                <div><?php previous_comments_link( __( '&larr; Older Comments', 'espresso-programmer' ) ); ?></div>
                <div><?php next_comments_link( __( 'Newer Comments &rarr;', 'espresso-programmer' ) ); ?></div>
            </nav>
        <?php endif; ?>

        <?php if ( ! comments_open() && get_comments_number() ) : ?>
            <p class="no-comments"><?php _e( 'Comments are closed.' , 'espresso-programmer' ); ?></p>
        <?php endif; ?>

    <?php endif; ?>

    <?php comment_form(); ?>

</div>