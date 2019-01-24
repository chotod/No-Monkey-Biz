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

            <section id="hero-img" class="banner-container parallax-window" data-parallax="scroll" data-image-src="<?php echo the_field("banner_image"); ?>">
                <div class="banner-wrapper">
                    <div class="banner-title">
                        <h2><span>Gallery</span></h2>
                    </div>
                    <div class="banner-content">
                        <?php while ( have_posts() ) : the_post(); ?>
                            <?php the_content(); ?>
                        <?php endwhile; // End of the loop. ?>
                    </div>
                </div>
            </section>

            <section class="gallery-container l-container">
                <?php echo the_field('gallery_photos'); ?>
            </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
