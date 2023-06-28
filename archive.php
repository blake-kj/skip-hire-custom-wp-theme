<?php
/**
 * The template for displaying archive pages
 *
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="archive-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<div class="col-lg-8">
				<main class="site-main" id="main">
					<?php
					if ( have_posts() ) {
					?>

						<div class="row">
							<?php
							// Start the loop.
							while ( have_posts() ) {
							?>
							<div class="col-xl-6 single-blog-loop-post">
								<?php
								the_post();
								get_template_part( 'loop-templates/content', get_post_format() );
								?>

							</div>
							<?php
							}
								} else {
									get_template_part( 'loop-templates/content', 'none' );
								}
							?>
						</div>

							

							


				</main>


			</div>

			<div class="col-lg-4">
				<div class="right-sidebar-blog-categories">
					<h3>Blog Categories</h3>
					<?php
					// Retrieve the list of categories excluding "Uncategorized"
					$categories = get_categories(array('exclude' => '1,5')); // Exclude category IDs 1 and 5

					if ( ! empty( $categories ) ) {
						echo '<ul>';

						// Loop through each category
						foreach ( $categories as $category ) {
							// Generate the category link
							$category_link = get_category_link( $category->term_id );

							// Output the category name and link
							echo '<li><a href="' . esc_url( $category_link ) . '">' . esc_html( $category->name ) . '</a></li>';
						}

						echo '</ul>';
					}
					?>
				</div>
			</div>

		</div><!-- .row -->
		<div class="post-navigation-options">
			<?php
				// Display the pagination component.
				understrap_pagination();
			?>
		</div>

	</div><!-- #content -->

</div><!-- #archive-wrapper -->

<?php
get_footer();
