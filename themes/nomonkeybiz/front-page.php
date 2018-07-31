<?php
/**
 *
 * @package No_Monkey_Biz
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		    <?php while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; // End of the loop. ?>

            <section class="services-container">
                <div class="section-title">
                    <h2>Our Services</h2>
                </div>
                <div class="services-wrapper">
                    <div class="commercial-wrapper">
                        <div class="commercial-icon service-icon">
                            <i class="far fa-building"></i>
                        </div>
                        <p>Commercial</p>
                        <p><?php echo the_field('commercial_info'); ?></p>
                    </div>
                    <div class="residential-wrapper">
                        <div class="residential-icon service-icon">
                            <i class="fas fa-home"></i>
                        </div>
                        <p>Residential</p>
                        <p><?php echo the_field('residential_info'); ?></p>
                    </div>
                    <a href="<?php the_field('services_link'); ?>">Learn More</a>
                </div>
            </section>

            <section class="about-container">
                <div class="about-wrapper">
                    <div class="about-info-container">
                        <h2>About Us</h2>
                        <div><?php echo the_field('about_description'); ?></div>
                        <a href="<?php the_field('about_link'); ?>">Read More</a>
                    </div>
                    <div class="about-parallax"></div>
                </div>
            </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
