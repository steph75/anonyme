<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Dellow
 */

get_header(); 

if (of_get_option('sidebar-layout',true) == 'full') { ?>
	<div id="primary" class="content-area col-md-12">
	<?php }
else { ?>
	<div id="primary" class="content-area col-md-8">
<?php } ?>
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php dellow_content_nav( 'nav-below' ); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() )
					comments_template();
			?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_sidebar('footer'); ?>
<?php get_footer(); ?>