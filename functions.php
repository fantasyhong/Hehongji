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
pll_register_string( 'Home Page', 'Professional Commercial Real Estate Management' );
pll_register_string( 'Home Page', 'We have a professional real estate developing and management team, providing our clients with personalized financial services as well as private assets management. We are dedicated to developing an online shopping platform focusing on servicing potential clients in the real estate industry.');
pll_register_string( 'Home Page', 'Primary Projects' );
pll_register_string( 'Home Page', "Focusing on real estate and capital investment, Barhems has 3 major projects in prime locations in NYC. We plan to develop a Barhems Mall with the luxury rental on the currently Macy's location in the heart of Flushing. In addition, we have selected an ideal building in the harbor area of Brooklyn to develop a Barhems Market servicing real estate developers who need construction materials as well as furniture and appliances. Meanwhile, we plan to open a grand SPA resort In Flushing, featuring state-of-the-art designs, high-end amenities, private SPA services." );
pll_register_string( 'Home Page','Project Name:');
pll_register_string( 'Home Page','Investment Size:');
pll_register_string( 'Home Page','Founded in New York, Barhams Corporation has a wide range of resources, providing services for America commercial real estate investment, private equity funding, business development & management and online shopping platform.');
pll_register_string( 'Home Page','Commercial Real Estate ');
pll_register_string( 'Home Page','If you are looking for a loyal partner in Commercial Real Estate related field, Barhems Corporation will be your best choice.');
pll_register_string( 'Home Page','Shopping with us ');
pll_register_string( 'Home Page',"Our online shopping platform brings convenience to your daily life, and it's our pleasure to provide anything you are looking for. We guarantee your 100% satisfaction.");
pll_register_string( 'Home Page','Financial Consulting');
pll_register_string( 'Home Page',"Our financial team will provide you with dedicated financial planning, assets management, and investment portfolio optimization.");
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
?>