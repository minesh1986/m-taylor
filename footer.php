<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package m_taylor
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'm_taylor_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer id="colophon" class="site-footer">

					<div class="row pt-5 mt-5 border-top">

						<div class="col mb-3">
							<h5 class="mb-3">Speak with us today</h5>
							<p><svg width="26" height="26" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
							<path d="M18.119 14.702 14 15.5c-2.781-1.396-4.5-3-5.5-5.5l.77-4.13L7.815 2H4.064c-1.128 0-2.016.932-1.847 2.047.42 2.783 1.66 7.83 5.283 11.453 3.806 3.805 9.286 5.456 12.302 6.113 1.165.253 2.198-.655 2.198-1.848v-3.584l-3.881-1.479Z"></path>
							</svg> <a href="">01621 555 584</a><p>
							<p>Email: <a href="">info@mtaylor.co.uk</a></p>
							<p>7 Burlington Court,<br>
							Basildon,<br>
							Essex,<br>
							SS13 1QY<p>  
						</div>

						<div class="col mb-3">
					
						</div>

						<div class="col mb-3">
						<h5>Section</h5>
						<ul class="nav flex-column">
							<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
							<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
							<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
							<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
							<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
						</ul>
						</div>

						<div class="col mb-3">
						<h5>Section</h5>
						<ul class="nav flex-column">
							<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
							<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
							<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
							<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
							<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
						</ul>
						</div>

						<div class="col mb-3">
						<h5>Section</h5>
						<ul class="nav flex-column">
							<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
							<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
							<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
							<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
							<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
						</ul>
						</div>

					</div>

					<div class="site-info">

						<div class="py-3 my-4 border-top">

							<div class="col-12 text-center">
								<span class="mb-3 mb-md-0 text-muted">© 2022 M Taylor Freelance | Privacy policy | Cookie policy</span>
							</div>

							<ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
								<li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
								<li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
								<li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
							</ul>
						</div>

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

