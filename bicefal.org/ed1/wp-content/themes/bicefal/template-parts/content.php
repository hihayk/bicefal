<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bicefal
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );

		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>

		<?php
		endif; ?>

		<div class="playing">
			<?php echo get_secondary_title(); ?>
		</div>

	</header><!-- .entry-header -->

	<div class="post-thumbnail">
		<img src="<?php the_post_thumbnail_url( $size ); ?>" class="post-thumbnail-img">
	</div>

	<div class="row">
		<div class="col-xs-12 col-sm-4"></div>
		<div class="col-xs-12 col-sm-8">
			
			<div class="entry-content">
				<?php
					the_content( sprintf(
						/* translators: %s: Name of current post. */
						wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'bicefal' ), array( 'span' => array( 'class' => array() ) ) ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					) );

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bicefal' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->
		</div>

	</div>

	<footer class="entry-footer">
		<?php bicefal_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
