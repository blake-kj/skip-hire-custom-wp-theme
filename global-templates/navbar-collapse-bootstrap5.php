<?php
/**
 * Header Navbar (bootstrap5)
 *
 * @package Understrap
 * @since 1.1.0
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<div class="top-header">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-5 col-md-6">
				<div class="mobile-holder-logo">
					<a href="/">
						<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo">
					</a>
				</div>
			</div>
			<div class="col-lg-7 col-md-6">
				<div class="top-header-contact">
					<a href="tel:1800927831"><i class="fa fa-phone"></i>1800 927 831</a>
					<a href="mailto:info@westcoastwaste.com.au" class="top-header-contact-email"><i class="fa fa-envelope-o"></i>info@westcoastwaste.com.au</a>
					<div class="mobile-menu-dropdown">
						<button
							class="navbar-toggler"
							type="button"
							data-bs-toggle="collapse"
							data-bs-target="#navbarNavDropdown"
							aria-controls="navbarNavDropdown"
							aria-expanded="false"
							aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>"
						>
							<span>Menu</span><i class="fa fa-bars"></i>
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<nav id="main-nav" class="navbar navbar-expand-xl navbar-dark" aria-labelledby="main-nav-label">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="search-input-holder">
			<div class="title">Quote:</div>
			<input placeholder="Type your suburb here" type="text" id="header-product-autocomplete-input" onKeyUp="headerProductKeyUp(this)">
			<ul id="header-product-autocomplete-list">

			</ul>
		</div>


		<!-- Your site branding in the menu -->
		<?php get_template_part( 'global-templates/navbar-branding' ); ?>

		<div class="mobile-menu-dropdown">
		<button
			class="navbar-toggler"
			type="button"
			data-bs-toggle="collapse"
			data-bs-target="#navbarNavDropdown"
			aria-controls="navbarNavDropdown"
			aria-expanded="false"
			aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>"
		>
			<span>Menu</span><i class="fa fa-bars"></i>
		</button>
		</div>

		<!-- The WordPress Menu goes here -->
		<?php
		wp_nav_menu(
			array(
				'theme_location'  => 'primary',
				'container_class' => 'collapse navbar-collapse',
				'container_id'    => 'navbarNavDropdown',
				'menu_class'      => 'navbar-nav ms-auto',
				'fallback_cb'     => '',
				'menu_id'         => 'main-menu',
				'depth'           => 2,
				'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
			)
		);
		?>

	</div><!-- .container(-fluid) -->

</nav><!-- #main-nav -->
