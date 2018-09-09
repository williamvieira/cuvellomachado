<?php
/**
 * The template for displaying all single posts.
 *
 */

get_header(); ?>

	<div id="pages-container" class="content-area single-page">
		<main id="main" class="site-main" role="main">
			<?php
			while ( have_posts() ) : the_post(); ?>
				<div class="entry-content">
					<div class="container">
						<div class="col-lg-9">
							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<div class="post-header">
									<?php //echo get_the_post_thumbnail( $recent["ID"], 'full', array( 'class' => 'img-responsive' ) ) ?>
									<?php the_title( '<h1 class="post-title">', '</h1>' ); ?>
								</div><!-- .post-header -->

								<div class="post-content">
									<?php
										the_content();

										wp_link_pages( array(
											'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'abrasso' ),
											'after'  => '</div>',
										) );
									?>
								</div><!-- .entry-content -->
							</article><!-- #post-## -->
							<br><br>
						</div> <!-- /.col -->

			<?php endwhile; // End of the loop.
			?>

			
					<div class="col-md-3">
						<?php
							if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar')) :
						?>
						<?php dynamic_sidebar( 'sidebar-1' ); ?>
						<?php
						    endif;
						?>
					</div>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
