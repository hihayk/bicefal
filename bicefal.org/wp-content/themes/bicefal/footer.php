<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bicefal
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'bicefal' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav>
		
		<div class="colab-logos">
			<img class="colab-logo" src="<?php echo get_template_directory_uri(); ?>/images/bicefal.svg"/>
			<img class="colab-logo" src="<?php echo get_template_directory_uri(); ?>/images/tiu.svg"/>
			<img class="colab-logo" src="<?php echo get_template_directory_uri(); ?>/images/bestiarie.svg"/>
			<img class="colab-logo" src="<?php echo get_template_directory_uri(); ?>/images/hedonicreversal.svg"/>
			<img class="colab-logo" src="<?php echo get_template_directory_uri(); ?>/images/dissociated.svg"/>
			<img class="colab-logo" src="<?php echo get_template_directory_uri(); ?>/images/microfusa.svg"/>
		</div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
