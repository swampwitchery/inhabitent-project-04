<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package inhabitent_theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function inhabitent_theme_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'inhabitent_theme_body_classes' );


function inhabitent_login_logo() {
	$logo_url = get_template_directory_uri().'/images/logos/inhabitent-logo-text-dark.svg';

	echo '<style> 
	.login h1 a {
		background-image: url(' . $logo_url . ');
		background-repeat: no-repeat;
		background-size: 300px 53px;
		padding-left: 230px;
	}

	.login .button.button-primary {
		background-color: #248A83;
	}
		</style>';
}
add_action( 'login_head', 'inhabitent_login_logo' );

function inhabitent_login_url() {
return get_site_url();
}
add_filter('login_headerurl', 'inhabitent_login_url');

