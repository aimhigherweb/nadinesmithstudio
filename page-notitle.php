<?php
/**
 * Template Name: No Title
 *
 *
 * The page template for no title
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Nadine Smith Studio
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div class="site-main">

			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php if ( has_post_thumbnail() ) : ?>
						<div class="entry-thumbnail">
							<?php echo get_the_post_thumbnail( get_the_ID(), 'boardwalk-hero-image' ); ?>
						</div><!-- .entry-thumbnail -->
					<?php endif; ?>
								
					<div class="entry-content">
						<?php the_content(); ?>
						<?php
							wp_link_pages( array(
								'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'boardwalk' ) . '</span>',
								'after'       => '</div>',
								'link_before' => '<span>',
								'link_after'  => '</span>',
								'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'boardwalk' ) . ' </span>%',
								'separator'   => '<span class="screen-reader-text">, </span>',
							) );
						?>
					</div><!-- .entry-content -->

					<?php edit_post_link( __( 'Edit', 'boardwalk' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer>' ); ?>
				</article><!-- #post-## -->


			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
