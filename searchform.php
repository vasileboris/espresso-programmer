<?php
/**
 * The template for displaying the form for searching content
 *
 * @package WordPress
 * @subpackage Espresso_Programmer
 * @since Espresso Programmer 1.0
 */
?>

<form method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
    <label for="s" class="search-label"><?php esc_html_e( 'Search', 'espresso-programmer' ); ?></label>
    <input type="text" class="search-text" name="s"
           value="<?php echo esc_attr( get_search_query() ); ?>"
           placeholder="<?php esc_attr_e( 'Search &hellip;', 'espresso-programmer' ); ?>" />
    <input type="submit" class="search-submit" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'espresso-programmer' ); ?>" />
</form>
