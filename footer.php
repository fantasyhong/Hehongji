<div class="footer navbar-fixed-bottom">
<footer>
		<div class="footer-container">
			<div class="footer-widge">
				<div class="widge-wrapper">
					<div class="widge-title">
						<h4><?php echo pll__('Navigation');?></h4>
					</div>
					<div>
						<?php 

								$defaults = array(
								 'theme_location'	=> 'footer'
								);

								wp_nav_menu( $defaults );

							?>
					</div>
				</div>
			</div>
			<div class="footer-widge">
				<div class="widge-wrapper">
					<div class="widge-title">
						<h4><?php echo pll__('Career');?></h4>
					</div>
					<div>
						<?php echo pll__('Linkedin');?>
					</div>
				</div>
			</div>
			<div class="footer-widge">
				<div class="widge-wrapper">
					<div class="widge-title">
						<h4><?php echo pll__('Contact Us');?></h4>
					</div>
					<div>
						<strong><?php echo pll__('Address:');?></strong>
							<span style="font-size: 14px;"> <a href="https://maps.google.com/?daddr=133-38+Sanford+Ave,+Flushing,+NY+11355/" target="_blank">133-38 Sanford Ave Suite PHD
							Flushing, NY 11355</span>
						</a>
					</div>
					<div>
						<strong><?php echo pll__('Phone:');?></strong>
							<span style="font-size: 14px;"><a href="tel:1(917) 285-2791">(917) - 285 - 2791</span>
						</a>
					</div>
					<!-- <div>
						<strong><?php echo pll__('Email:');?></strong>
							<span style="font-size: 14px;color: #cbcbcd;"><a href="mailto:contact@barhems.com">contact@barhems.com</span>
						</a>
					</div> -->
					<div>
						<strong><?php echo pll__('Hours of Operation:');?></strong>
							<span style="font-size: 14px;color: #cbcbcd;"><?php echo pll__('9:00am - 6:00pm (Mon-Fri)');?></span>
						</a>
					</div>
				</div>
			</div>
			<div class="footer-widge">
				<div class="widge-wrapper" style="align-items: center;">
					<img class="footer-logo" src="<?php bloginfo('template_url'); ?>/imgs/logo-rec.png">
				</div>
			</div>
		</div>
	</footer>

<div class="copyrights">
		<div class="copyrights-container">
			<p>
				All Rights Reserved ©2018 Manchu Express.
			</p>
		</div>
</div>

</div>
 <?php wp_footer(); ?>
