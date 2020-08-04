<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Gutenbergtheme
 */


 get_header(); ?>

 	<main id="primary" class="site-main">

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-content">
				<h1>Oops! That page can&rsquo;t be found.- 404</h1>
				<p>It looks like nothing was found at this location</p>
			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php
					the_content();

				?>
			</div><!-- .entry-content -->
		</article><!-- #post-<?php the_ID(); ?> -->

 	</main><!-- #primary -->

 <?php
 get_footer();
 ?>
