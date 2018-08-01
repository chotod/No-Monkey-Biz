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
                <h2>Our Services</h2>
                <div class="banner-content">
                    <?php $service_banner_features = CFS()->get( 'service_banner_features' );
                    if(!empty($service_banner_features)) :
                        foreach( $service_banner_features as $service_feature ): ?>
                            <div>
                                <div class="service-feature-icon">
                                    <?php echo $service_feature['service_banner_icon_link'];?>
                                </div>
                                <div class="feature-content">
                                    <p><?php echo esc_html($service_feature['service_banner_feature_content']);?></p>
                                </div>
                            </div>
                        <?php endforeach; wp_reset_postdata();
                    endif; ?>
                </div>
            </section>

            <section class="services-container">
                <?php $services_list = CFS()->get( 'services_list' );
                if(!empty($services_list)) :
                    foreach( $services_list as $service ): ?>
                        <div>
                            <div class="service-image-wrapper">
                                <img src="<?php echo $service['service_image']; ?>" alt="<?php echo esc_html($service['service_title']);?> Photo"/>
                            </div>
                            <div class="service-content">
                                <p><?php echo esc_html($service['service_title']);?></p>
                                <p><?php echo wp_kses($service['service_description'], $allowed_html); ?></p>
                            </div>
                        </div>
                    <?php endforeach; wp_reset_postdata();
                endif; ?>
            </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
