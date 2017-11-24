<?php
/**
 * The sidebar containing the main widget area
 *
 * Displays on posts and pages.
 *
 * If no active widgets are in this sidebar, hide it completely.
 *
 * @package WordPress
 * @subpackage Espresso_Programmer
 * @since Espresso Programmer 1.0
 */

if ( is_active_sidebar( 'espresso_programmer_sidebar_main' ) ) : ?>
    <nav class="sidebar" role="menu">
        <?php dynamic_sidebar( 'espresso_programmer_sidebar_main' ); ?>
    </nav>
<?php endif; ?>
