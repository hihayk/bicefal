<?php /* Template Name: Home Template */ 
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bicefal
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="row">
				<div class="col-xs-12 col-sm-5">
					<div class="section-title small-caps">
						The event
					</div>
					<div class="about-intro">
						<p>
							<?php 
							$id=19; 
							$post = get_post($id); 
							$content = apply_filters('the_content', $post->post_content); 
							echo $content;  
							?>

						</p>
					</div>

					<a href="<?php echo esc_url( get_page_link( 19 )); ?>" class="about-intro-btn">More</a>
					
				</div>
				<div class="col-xs-12 col-sm-6 col-sm-offset-1">

					<div class="lineup">
						<div class="lineup-title small-caps section-title">
							The lineup
						</div>

						<div class="lineup-list">
							<?php 
							$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
							<?php if ( $wpb_all_query->have_posts() ) : ?>

							<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
								<a class="lineup-list-item-link" href="<?php the_permalink(); ?>">
									<?php the_title(); ?>
									<span class="playing">
										<?php echo get_secondary_title(); ?>
									</span>
								</a>
							<?php endwhile; ?>

							<?php wp_reset_postdata(); ?>

							<?php else : ?>
								<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
							<?php endif; ?>
						</div>
					</div>

				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();