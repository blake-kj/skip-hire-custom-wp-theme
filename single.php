<?php
/**
 * The template for displaying all single posts
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="post-header-holder"
<?php if ( has_post_thumbnail() ) { ?> style="background-image:url(<?php echo get_the_post_thumbnail_url();?>);" <?php } ?>>
	<div class="container">
	<?php if ( ! is_page_template( 'page-templates/no-title.php' ) ) {
			the_title(
				'<header class="entry-header"><h1 class="entry-title">',
				'</h1></header><!-- .entry-header -->'
			);
		} ?>
	</div>
</div>
<div class="post-header-metadata">
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
			<i class="fa fa-calendar"></i>  Post Date: 
			<?php echo get_the_date('d/m/Y');?>
			</div>
			<div class="col-lg-9">
			<i class="fa fa-bars"></i> Post Category: 
			<?php echo get_the_category()[0]->cat_name; ?>
			</div>
		</div>
	</div>
</div>

<div class="wrapper" id="single-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">
			<div class="row">
					<div class="col-lg-8">
						<main class="site-main" id="main">
						<?php
					while ( have_posts() ) {
						the_post();
						get_template_part( 'loop-templates/content', 'single' );
						

					}
					?>

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
				</div>
			<main class="site-main" id="main">

			</main>

		</div><!-- .row -->

		<div class="post-navigation-options">
			<?php understrap_post_nav(); ?>
		</div>

	</div><!-- #content -->

</div><!-- #single-wrapper -->

<?php
get_footer();
