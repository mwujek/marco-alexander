
		</div>


		<!-- footer -->
		<footer id="footer">

			
				<div class="newsletter-wrap">

					<div class="newsletter-title-wrap">
						<div class="topwave"></div>
						<!-- <h3><?php echo $newsletter_title; ?></h3> -->
						<h3>Become a Viber</h3>
						<div class="botwave"></div>
					</div>

					<div class="newsletter-description-wrap">

						<p>Sign up to download Friction EP</p>
						<?php echo do_shortcode('[mc4wp_form id="2201"]'); ?>


					</div>



				</div>




			<?php
			$footer_area = get_iron_option('footer-area_id');
			if ( is_active_sidebar( $footer_area ) ) :
				$widget_area = get_iron_option('widget_areas', $footer_area);
			?>
						<div class="footer__widgets widget-area widget-area--<?php echo esc_attr( $footer_area ); if ( $widget_area['sidebar_grid'] > 1 ) echo ' grid-cols grid-cols--' . $widget_area['sidebar_grid']; ?>">
			<?php
				do_action('before_ironband_footer_dynamic_sidebar');

				dynamic_sidebar( $footer_area );

				do_action('after_ironband_footer_dynamic_sidebar');
			?>
						</div>
			<?php
			endif;
			?>

			<?php
			$social_media = (bool)get_iron_option('footer_social_media_enabled');
			?>
			<?php if($social_media): ?>
			<div class="footer-block share">
				<!-- links-box -->
				<div class="links-box">
				<?php get_template_part('parts/networks'); ?>
				</div>
			</div>
			<?php endif; ?>

			<!-- footer-row -->
			
		</footer>

	</div>
<?php wp_footer(); ?>
<script defer type="text/javascript" src="/wp-content/themes/lush/custom-js/marco-script.js"></script>
</body>
</html>