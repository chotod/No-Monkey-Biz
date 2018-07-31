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
                <h2>About Us</h2>
                <div class="banner-content">
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php the_content(); ?>
                    <?php endwhile; // End of the loop. ?>
                </div>
            </section>

            <section class="about-info-container">
                <?php $company_features = CFS()->get( 'company_features' );
                $guarantee_content = CFS()->get( 'guarantee_content' );
                foreach( $company_features as $feature ): ?>
                    <div>
                        <div class="feature-icon">
                            <?php echo $feature['feature_icon'];?>
                        </div>
                        <div class="feature-content">
                            <p><?php echo esc_html($feature['feature_header']);?></p>
                            <p><?php echo wp_kses($feature['feature_description'], $allowed_html); ?></p>
                        </div>
                    </div>
                <?php endforeach; wp_reset_postdata(); ?>
            </section>

            <section class="guarantee-container">
                <h3>Work Safe Guarantee</h3>
                <p><?php echo wp_kses_post($guarantee_content);?></p>
            </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
