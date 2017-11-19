<?php get_header(); ?>

<section class="posts" role="main">
    <article role="article" class="post">
        <header class="post-info">
            <h1><?php _e( 'Not Found', 'espresso-programmer' ); ?></h1>
        </header>
        <div itemprop="articleBody" class="post-content">
            <h2><?php _e( 'This is somewhat embarrassing, isn’t it?', 'espresso-programmer' ); ?></h2>
            <p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'espresso-programmer' ); ?></p>
            <div class="posts-search">
                <?php get_search_form(); ?>
            </div>
        </div>
    </article>
</section>


<?php get_footer(); ?>