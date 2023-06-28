<?php
/**
 * Template Name: Template Home
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

if ( is_front_page() ) {
	get_template_part( 'global-templates/hero' );
}

$wrapper_id = 'full-width-page-wrapper';
if ( is_page_template( 'page-templates/no-title.php' ) ) {
	$wrapper_id = 'no-title-page-wrapper';
}
?>

<div class="home-hero-banner-top">
	<div class="container">
		<div class="row align-items-end">
			<div class="col-lg-8 col-xl-7">
				<div class="skip-bin-info-holder">
				<div class="overlay-image-arrow">
					<img src="<?php echo get_template_directory_uri(); ?>/img/home-hero-arrow-up.svg" alt="Arrow Up">
				</div>
					<div class="title">
						<i class="fa fa-arrow-circle-up"></i> Skip bin instant quote
					</div>
					<div class="desc">
						Simply type your location above and you will be provided with an instant quote
					</div>
				</div>
			</div>
			<div class="col-lg-4 offset-xl-1">
				<div class="seven-day-skip-info">
				<img src="<?php echo get_template_directory_uri(); ?>/img/home-hero-right-info.svg" alt="West Coast Info" width="100%">
					<div class="title">
					7-Day skip bin hire direct to your home covering Perth to Albany
					</div>
				</div>
			</div>
		</div>


		<div class="home-hero-slider">
			<div class="swiper">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="image"></div>
						<div class="entry-content">
							<div class="icon">
								<img src="<?php echo get_template_directory_uri(); ?>/img/home-slider-truck.svg" width="200px" height="200px "alt="truck">
							</div>
							<div class="info">
								We deliver the right skip bin for your residential and commercial projects.
							</div>
							<div class="slider-nav">
								<a href="javascript:window.mySwiper.slidePrev();"><i class="fa fa-arrow-circle-left"></i></a>
								<a href="javascript:window.mySwiper.slideNext();"><i class="fa fa-arrow-circle-right"></i></a>	
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="image"></div>
						<div class="entry-content">
							<div class="icon">
								<img src="<?php echo get_template_directory_uri(); ?>/img/home-slider-truck.svg" width="200px" height="200px "alt="truck">
							</div>
							<div class="info">
								We deliver the right skip bin for your residential and commercial projects.
							</div>
							<div class="slider-nav">
								<a href="javascript:window.mySwiper.slidePrev();"><i class="fa fa-arrow-circle-left"></i></a>
								<a href="javascript:window.mySwiper.slideNext();"><i class="fa fa-arrow-circle-right"></i></a>	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>


<script>
	jQuery(document).ready(function(){
		window.mySwiper = new Swiper ('.swiper', {
			loop:true,
			autoplay: {
				delay: 8000
			}
		});
	});
</script>


<div class="home-product-info">
	<div class="home-special-offer-background-overlay">
		<div class="container">
			<div class="home-special-offer">
				<div class="discount-circle">
					<div class="abs-holder">
						<div class="save">save</div>
						<div class="percent">20%</div>
					</div>
				</div>
				<div class="entry-content">
					<div class="title">
						15 Day storm special on 9m3 skip bins
					</div>
					<div class="desc">
						BIN SERVICES - Perth, Fremantle, Kwinana, Rockingham, Mandurah, Pinjarra, Waroona, Harvey, Australind, Bunbury, Bussleton, Margaret River
					</div>
					<a href="" class="button">Find out more information</a>
				</div>
			</div>
		</div>
	</div>

	<div class="home-products-holder">
		<div class="container">
			<h2><i class="fa fa-arrow-circle-down"></i>Select the right bin for your project</h2>
			<div class="home-products">
			<?php
				$args = array(
					'post_type' => 'product',
					// 'orderby' => 'title',
					// 'order' => 'ASC',
					'posts_per_page' => 4,
					'tax_query'      => array(
						array(
							'taxonomy' => 'product_cat',
							'field'    => 'slug',
							'terms'    => 'skip'
						)
					)
				);
				$index = 0;
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post(); global $product;
				$index++;
			?>

				<div class="home-product">
					<div class="row align-items-center justify-content-center">
						<div class="col-xl-4 col-lg-4 col-md-6">
							<?php
							if($product->get_image_id()){
								?>
								
								<a href="<?php the_permalink();?>"><img src="<?php echo wp_get_attachment_image_src($product->get_image_id(), 'medium')[0];?>" alt="Product placeholder" width=100%></a>
							<?php
								}
							?>
						</div>
						<div class="col-xl-4 col-lg-6 col-md-6 ">
							<a href="<?php the_permalink();?>">
							<div class="title"><?php the_field('full_title');?></div>
							</a>
							<!-- <ul>
								<li>Garden & Household clean-up</li>
								<li>Heavy loads (dirt, concrete, bricks or rubble)</li>
								<li>Ideal for narrow alleys or small streets</li>
								<li>Building sites</li>
							</ul> -->
							<?php
							echo $product->get_short_description();
							?>
						</div>
						<div class="col-xl-4 col-lg-2 col-md-6">
							<div class="home-product-circles">
								<div class="row justify-content-around">
									<div class="col-xl-6 col-lg-12 col-md-6 col-5">
										<div class="circle">
											<div class="abs-circle-holder">
												<div class="content-holder">
													Approx x <?php the_field('approx_trailer');?> trailers
												</div>
												<div class="icon">
													<img src="<?php echo get_template_directory_uri(); ?>/img/home-trailer.svg" alt="trailer">
												</div>
											</div>	
										</div>
									</div>
									<div class="col-xl-6 col-lg-12 col-md-6 col-5">
										<div class="circle">
											<div class="abs-circle-holder">
												<div class="content-holder">
													Approx x <?php the_field('approx_bin');?> wheelie bins
												</div>
												<div class="icon">
													<img src="<?php echo get_template_directory_uri(); ?>/img/home-bin.svg" alt="bin">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="abs-holder-button">
						<a href="<?php the_permalink();?>">Get a quote for this skip bin</a>
					</div>
				</div>
			<?php endwhile; ?>
			<?php wp_reset_query(); ?>
			</div>
		</div>
	</div>

</div>


<?php
get_footer();
