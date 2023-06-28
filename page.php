<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>

<div class="page-header-holder">
	<div class="container">
	<?php if ( ! is_page_template( 'page-templates/no-title.php' ) ) {
			the_title(
				'<header class="entry-header"><h1 class="entry-title">',
				'</h1></header><!-- .entry-header -->'
			);
		} ?>
	</div>
</div>

<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<div class="row">
				<div class="col-lg-8">
				<main class="site-main" id="main">
					<?php
					while ( have_posts() ) {
						the_post();
						get_template_part( 'loop-templates/content', 'page' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) {
							comments_template();
						}
					}
					?>

					</main>
				</div>
				<div class="col-lg-4">
					<div class="right-sidebar-promotion">
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
							<a href="" class="button outline">FIND OUT MORE</a>
						</div>
					</div>

				</div>
			</div>

			



		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php
get_footer();
