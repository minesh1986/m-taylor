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

<svg id="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 100" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(238, 248, 244, 1)" offset="0%"></stop><stop stop-color="rgba(238, 248, 244, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,50L48,56.7C96,63,192,77,288,71.7C384,67,480,43,576,43.3C672,43,768,67,864,70C960,73,1056,57,1152,46.7C1248,37,1344,33,1440,26.7C1536,20,1632,10,1728,18.3C1824,27,1920,53,2016,65C2112,77,2208,73,2304,61.7C2400,50,2496,30,2592,31.7C2688,33,2784,57,2880,65C2976,73,3072,67,3168,63.3C3264,60,3360,60,3456,55C3552,50,3648,40,3744,40C3840,40,3936,50,4032,55C4128,60,4224,60,4320,63.3C4416,67,4512,73,4608,70C4704,67,4800,53,4896,55C4992,57,5088,73,5184,78.3C5280,83,5376,77,5472,65C5568,53,5664,37,5760,30C5856,23,5952,27,6048,38.3C6144,50,6240,70,6336,68.3C6432,67,6528,43,6624,43.3C6720,43,6816,67,6864,78.3L6912,90L6912,100L6864,100C6816,100,6720,100,6624,100C6528,100,6432,100,6336,100C6240,100,6144,100,6048,100C5952,100,5856,100,5760,100C5664,100,5568,100,5472,100C5376,100,5280,100,5184,100C5088,100,4992,100,4896,100C4800,100,4704,100,4608,100C4512,100,4416,100,4320,100C4224,100,4128,100,4032,100C3936,100,3840,100,3744,100C3648,100,3552,100,3456,100C3360,100,3264,100,3168,100C3072,100,2976,100,2880,100C2784,100,2688,100,2592,100C2496,100,2400,100,2304,100C2208,100,2112,100,2016,100C1920,100,1824,100,1728,100C1632,100,1536,100,1440,100C1344,100,1248,100,1152,100C1056,100,960,100,864,100C768,100,672,100,576,100C480,100,384,100,288,100C192,100,96,100,48,100L0,100Z"></path></svg>

<div class="bg-primary" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

	<h3 class="text-center text-muted">Sign up to our <span class="underlined">Newsletter</span> to keep up to date with Promotional and Development Blogs</h3>

	<div class="my-4">
		<form class="row justify-content-center g-3">
			<div class="col-auto">
				<label for="newsletter-email" class="visually-hidden">Your email address</label>
				<input type="email" class="form-control" id="newsletter-email" placeholder="Your email address" required>
			</div>
			<div class="col-auto">
				<button type="submit" class="btn btn-outline-secondary mb-3 text-dark">Sign me up!</button>
			</div>
		</form>
	</div>

		<div class="row">

			<div class="col-md-12">

				<footer id="colophon" class="site-footer">

					<div class="row pt-5 border-top">

						<div class="col-12 col-md-6 col-lg-3 mb-3 text-muted">
							<h5 class="mb-3 text-dark">Speak with us today</h5>
							<p>
								<svg width="24" height="24" fill="none" stroke="#48b774" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
									<path d="M3.586 3.586A2 2 0 0 0 3 5v1c0 8.284 6.716 15 15 15h1a2 2 0 0 0 2-2v-3.279a1 1 0 0 0-.684-.949l-4.493-1.498a1 1 0 0 0-1.21.502l-1.13 2.257a11.042 11.042 0 0 1-5.516-5.516l2.257-1.13a1 1 0 0 0 .502-1.21L9.228 3.684A1 1 0 0 0 8.28 3H5a2 2 0 0 0-1.414.586Z"></path>
								</svg>
								<a href="">01621 555 584</a>
							<p>
							<p>
								<svg width="24" height="24" fill="none" stroke="#48b774" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
									<path d="M19 19H5a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2Z"></path>
									<path d="m3 8 7.89 5.26a2 2 0 0 0 2.22 0L21 8"></path>
								</svg>
								<a href="">info@mtaylor.co.uk</a>
							</p>
							<p>7 Burlington Court,<br>
							Basildon,<br>
							Essex,<br>
							SS13 1QY<p>  
						</div>

						<div class="col-12 col-md-6 col-lg-3 mb-3">
						<h5>Useful Links</h5>
							<?php wp_nav_menu(array('theme_location'  => 'useful-links',)); ?>
						</div>

						<div class="col-12 col-md-6 col-lg-3 mb-3">
						<h5>Development Services</h5>
							<?php wp_nav_menu(array('theme_location'  => 'our-services',)); ?>
						</div>

						<div class="col-12 col-md-6 col-lg-3 mb-3">
						<h5>Hosting & Maintenance</h5>
						<ul class="nav flex-column">
							<?php wp_nav_menu(array('theme_location'  => 'hosting-maintenance',)); ?>
						</div>

					</div>

					<div class="site-info">

						<div class="py-3 my-4 border-top text-center">

							<div class="col-12">
								<span class="mb-3 mb-md-0">© <?php echo date("Y"); ?> M Taylor Freelance | <a href="/privacy-policy">Privacy Policy</a> | <a href="/cookie-policy">Cookie Policy</a></span>
							</div>

							<ul class="my-4 justify-content-center list-unstyled d-flex">
								<li class="ms-3">
									<a href="#">
										<svg width="24" height="24" fill="#48b774" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" d="M22.5 12.063c0-5.799-4.702-10.5-10.5-10.5s-10.5 4.7-10.5 10.5c0 5.24 3.84 9.584 8.86 10.373v-7.337H7.692v-3.037h2.666V9.75c0-2.63 1.568-4.085 3.966-4.085 1.15 0 2.351.205 2.351.205v2.584h-1.324c-1.304 0-1.712.81-1.712 1.64v1.97h2.912l-.465 3.036H13.64v7.337c5.02-.788 8.859-5.131 8.859-10.373Z" clip-rule="evenodd"></path>
										</svg>
									</a>
								</li>
								<li class="ms-3">
									<a href="#">
										<svg width="24" height="24" fill="#48b774" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
											<path d="M23.25 5.133a9.46 9.46 0 0 1-2.65.717 4.57 4.57 0 0 0 2.03-2.512c-.908.53-1.9.903-2.932 1.101A4.647 4.647 0 0 0 16.327 3c-2.55 0-4.615 2.034-4.615 4.542a4.37 4.37 0 0 0 .119 1.036A13.158 13.158 0 0 1 2.315 3.83a4.485 4.485 0 0 0-.627 2.283c0 1.574.821 2.967 2.062 3.782a4.57 4.57 0 0 1-2.1-.567v.056c0 2.204 1.595 4.036 3.704 4.454a4.752 4.752 0 0 1-1.216.159c-.291 0-.582-.028-.868-.085.587 1.805 2.294 3.118 4.315 3.155a9.356 9.356 0 0 1-6.835 1.88A13.063 13.063 0 0 0 7.816 21c8.501 0 13.146-6.923 13.146-12.928 0-.197-.006-.394-.015-.586a9.304 9.304 0 0 0 2.303-2.353Z"></path>
										</svg>
									</a>
								</li>
								<li class="ms-3">
									<a href="#">
										<svg width="24" height="24" fill="#48b774" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
											<path d="M16.375 3.25a4.388 4.388 0 0 1 4.375 4.375v8.75a4.388 4.388 0 0 1-4.375 4.375h-8.75a4.389 4.389 0 0 1-4.375-4.375v-8.75A4.388 4.388 0 0 1 7.625 3.25h8.75Zm0-1.75h-8.75C4.256 1.5 1.5 4.256 1.5 7.625v8.75c0 3.369 2.756 6.125 6.125 6.125h8.75c3.369 0 6.125-2.756 6.125-6.125v-8.75c0-3.369-2.756-6.125-6.125-6.125Z"></path>
											<path d="M17.688 7.625a1.313 1.313 0 1 1 0-2.625 1.313 1.313 0 0 1 0 2.625Z"></path>
											<path d="M12 8.5a3.5 3.5 0 1 1 0 7 3.5 3.5 0 0 1 0-7Zm0-1.75a5.25 5.25 0 1 0 0 10.5 5.25 5.25 0 0 0 0-10.5Z"></path>
										</svg>
									</a>
								</li>
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

