<?php
/**
 * The template for displaying Portfolio about
 *
 * Template Name: About Theme
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>
	
	<div id='about_title' class="home-page hero-content">
		<div class="overlay-text">	
			<?php while ( have_posts() ) : the_post(); ?>			
					<?php the_content(); ?>	
			<?php endwhile; // end of the loop. ?>
		</div>
	</div>

	<div id="primary" class="site-content">
		<div id="content" role="main">

		<?php while ( have_posts() ) : the_post();
		
			$size = "medium";
			$intro_title = get_field('intro_title');
			$intro_description = get_field('intro_description');
			$title_1 = get_field('title_1');
			$title_2 = get_field('title_2');
			$title_3 = get_field('title_3');
			$title_4 = get_field('title_4');
			$image_1 = get_field('image_1');
			$image_2 = get_field('image_2');
			$image_3 = get_field('image_3');
			$image_4 = get_field('image_4');
			$description_1 = get_field('description_1');
			$description_2 = get_field('description_2');
			$description_3 = get_field('description_3');
			$description_4 = get_field('description_4');  ?>
		
		<div id='intro' class="part_intro">	
			<h2><?php echo $intro_title; ?></h2>
			<?php echo $intro_description; ?>	
		</div>
		
		<div id="section_1" class="about_section">
			<div id='part_1' class="about_column_img">
				<div class="about-images">
					<?php if($image_1){ 
					echo wp_get_attachment_image($image_1, $size); 
					}?>
				</div>			
			</div>
			<div class="about_column_text">
				<h2><?php echo $title_1; ?></h2>
				<?php echo $description_1; ?>
			</div>
		</div>

		<div id="section_2" class="about_section">
			<div class="about_column_text">
				<h2><?php echo $title_2; ?></h2>
				<?php echo $description_2; ?>
			</div>
			<div id='part_2' class="about_column_img">
				<div class="about-images">
					<?php if($image_2){ 
						echo wp_get_attachment_image($image_2, $size); 
					}?>
				</div>
			</div>
		</div>
		
		<div id="section_3" class="about_section">
			<div id='part_3' class="about_column_img">
				<div class="about-images">
					<?php if($image_3){ 
						echo wp_get_attachment_image($image_3, $size); 
					}?>
				</div>
			</div>
			<div class="about_column_text">
				<h2><?php echo $title_3; ?></h2>
				<?php echo $description_3; ?>
			</div>	
		</div>

		<div id="section_4" class="about_section">
			<div class="about_column_text">
				<h2><?php echo $title_1; ?></h2>
				<?php echo $description_1; ?>
			</div>
			<div id='part_4' class="about_column_img">
				<div class="about-images">
					<?php if($image_4){ 
						echo wp_get_attachment_image($image_4, $size); 
					}?>
				</div>	
			</div>
		</div>


			
			<?php endwhile; // end of the loop. ?>

		</div><!-- .main-content -->

	</div><!-- #primary -->

<?php get_footer(); ?>
