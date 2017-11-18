<?php
if ( post_password_required() )
    return;
?>

<section class="comments">
    <?php comment_form(); ?>

    <?php if ( have_comments() ) : ?>
        <header class="comments-title" role="banner">
            <?php
            printf( _n( '1 reply', '%1$s replies', get_comments_number(), 'espresso-programmer' ), number_format_i18n( get_comments_number() ) );
            ?>
        </header>

        <ul>
            <?php wp_list_comments( array( 'type' => 'comment', 'style' => 'ul' ) ); ?>
        </ul>
        <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
            <nav role="navigation" class="comments-navigation">
                <div class="comments-navigation-left"><?php next_comments_link( __( 'Newer Comments', 'espresso-programmer' ) ); ?></div>
                <div class="comments-navigation-right"><?php previous_comments_link( __( 'Older Comments', 'espresso-programmer' ) ); ?></div>
            </nav>
        <?php endif; ?>

        <?php if ( ! comments_open() && get_comments_number() ) : ?>
            <p class="no-comments"><?php _e( 'Comments are closed.' , 'espresso-programmer' ); ?></p>
        <?php endif; ?>

    <?php endif; ?>
</section>