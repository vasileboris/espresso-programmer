<?php
/**
 * The default template for displaying content
 *
 * Used for both posts and pages.
 *
 * @package WordPress
 * @subpackage Espresso_Programmer
 * @since Espresso Programmer 1.0
 */
?>

<article <?php post_class(); ?> itemscope itemtype="http://schema.org/Article">
	<header class="post-info">
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
			<time class="post-time"  datetime="<?php the_time('Y-m-d'); ?>" itemprop="datePublished">
				<?php the_date(); ?>
			</time>
		<?php endif; ?>
	</header>
	<?php if ( has_post_thumbnail() ) : ?>
		<?php
			the_post_thumbnail( 'espresso_programmer_post_thumbnail',
				array( 'itemprop' => 'image', 'class' => 'post-image' )
			);
		?>
	<?php endif; ?>
	<div class="post-content" itemprop="articleBody">
		<?php the_content(); ?>
	</div>
</article>

<?php get_template_part('navigation', 'single'); ?>

<?php comments_template(); ?>

