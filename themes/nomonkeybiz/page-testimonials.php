<?php
/**
 * The template for displaying all single posts.
 *
 * @package No_Monkey_Biz
 */
$allowed_html = array('br' => array());
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

           <section class="banner-container">
                <h2>Testimonials</h2>
                <div class="banner-content">
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php the_content(); ?>
                    <?php endwhile; // End of the loop. ?>
                </div>
            </section>

            <section class="testimonials-container">
                <?php $testimonials_list = CFS()->get( 'testimonials_list' );
                if(!empty($testimonials_list)) :
                    foreach( $testimonials_list as $testimonial ): ?>
                        <div>
                            <p><span>"</span><?php echo wp_kses($testimonial['testimonial_content'], $allowed_html); ?><span>"</span></p>
                            <p><?php echo esc_html($testimonial['testimonial_name']);?></p>
                            <p><?php echo esc_html($testimonial['testimonial_credentials']);?></p>
                        </div>
                    <?php endforeach; wp_reset_postdata();
                endif; ?>
            </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
