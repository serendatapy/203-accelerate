<?php
/**
 * The template for displaying the archives of case studies
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div /*id="primary"*/ class="site-content">
		<div class="main-content" /*role="main"*/>
				 
					 <?php while (have_posts()) : the_post(); 
					 $size = "full";
                     $services = get_field('services');
                     $client = get_field('client');
                     $link = get_field('site_link');
                     $image_1 = get_field('image_1');
                    ?>

                    <article class="case-study-archive">
		                <aside class="case-study_sidebar-archive">
			                <h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h2>
			                <h4><?php echo $services; ?></h4>
			                <h3>Client: <?php echo $client; ?></h3>
			
			                <?php the_content(); ?>

			                <p class="read-more-link"><strong><a href="<?php echo $link; ?>">Visit Live Site</a></strong></p>
		                </aside>
                    </article>
                    
					 	<div class="case-study-images-archive">
					 		<?php echo wp_get_attachment_image($image_1, $size); ?>
                        </div>

                          
					 <?php endwhile; //end of loop. ?> 
		</div><!-- .main-content -->
	</div><!-- #primary -->

<?php get_footer(); ?>