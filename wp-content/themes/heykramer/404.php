<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package _tk
 */

get_header(); ?>
<div class="container">
	<div class="col-md-8">
		<section class="content-padder error-404 not-found">

			<header>
				<h2 class="page-title"><?php _e( 'Oops! Something went wrong here.', '_tk' ); ?></h2>
			</header><!-- .page-header -->

			<div class="page-content">

				<p><?php _e( 'Nothing could be found at this location. Maybe try a search?', '_tk' ); ?></p>

				<?php get_search_form(); ?>

			</div><!-- .page-content -->

		</section><!-- .content-padder -->
	</div>
	<div class="col-md-4">
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>
