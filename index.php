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
	<?php wp_head(); ?>
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
						</div>
				</nav>
			</div>
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
	 		<?php echo photo_gallery(2); ?>
	 		<div class="brand-history">
	 			<div class="brand-history-text">
	 			<h2><?php echo pll__('Brand History');?></h2>
		 			<div class="text-div">
			 			<div class="brand-icon">
									<img src="<?php bloginfo('template_url'); ?>/imgs/meatpie-logo-crop.png">
						</div>
						<div class="brand-text-1st">
			 			<p>
						<?php echo pll__("Hehongji is a Chinese brand that aims to bring Liaoning famous food - Baked meat pie into the American market. This brand is inspired by a warm and sweet story. The founder who is a wondering son misses his mother’s handmade baked meat pie, then he created the signature recipe, secret spices mixes, and the mutton soup.");?>
						</p>
						</div>
					</div>
					<div class="text-div-2">
						<div class="brand-text-2nd">
						<p>
						<?php echo pll__("We hope to reintroduce the unique cuisine of our hometown to the world: Baked meat pie and the mutton soup all in its most authentic form.");?>
						</p>
						</div>
						<div class="meat-pie">
									<img src="<?php bloginfo('template_url'); ?>/imgs/meatpie-mainpage.png">
						</div>
					</div>
				</div>
	 		</div>

	</main>

	
	<?php get_footer(); ?>
	
	</div>
	
</body>
</html>

