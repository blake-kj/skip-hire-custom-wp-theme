<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

	<?php
	// Check if the post has a thumbnail
	if (has_post_thumbnail()) {
	// Get the post's thumbnail ID
	$thumbnail_id = get_post_thumbnail_id();
	// Get the image source (src) location
	$thumbnail_src = wp_get_attachment_image_src($thumbnail_id, 'full');
	} else {
		// if post has no thumbnail then set fallback image
		$thumbnail_src[0] = 'http://uk-skips.test/wp-content/uploads/2023/06/page-placeholder.png';
	}
	?>
	<a href="<?php the_permalink(); ?>"><img class="blog-thumbnail" src="<?php echo $thumbnail_src[0]; ?>" alt=""></a>
	

	</header><!-- .entry-header -->



	<div class="entry-content">

		<?php
		the_title(
			sprintf( '<h2 class="entry-title"><a href="%s" class="blog-post-title" rel="bookmark">', esc_url( get_permalink() ) ),
			'</a></h2>'
		);
		?>

		<?php
		the_post_summary();

		?>
	<div class="entry-metadata mt-3 mb-2">
		<a class="button" href="<?php the_permalink(); ?>">Read More</a>
		<div class="blog-post-date">
		<i class="fa fa-calendar"></i>
			<?php echo get_the_date('d/m/Y');?>
		</div>
	</div>
		
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
