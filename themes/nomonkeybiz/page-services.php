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
                <img src="<?php echo the_field("banner_image"); ?>" alt="banner image">
                <div class="banner-wrapper">
                    <div class="banner-title">
                        <h2><span>Services</span></h2>
                    </div>
                    <div class="banner-content services-banner-content">
                        <?php $service_banner_features = CFS()->get( 'service_banner_features' );
                        if(!empty($service_banner_features)) :
                            foreach( $service_banner_features as $service_feature ): ?>
                                <div>
                                    <div class="service-feature-icon">
                                        <?php echo $service_feature['service_banner_icon_link'];?>
                                    </div>
                                    <div class="service-feature-content">
                                        <p><?php echo esc_html($service_feature['service_banner_feature_content']);?></p>
                                    </div>
                                </div>
                            <?php endforeach; wp_reset_postdata();
                        endif; ?>
                    </div><!-- .banner-content -->
                </div><!-- .banner-wrapper -->
            </section>

            <section class="services-container l-container">
                <?php $services_list = CFS()->get( 'services_list' );
                if(!empty($services_list)) :
                    foreach( $services_list as $service ): ?>
                        <div>
                            <div class="service-image-wrapper">
                                <img src="<?php echo $service['service_image']; ?>" alt="<?php echo esc_html($service['service_title']);?> Photo"/>
                            </div>
                            <div class="service-content">
                                <p class="blue-heading"><?php echo esc_html($service['service_title']);?></p>
                                <div class="service-writeup">
                                    <p><?php echo wp_kses($service['service_description'], $allowed_html); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; wp_reset_postdata();
                endif; ?>
            </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
