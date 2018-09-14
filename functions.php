<?php

// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';


if (function_exists('add_theme_support')) {
  add_theme_support('post-thumbnails');
}

// function register_my_menu() {
//   register_nav_menu('header-menu',__( 'Main Menu' ));
// }
// add_action( 'init', 'register_my_menu' );

register_nav_menus( array(
	'primary' => __( 'Primary Menu', 'Barhems' ),
) );

register_nav_menus( array(
	'footer' => __( 'Footer Menu', 'Barhems' ),
) );


load_theme_textdomain( 'Barhems',get_template_directory() . '/languages' );

/**
 * Filter the except length to 150 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 150;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

//CSS for the job board
add_action('job_bm_action_before_single_job', 'job_bm_action_before_single_job', 10);
add_action('job_bm_action_after_single_job', 'job_bm_action_after_single_job', 10);

function job_bm_action_before_single_job() {
  echo '<div class="content-wrapper ">';
}

function job_bm_action_after_single_job() {
  echo '</div>';
}



//Home Page Localization
pll_register_string( 'News', 'News' );
pll_register_string( 'Manchu Express', 'Manchu Express' );
pll_register_string( 'Go Back', 'Go Back' );
pll_register_string( 'Read more »', 'Read more »' );
pll_register_string( 'Projects', 'Projects' );
pll_register_string( 'Contact', 'Contact' );
pll_register_string( 'Home Page', 'Navigation' );
pll_register_string( 'Home Page', 'Home' );
pll_register_string( 'Home Page', 'Career' );
pll_register_string( 'Home Page', 'Contact Us' );
pll_register_string( 'Home Page', 'Address:' );
pll_register_string( 'Home Page', 'Phone:' );
pll_register_string( 'Home Page', 'Email:' );
pll_register_string( 'Home Page', 'Hours of Operation:' );
pll_register_string( 'Home Page', '9:00am - 6:00pm (Mon-Fri)' );
pll_register_string( 'Home Page', 'Linkedin' );
pll_register_string( 'Home Page', 'Brand History' );
pll_register_string( 'Home Page', 'Hehongji is a Chinese brand that aims to bring Liaoning famous food - Baked meat pie into the American market. This brand is inspired by a warm and sweet story. The founder who is a wondering son misses his mother’s handmade baked meat pie, then he created the signature recipe, secret spices mixes, and the mutton soup.' );
pll_register_string( 'Home Page', 'We hope to reintroduce the unique cuisine of our hometown to the world: Baked meat pie and the mutton soup all in its most authentic form.' );

/**
 * Remove related products output
 */
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
?>


