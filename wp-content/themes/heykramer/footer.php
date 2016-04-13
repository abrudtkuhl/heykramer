<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package _tk
 */
?>

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="container">
		<div class="row">
			<div class="site-footer-inner col-sm-12">
				<div class="site-info">
					<?php do_action( '_tk_credits' ); ?>
					<a href="/">heykramer</a> / <a href="/wp-json/api">API</a> / <a href="https://github.com/abrudtkuhl/heykramerbot" target="_blank"><i class="fa fa-github-alt"></i></a> / built by <a href="http://youmetandy.com" target="_blank">@abrudtkuhl</a>
				</div><!-- close .site-info -->

			</div>
		</div>
	</div><!-- close .container -->
</footer><!-- close #colophon -->

<?php wp_footer(); ?>

</body>
</html>
