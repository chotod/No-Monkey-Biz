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
                <h2>Contact Us</h2>
                <div class="banner-content">
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php the_content(); ?>
                    <?php endwhile; // End of the loop. ?>
                </div>
            </section>

            <section class="contact-container">
                <div class="contact-info-wrapper">
                    <div>
                        <p>Telephone</p>
                        <p>Tel: <a href="tel:+1<?php echo the_field('contact_telephone'); ?>" class="contact-phone"><?php echo the_field('contact_telephone'); ?></a></p>
                    </div>
                    <div>
                        <p>Email</p>
                        <a href="mailto:<?php echo the_field('contact_email'); ?>" class="contact-email"><?php echo the_field('contact_email'); ?></a>
                    </div>
                    <div>
                        <p>Opening Hours</p>
                        <p><?php echo the_field('contact_hours'); ?></p>
                    </div>
                    <div>
                        <?php echo the_field('contact_description'); ?>
                    </div>
                </div>
                <div class="contact-form-wrapper">
                    <?php echo the_field('contact_form'); ?>
                </div>
            </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
