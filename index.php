<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?php echo pll__('Manchu Express');?></title>
	<link rel="icon" href="<?php bloginfo('template_url'); ?>/imgs/logo-rec.png" type="image/x-icon">
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/imgs/logo-rec.png" type="image/x-icon">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/homepage.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/vendor/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/vendor/owl.theme.default.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
	<!-- <script src="<?php bloginfo('template_url'); ?>/js/home.js"></script> -->
</head>

<?php echo '<body class="'.join(' ', get_body_class()).'">'.PHP_EOL; ?>
	<div class="wrapper d-flex flex-column" style="height: 100%">
		<header>
			<div class="nav-extended">
				<nav class="navbar navbar-expand-lg navbar-light">
					<div class ="container">
					<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<img src="<?php bloginfo('template_url'); ?>/imgs/hehongji.png" style="margin-right:6px; width: 40px;">
						<span><?php echo pll__('Manchu Express');?></span>
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
							<?php 

								$defaults = array(
								 'theme_location'	=> 'primary',
							    'depth'				=> 2, // 1 = with dropdowns, 0 = no dropdowns.
								'container'			=> 'div',
								'container_class'	=> 'collapse navbar-collapse',
								'container_id'		=> 'navbarSupportedContent',
								'menu_class'		=> 'navbar-nav ml-auto',
							    'fallback_cb'		=> 'WP_Bootstrap_Navwalker::fallback',
							    'walker'			=> new WP_Bootstrap_Navwalker()

								);

								wp_nav_menu( $defaults );

							?>
							<!-- <li class="nav-item dropdown " style="cursor: pointer;">
								<div class="nav-link dropdown-toggle" to='/' id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Languages
								</div>
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
									<a href="<?php bloginfo('template_url'); ?>/barhems_ch/index.html" style="text-decoration: none;">
										<div class="dropdown-item" style="text-align: center;">中文</div>
									</a>
								</div>
							</li> -->
					
					</div>
				</nav>
			</div>
	<!-- <div class="banner" style="background-image: url('<?php bloginfo('template_url'); ?>/imgs/BigBanner1.jpg');
			background-repeat: no-repeat;
			background-size: cover;
			background-position: 50%;
			min-height: 455px;
			background-attachment: fixed !important;
			">	
			<div class="banner-slider">
				<h3><?php echo pll__( 'Professional Commercial Real Estate Management' );?></h3>
				<P class="banner-text">
					<?php echo pll__( 'We have a professional real estate developing and management team, providing our clients with personalized financial services as well as private assets management. We are dedicated to developing an online shopping platform focusing on servicing potential clients in the real estate industry.');?>

				</P>
			</div>
		</div> -->
	</header>
	<main class="flex-fill">
	<div class="main-header">
				<div class="fs-row">
					<div class="fs-cell typography">
						<!-- <h1><?php echo esc_html(the_title() ); ?></h1> -->
					</div>
				</div>
			</div>
	 <div class="main">
	 		<!-- <img src='<?php bloginfo('template_url'); ?>/imgs/mainpage.jpg'> -->
	 		<?php echo do_shortcode('[metaslider id="88"]'); ?>
	 </div>

	</main>

	
	<?php get_footer(); ?>
	
	</div>
	
</body>
</html>

