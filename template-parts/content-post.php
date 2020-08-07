<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mashico
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta-wrapper">
				<div class="entry-meta">
					<?php
					mashico_posted_on();
					// mashico_posted_by();
					?>
				</div><!-- .entry-meta -->
				<div class="entry-share">
					<nav class="entry-share-nav">
						<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink(); ?>" target="_blank">
							<i class="icon" data-icon="facebook"></i>
						</a>
						<a href="http://twitter.com/share?text=<?php echo get_the_title(); ?>&url=<?php echo get_permalink(); ?>" target="_blank">
							<i class="icon" data-icon="twitter"></i>
						</a>
						<a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_permalink(); ?>&title=<?php echo get_the_title(); ?>&summary=<?php echo get_the_excerpt(); ?>&source=Marcial Soto" target="_blank">
							<i class="icon" data-icon="linkedin"></i>
						</a>
						<a href="https://wa.me/?text=<?php echo get_the_title(); ?>" data-action="share/whatsapp/share">
							<i class="icon" data-icon="whatsapp"></i>
						</a>
						<!-- <a href="https://wa.me/?text=<?php echo get_the_title(); ?>" data-action="share/whatsapp/share">
							<i class="icon" data-icon="instagram"></i>
						</a> -->
					</nav>
				</div>
			</div>
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php mashico_post_thumbnail(); ?>

	<div class="entry-content">
		<?php 
			if ( is_singular() ) :
				the_content(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'mashico' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						wp_kses_post( get_the_title() )
					)
				);
			else :
				the_excerpt();
			endif;
			
				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'mashico' ),
						'after'  => '</div>',
					)
				);
		?>
	</div><!-- .entry-content -->


	<footer class="entry-footer">
		<?php mashico_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
