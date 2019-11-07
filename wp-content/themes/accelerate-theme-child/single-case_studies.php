<?php
/**
 * The template for displaying case studies
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>
	<div id="primary" class="site-content">
		<div id="content" role="main">

		<?php while ( have_posts() ) : the_post();
			$size = "full";
			$services = get_field('services');
			$client = get_field('client');
			$link = get_field('site_link');
			$image_1 = get_field('image_1');
			$image_2 = get_field('image_2');
			$image_3 = get_field('image_3'); ?>

	<article class="case-study">
		<aside class="case-study_sidebar">
			<h2><?php the_title(); ?></h2>
			<h4><?php echo $services; ?></h4>
			<h3>Client: <?php echo $client; ?></h3>
			
			<?php the_content(); ?>

			<p class="read-more-link"><strong><a href="<?php echo $link; ?>">Visit Live Site</a></strong></p>
		</aside>
	</article>
		
		<div class="case-study-images">
			<?php if($image_1){ 
				echo wp_get_attachment_image($image_1, $size); 
			}?>

			<?php if($image_2){
				echo wp_get_attachment_image($image_2, $size);
			}?>
			
			<?php if($image_3){
				echo wp_get_attachment_image($image_3, $size);
			}?>
		</div>

			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->

<?php get_footer(); ?>