<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package cuvello-machado
 */

get_header(); ?>

<?php $slug = basename(get_permalink());?>

	<div id="pages-container" class="content-area single-page">
		<main id="main" class="site-main" role="main">
			<?php
			while ( have_posts() ) : the_post(); ?>
				<div class="entry-content">
					<div class="container">
						<?php $query = new WP_Query(array('posts_per_page' => '3', 'category_name' => $slug)); ?>
						<?php if($query->have_posts()) : ?>
							<div class="col-md-8 col-sm-8 no-padding-left">
						<?php else : ?>
							<div class="col-md-12 col-sm-12 no-padding-left">
						<?php endif; ?>
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
						<?php if($query->have_posts()) : ?>
						<div class="col-md-4 col-sm-4 notice-internal">
							<h3>Artigos Relacionados</h3>
							<?php while ( $query->have_posts() ) : $query->the_post(); ?>
								<div class="col-md-12 col-sm-12 no-padding">
									<div class="body-blog">
										<?php the_post_thumbnail('full', array( 'class' => 'img-responsive' ));?>
										<h2 class="title"><?php the_title()?></h2>
										<p>
											<?php the_excerpt()?>
										</p>
										<a href="<?php the_permalink()?>" class="anchor-orange">Ler Artigo</a>
									</div>
								</div>
							 <?php endwhile; ?>
						</div>
					    <?php endif; ?>
			<?php endwhile; ?>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
			


<?php
get_footer();
