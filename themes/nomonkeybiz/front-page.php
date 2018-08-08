<?php
/**
 *
 * @package No_Monkey_Biz
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		    <section class="banner-container">
                <img src="<?php echo the_field("banner_image"); ?>" alt="banner image">
                <div class="home-banner-content banner-title">
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php the_content(); ?>
                    <?php endwhile; // End of the loop. ?>
                </div>
                <i class="fas fa-angle-down services-arrow"></i>
            </section>

            <section class="services-container l-container">
                <div class="section-title">
                    <p><span>Our Services</span></p>
                </div>
                <div class="services-wrapper">
                    <div class="home-service-icon-wrapper commercial-wrapper">
                        <div class="commercial-icon service-icon">
                            <i class="far fa-building fa-7x"></i>
                        </div>
                        <p class="blue-heading">Commercial</p>
                        <p><?php echo the_field('commercial_info'); ?></p>
                    </div>
                    <div class="home-service-icon-wrapper residential-wrapper">
                        <div class="residential-icon service-icon">
                            <i class="fas fa-home fa-7x"></i>
                        </div>
                        <p class="blue-heading">Residential</p>
                        <p><?php echo the_field('residential_info'); ?></p>
                    </div>
                </div>
                <a href="<?php the_field('services_link'); ?>">Learn More</a>
            </section>

            <section class="about-container">
                <div class="about-wrapper">
                    <div class="home-about-info-container r-container">
                        <div class="section-title">
                            <p><span>About Us</span></p>
                        </div>
                        <div class="home-about-info-wrapper"><?php echo the_field('about_description'); ?></div>
                        <a href="<?php the_field('about_link'); ?>">Read More</a>
                    </div>
                    <div class="about-parallax">
                        <img src="<?php echo the_field("about_photo"); ?>" alt="about image">
                    </div>
                </div>
            </section>

            <section class="home-testimonial-container">
                <div>
                    <?php echo do_shortcode("[slide-anything id='131']"); ?>
                </div>
            </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
