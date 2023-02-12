<?php
/**
 * Partial template for content in page.php
 *
 * @package m_taylor
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<?php if (! is_front_page()) : ?>

		<div class="row">

			<div class="col-12 col-md-6 mb-5 mb-md-0">

				<header class="entry-header">

					<?php the_title( '<h1 class="entry-title sketched mb-3 mb-md-5">', '</h1>' );?>

					<?php if (!get_post_meta(get_the_ID(), 'subheading', TRUE)) :?>

					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam laoreet malesuada pharetra. Nam vel sapien nec leo dapibus tristique ornare nec lectus. Vestibulum at tempus dui. Vivamus eget imperdiet ligula. Nunc ultricies lacus eget erat rhoncus posuere.</p>
					<p>Sed ullamcorper risus nulla. In ornare leo nisl, nec egestas metus vulputate sit amet. Ut ultrices leo ut rhoncus blandit.</p>

					<?php else: ?>

						<?php echo get_post_meta(get_the_ID(), 'subheading', TRUE); ?>

					<?php endif; ?>	

					<a class="btn btn-outline-secondary px-4 py-3 my-4 fw-bold" href="/consultation">Book your <span class="fw-bold text-dark">FREE</span> consultation today!</a>

				</header><!-- .entry-header -->

			</div>

			<div class="col-12 col-md-6 image-blob pb-5" style="background-image:url('/wp-content/themes/m-taylor/img/blobs/blob-2.svg');">

				<?php if (!get_the_post_thumbnail( $post->ID, 'full', )) {

					echo getRandomImage('wp-content/themes/m-taylor/img/random-images');

				} else {

					echo get_the_post_thumbnail( $post->ID, 'full', array('class' => 'featured-image') ); 

				} ?>	

			</div>
			
		</div>

	<?php endif; ?>	


	<div class="entry-content">

		<?php the_content(); ?>

		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'm_taylor' ),
				'after'  => '</div>',
			)
		);
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php edit_post_link( __( 'Edit', 'm_taylor' ), '<span class="edit-link">', '</span>' ); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
