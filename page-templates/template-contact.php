<?php
/**
 * Template Name: Template Contact
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

<div class="wrapper template-contact-us" id="<?php echo $wrapper_id; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- ok. ?>">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

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
            <div class="iframe-holder">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1723561.4238761489!2d114.83340791681435!3d-32.463839888214494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2a329d33a1a025ed%3A0x4bf142c830bbc05e!2sWest%20Coast%20Waste%20%7C%20Skip%20Bin%20Hire!5e0!3m2!1sen!2suk!4v1687543839183!5m2!1sen!2suk" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1723561.4238761489!2d114.83340791681435!3d-32.463839888214494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2a329d33a1a025ed%3A0x4bf142c830bbc05e!2sWest%20Coast%20Waste%20%7C%20Skip%20Bin%20Hire!5e0!3m2!1sen!2suk!4v1687543839183!5m2!1sen!2suk" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1723561.4238761489!2d114.83340791681435!3d-32.463839888214494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2a329d33a1a025ed%3A0x4bf142c830bbc05e!2sWest%20Coast%20Waste%20%7C%20Skip%20Bin%20Hire!5e0!3m2!1sen!2suk!4v1687543839183!5m2!1sen!2suk" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #<?php echo $wrapper_id; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- ok. ?> -->

<?php
get_footer();
