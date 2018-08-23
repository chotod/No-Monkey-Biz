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

            <section id="hero-img" class="banner-container">
                <img src="<?php echo the_field("banner_image"); ?>" alt="banner image">
                <div class="banner-wrapper">
                    <div class="banner-title">
                        <h2><span>About Us</span></h2>
                    </div>
                    <div class="banner-content">
                        <?php while ( have_posts() ) : the_post(); ?>
                            <?php the_content(); ?>
                        <?php endwhile; // End of the loop. ?>
                    </div>
                </div>
            </section>

            <section class="about-info-container l-container fading">
                <?php $company_features = CFS()->get( 'company_features' );
                $guarantee_content = CFS()->get( 'guarantee_content' );
                foreach( $company_features as $feature ): ?>
                    <div>
                        <div class="about-feature-icon">
                            <?php echo $feature['feature_icon'];?>
                        </div>
                        <div class="about-feature-content">
                            <p class="blue-heading"><?php echo esc_html($feature['feature_header']);?></p>
                            <p><?php echo wp_kses($feature['feature_description'], $allowed_html); ?></p>
                        </div>
                    </div>
                <?php endforeach; wp_reset_postdata(); ?>
            </section>

            <section class="guarantee-container z-container fading">
                <div class="section-title">
                    <p><span>Work Safety Guarantee</span></p>
                </div>
                <div class="guarantee-content"><?php echo wp_kses_post($guarantee_content);?></div>
            </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
