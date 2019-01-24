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

            <section id="hero-img" class="banner-container parallax-window" data-parallax="scroll" data-image-src="<?php echo the_field("banner_image"); ?>">
                <div class="banner-wrapper">
                    <div class="banner-title">
                        <h2><span>Testimonials</span></h2>
                    </div>
                    <div class="banner-content">
                        <?php while ( have_posts() ) : the_post(); ?>
                            <?php the_content(); ?>
                        <?php endwhile; // End of the loop. ?>
                    </div>
                </div>
            </section>

            <section class="testimonials-container l-container">
                <?php $testimonials_list = CFS()->get( 'testimonials_list' );
                if(!empty($testimonials_list)) :
                    foreach( $testimonials_list as $testimonial ): ?>
                        <div class="slideIn">
                            <p class="testimonial-writeup"><span>"</span><?php echo wp_kses($testimonial['testimonial_content'], $allowed_html); ?><span>"</span></p>
                            <p class="testimonial-name"><?php echo esc_html($testimonial['testimonial_name']);?></p>
                            <p class="testimonial-credentials"><?php echo esc_html($testimonial['testimonial_credentials']);?></p>
                        </div>
                    <?php endforeach; wp_reset_postdata();
                endif; ?>
            </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
