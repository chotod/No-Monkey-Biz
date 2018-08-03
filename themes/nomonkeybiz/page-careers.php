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
                <h2>Careers</h2>
                <div class="banner-content">
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php the_content(); ?>
                    <?php endwhile; // End of the loop. ?>
                </div>
            </section>

            <section class="careers-container">
                <?php echo the_field('application_description'); ?>
                <?php echo the_field('application_form'); ?>
            </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>