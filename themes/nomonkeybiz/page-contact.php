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
                        <h2><span>Contact</span></h2>
                    </div>
                    <div class="banner-content">
                        <?php while ( have_posts() ) : the_post(); ?>
                            <?php the_content(); ?>
                        <?php endwhile; // End of the loop. ?>
                    </div>
                </div>
            </section>

            <section class="contact-container l-container fading">
                <p class="blue-heading"><?php echo the_field('contact_header'); ?></p>
                <div class="contact-info-container">
                    <div class="contact-info-wrapper">
                        <div>
                            <p class="contact-label">Telephone</p>
                            <p>Tel: <a href="tel:+1<?php echo the_field('contact_telephone'); ?>" class="contact-phone"><?php echo the_field('contact_telephone'); ?></a></p>
                        </div>
                        <div>
                            <p class="contact-label">Email</p>
                            <a href="mailto:<?php echo the_field('contact_email'); ?>" class="contact-email"><?php echo the_field('contact_email'); ?></a>
                        </div>
                        <div>
                            <p class="contact-label">Opening Hours</p>
                            <p><?php echo the_field('contact_hours'); ?></p>
                        </div>
                    </div>
                    <div class="contact-description-wrapper">
                        <?php echo the_field('contact_description'); ?>
                    </div>
                </div>
                <div class="contact-form-container">
                    <?php echo the_field('contact_form'); ?>
                </div>
            </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
