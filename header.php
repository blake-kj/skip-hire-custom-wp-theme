<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$bootstrap_version = get_theme_mod( 'understrap_bootstrap_version', 'bootstrap4' );
$navbar_type       = get_theme_mod( 'understrap_navbar_type', 'collapse' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Just+Another+Hand&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<header id="wrapper-navbar">

		<?php get_template_part( 'global-templates/navbar', $navbar_type . '-' . $bootstrap_version ); ?>

	</header><!-- #wrapper-navbar -->

	<div id="quick-select-bins">
		<div class="container">
			<div class="row">
				<div class="steps col-lg-7">
					<div class="step one active">
						<i class="fa fa-arrow-circle-up"></i>
						<div class="title">Step 1: <strong>Suburb Selected, Bunbury</strong></div>
						<i class="fa fa-check-circle"></i>
					</div>
					<div class="step two">
						<i class="fa fa-arrow-circle-down"></i>
						<div class="title">Step 2: <strong>Select the skip that suits your needs</strong></div>
						<i class="fa fa-check-circle"></i>
					</div>
				</div>
				<div class="price-info col-lg-4 offset-lg-1">
				All prices below reflect the price you will pay to hire a skip-bin from West Coast Waste for 6 days, delivered to your door.
				</div>
			</div>

			<div class="row">
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
					while ( $loop->have_posts() ) : $loop->the_post(); 
					
					global $product;
					$index++;
					$variation_html = "";

					if ( $product->is_type( 'variable' ) ) {

						$available_variations = $product->get_available_variations();
						foreach ( $available_variations as $variations ) {
							$attribute_depo = $variations['attributes']['attribute_depo'];
							$attribute_distance = $variations['attributes']['attribute_distance'];
							$variation_id = $variations['variation_id'];
							$price_html = $variations['price_html'];
							$variation_html .= "<div 
													class='depo-price'
													data-productid='" . $product->get_id() . "'
													data-variationid='$variation_id'
													data-depo='$attribute_depo'
													data-distance='$attribute_distance' >";
							$variation_html .= $price_html;
							$variation_html .= "</div>";

						}
					}
				?>
				<div class="col-lg-6 col-xl-3 mb-5">
					<a class="quick-select-bin"
					<?php if ( empty( $available_variations ) && false !== $available_variations ) : ?>
						 href=" <?php the_permalink();?> " 
					<?php else : ?>
						onClick="headerProductToCart(this);" href=""
					<?php endif ?>
					data-productid="<?php echo $product->get_id(); ?>"
					data-distance=""
					data-depo=""
					>
						<div class="title">
						<?php the_title();?>
						</div>
						<img src="<?php echo wp_get_attachment_image_src($product->get_image_id(), 'medium')[0];?>" alt="Product placeholder" width=100%>
						<div class="price">
						<?php if ( empty( $available_variations ) && false !== $available_variations ) : ?>
							POA
						<?php else : ?>
						<?php echo $variation_html; ?>
						<?php endif ?>
						</div>
						<div class="seven-day">Up to 7 Day Hire inc. GST</div>
						<div class="row icon-holders">
							<div class="col-6">
								<div class="icon-holder">
								<div class="icon">
									<img src="<?php echo get_template_directory_uri(); ?>/img/home-trailer.svg" alt="trailer">
								</div>
								<div class="content-holder">
									x <?php the_field('approx_trailer');?>
								</div>
								</div>
							</div>
							<div class="col-6">
								<div class="icon-holder">
								<div class="icon">
									<img src="<?php echo get_template_directory_uri(); ?>/img/home-bin.svg" alt="bin">
								</div>
								<div class="content-holder">
									x <?php the_field('approx_bin');?>
								</div>
								</div>
							</div>
						</div>
						<div class="abs-holder-button">
							Order this skip bin
						</div>
					</a>
				</div>
			<?php endwhile; ?>
			<?php wp_reset_query(); ?>
			</div>
		</div>
	</div>