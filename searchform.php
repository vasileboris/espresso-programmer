<form method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
    <label for="search-text" class="search-label"><?php esc_html_e( 'Search', 'espresso-programmer' ); ?></label>
    <input type="text" class="search-text" name="search-text"
           value="<?php echo esc_attr( get_search_query() ); ?>"
           placeholder="<?php esc_attr_e( 'Search &hellip;', 'espresso-programmer' ); ?>" />
    <input type="submit" class="search-submit" name="submit" value="<?php esc_attr_e( 'Search', 'espresso-programmer' ); ?>" />
</form>
