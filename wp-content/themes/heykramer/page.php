<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package _tk
 */

get_header();

if( has_post_thumbnail($post->ID) ) {
	$hero_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
}
else {
	$hero_image = 'https://d2vhzxutzq6yvv.cloudfront.net/sites/heykramer/kramer-reaction.gif';
}
?>

<div class="hero" style="background-image: url('<?php echo $hero_image; ?>');">
	<h1><?php the_title(); ?></h1>
</div>

<div class="container">
	<div class="col-md-12">
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'page' ); ?>

		<?php endwhile; // end of the loop. ?>
	</div>
</div>

<?php get_footer(); ?>
