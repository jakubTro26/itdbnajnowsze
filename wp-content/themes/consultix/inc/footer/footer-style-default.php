<?php
/**
 * Footer Default Section
 *
 * @package Consultix
 */

?>

<!-- wraper_footer -->
<footer class="wraper_footer style-one">
	<!-- wraper_footer_copyright -->
	<div class="wraper_footer_copyright">
		<div class="container l">
			<!-- row -->
			<div class="row footer_copyright a">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<!-- footer_copyright_item -->
					<div class="footer_copyright_item text-left a">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'footer',
								'fallback_cb'    => false,
							)
						);
						?>
					</div>
					<!-- footer_copyright_item -->
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<!-- footer_copyright_item -->
					<div class="footer_copyright_item text-right">
						<p>
							<?php echo wp_kses_post( 'Consultix ' ); ?>
							<?php echo date( 'Y' ); ?>
						</p>
					</div>
					<!-- footer_copyright_item -->
				</div>
			</div>
			<!-- row -->
		</div>
	</div>
	<!-- wraper_footer_copyright -->
</footer>
<!-- wraper_footer -->
