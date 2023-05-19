<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package miweb
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found">
			<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'miweb' ); ?></h1>
		</section>

	</main>

<?php
get_footer();
