<?php
/**
 * The template used to navigate between posts
 *
 * @package WordPress
 * @subpackage Espresso_Programmer
 * @since Espresso Programmer 1.0
 */

if ( is_single() ) : ?>
	<nav class="posts-navigation">
		<div class="posts-navigation-left">
			<?php if( get_previous_post_link() ) : ?>
				<div><?php _e( 'Previous', 'espresso-programmer' ); ?></div>
				<div><?php previous_post_link( '%link' ); ?></div>
			<?php endif; ?>
		</div>
		<div class="posts-navigation-right">
			<?php if( get_next_post_link() ) : ?>
				<div><?php _e( 'Next', 'espresso-programmer' ); ?></div>
				<div><?php next_post_link( '%link' ); ?></div>
			<?php endif; ?>
		</div>
	</nav>
<?php endif; ?>
