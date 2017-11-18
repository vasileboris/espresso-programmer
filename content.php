<article role="article" itemscope itemtype="http://schema.org/Article">
    <header>
        <h1>
            <?php if ( is_single() || is_page() ) : ?>
                <?php the_title(); ?>
            <?php else : ?>
                <a href="<?php the_permalink() ?>">
                    <?php the_title(); ?>
                </a>
            <?php endif; ?>
        </h1>
        <?php if ( !is_page() ) : ?>
            <time datetime="<?php the_time('Y-m-d'); ?>" itemprop="datePublished" class="post-time">
                <?php the_time('F j, Y'); ?>
            </time>
        <?php endif; ?>
    </header>
    <div itemprop="articleBody">
        <?php the_content(); ?>
    </div>
</article>

<?php get_template_part('navigation', 'single'); ?>

<?php comments_template(); ?>

