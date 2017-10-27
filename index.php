<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>
        <?php wp_title(''); ?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>
<body>
<!-- Start blog display -->
<div>
    <!-- Header -->
    <div>
        <header role='banner'>
            <a href="<?php echo home_url(); ?>"></a>
            <h1>
                <a href="<?php echo home_url(); ?>">
                    <?php bloginfo('name'); ?>
                </a>
            </h1>
            <p>
                <a href="<?php echo home_url(); ?>">
                    <?php bloginfo('description'); ?>
                </a>
            </p>
        </header>
    </div>

    <!-- Posts Area -->
    <main>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article role="article" itemscope itemtype="http://schema.org/Article">
                <h1>
                    <a href="<?php the_permalink() ?>">
                        <?php the_title(); ?>
                    </a>
                </h1>
                <div>
                    <time datetime="<?php the_time('Y-m-d'); ?>" itemprop="datePublished">
                        <?php the_time(__('F j, Y')); ?>
                    </time>
                </div>
                <div itemprop="articleBody" data-type-cleanup="true">
                    <?php the_content('Read More &raquo;'); ?>
                </div>
            </article>
        <?php endwhile; endif; ?>

        <div>
            <?php posts_nav_link(); ?>
        </div>
    </main>

    <!-- Footer -->
    <footer>
        <!-- TODO Use PHP to display credits dynamically -->
        Espresso Programmer empowered by WordPress
    </footer>
</div>

<!-- End blog display -->

<?php wp_footer(); ?>
</body>
</html>