<?php
/**
 * Sidebar - hero setup
 *
 * @package m_taylor
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<?php if ( is_active_sidebar( 'hero' ) ) : ?>

	<!-- ******************* The Hero Widget Area ******************* -->

	<div id="carouselExampleControls" class="carousel slide carousel-fade" data-bs-ride="carousel">

		<div class="carousel-inner" role="listbox">

			<?php dynamic_sidebar( 'hero' ); ?>

		</div>

		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>

		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>

	</div>

	<script>
	jQuery( ".carousel-item" ).first().addClass( "active" );
	</script>

	<?php
endif;
