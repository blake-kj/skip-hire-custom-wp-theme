<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="footer-we-accept">
		<div class="container">
			<div class="title-holder">
				<h2>We accept the following waste</h2>
				<div class="button-holder top">
					<a href="#" class="button outline">Read the full list of acceptable waste</a>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-6">
					<img src="<?php echo get_template_directory_uri(); ?>/img/home-we-accept-1.svg" alt="We Accept Waste" width="100%">
					<div class="title pt-3 pb-5">Commercial Waste</div>
				</div>
				<div class="col-lg-3 col-6">
				<img src="<?php echo get_template_directory_uri(); ?>/img/home-we-accept-2.svg" alt="We Accept Waste" width="100%">
					<div class="title pt-3 pb-5">Building Waste</div>
				</div>
				<div class="col-lg-3 col-6">
				<img src="<?php echo get_template_directory_uri(); ?>/img/home-we-accept-3.svg" alt="We Accept Waste" width="100%">
					<div class="title pt-3 pb-5">Green Waste</div>
				</div>
				<div class="col-lg-3 col-6">
				<img src="<?php echo get_template_directory_uri(); ?>/img/home-we-accept-4.svg" alt="We Accept Waste" width="100%">
					<div class="title pt-3 pb-5">Household Waste</div>
				</div>
			</div>
			<div class="button-holder bottom">
					<a href="#" class="button outline">Read the full list of acceptable waste</a>
				</div>
		</div>
	</div>

<div class="wrapper" id="wrapper-footer">
    
    <div class="container footer-testimonial">
        <div class="stars">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
        </div>
        <div class="quote">
            "Amazing customer service and very good price will be definitely getting another one through these guys when needed so much help thank you"
        </div>
        <div class="author">
            Damon, Facebook review
        </div>
    </div>
    <div class="container footer-contact-info">
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="title">What to know more?</div>
                <div class="desc">To find out more about our services please contact us using any of the methods below, or alternatively fill in the contact form and a representative will be in touch as soon as possible.</div>
                <div class="contact-info">
                    <div class="phone"><i class="fa fa-phone"></i>Call today 0800 927 831</div>
                    <div class="email"><i class="fa fa-envelope-o"></i>Email info@westcoastwaste.co.uk</div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="contact-form-holder">
                    <?php echo do_shortcode('[contact-form-7 id="23" title="Footer Contact Form"]');?>
                </div>
            </div>
        </div>
    </div>

    <div class="copyright">
        <div class="container">
            © Copyright West Coast Waste 2020 <span>//</span> <a href="">Terms & Conditions</a> <span>//</span> Website by <a href="#">Joppa Webs</a>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

</div><!-- #wrapper-footer -->

<?php // Closing div#page from header.php. ?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>

