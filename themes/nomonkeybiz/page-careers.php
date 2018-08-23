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
                        <h2><span>Careers</span></h2>
                    </div>
                    <div class="banner-content">
                        <?php while ( have_posts() ) : the_post(); ?>
                            <?php the_content(); ?>
                        <?php endwhile; // End of the loop. ?>
                    </div>
                </div>
            </section>

            <section class="careers-container l-container fading">
                <p class="application-description"><?php echo the_field('application_description'); ?></p>
                <div class="application-form-wrapper"><?php echo the_field('application_form'); ?></div>
            </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
