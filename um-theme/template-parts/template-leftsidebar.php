<?php
/**
 *
 * Template name: Left Sidebar
 *
 * @package um-theme
 */
global $defaults;
get_header();?>

<div id="main" class="site-main">
<?php do_action( 'um_theme_before_page_content' );?>
<?php while ( have_posts() ) : the_post(); ?>

<!-- Page header -->
<header class="boot-col-md-12 page__header entry-header">
	<div class="single page-meta">
		<h1 class="entry-title">
			<?php the_title();?>
		</h1>
	</div>

</header>

<div class="boot-col-md-12 page-content">
<div class="website-canvas">
<div class="boot-row">
	<?php get_sidebar();?>
	<main id="primary" class="content-area single-page__content <?php um_determine_single_content_width();?>">
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="container-card-content">
			<div class="entry-content">
				<?php the_content(); ?>
				<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'um-theme' ),
						'after'  => '</div>',
					) );
				?>
			</div>
		</div>
		</div>
		<?php
			/**
			 * Functions hooked in to um_theme_after_page_content action
			 *
			 * @hooked um_theme_output_page_comments - 10
			 */
			do_action( 'um_theme_after_page_content' );
		?>
	</main>


	<?php endwhile; ?>
</div>
</div>
</div>
</div>

<?php
get_footer();