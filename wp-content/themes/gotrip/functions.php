<?php
/**
 * Theme GoTrip functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package GoTrip
 * @since 1.0
 */

if ( ! function_exists( 'gotrip_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since 1.0
	 *
	 * @return void
	 */
	function gotrip_support() {

		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Gutenify Base, use a find and replace
		 * to change 'gotrip' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'gotrip', get_template_directory() . '/languages' );

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'gotrip_support' );

if ( ! function_exists( 'gotrip_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since 1.0
	 *
	 * @return void
	 */

	function gotrip_styles() {
		// Enqueue theme stylesheet.
		wp_enqueue_style(
			'gotrip-style',
			get_template_directory_uri() . '/style.css',
			array(),
			filemtime( get_theme_file_path( 'style.css' ) )
		);

		wp_enqueue_style( 'dashicons' );
	}

endif;

add_action( 'wp_enqueue_scripts', 'gotrip_styles' );

if ( ! function_exists( 'admin_styles' ) ) :

	/**
	 * Enqueue Admin styles.
	 *
	 * @since 1.0
	 *
	 * @return void
	 */

	function admin_styles() {
		// Enqueue Admin stylesheet.
		wp_enqueue_style(
			'gotrip-theme-info-style',
			get_template_directory_uri() . '/assets/css/theme-info.css',
			array(),
			gotrip_file_version( '/assets/css/theme-info.css' )
		);

	}

endif;

add_action( 'admin_enqueue_scripts', 'admin_styles' );

/**
 * Register the required plugins for this theme.
 *
 * In this example, we register plugins:
 * - one included with the TGMPA library
 * - two from an external source, one from an arbitrary source, one from a GitHub repository
 * - two from the .org repo, where one demonstrates the use of the `is_callable` argument
 *
 * The variables passed to the `tgmpa()` function should be:
 * - an array of plugin arrays;
 * - optionally a configuration array.
 * If you are not changing anything in the configuration array, you can remove the array and remove the
 * variable from the function call: `tgmpa( $plugins );`.
 * In that case, the TGMPA default settings will be used.
 *
 * This function is hooked into `tgmpa_register`, which is fired on the WP `init` action on priority 10.
 */
function gotrip_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(
		// wp-travel.
		array(
			'name' 		=> 'WP Travel', // Plugin Name, translation not required.
			'slug' 		=> 'wp-travel',
			'required' 	=> false,
		),
		array(
			'name' 		=> 'Wp Travel Gutenberg Blocks', // Plugin Name, translation not required.
			'slug' 		=> 'wp-travel-blocks',
			'required' 	=> false,
		),
		array(
			'name'      => 'WooCommerce',
			'slug'      => 'woocommerce',
			'required'  => false,
		),
		array(
			'name'      => 'WC Booster',
			'slug'      => 'wc-booster',
			'required'  => false,
		)
	);

	if ( ! function_exists( 'RT_Easy_Builder\rt_freemius' ) ) {
	    $plugins[] = array(
	        'name'      => esc_html__( 'RT Easy Builder', 'gotrip' ),
	        'slug'      => 'rt-easy-builder-advanced-addons-for-elementor',
	        'required'  => false,
	    );
	}

	/*
	 * Array of configuration settings. Amend each line as needed.
	 *
	 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
	 * strings available, please help us make TGMPA even better by giving us access to these translations or by
	 * sending in a pull-request with .po file(s) with the translations.
	 *
	 * Only uncomment the strings in the config array if you want to customize the strings.
	 */
	$config = array(
		'id'           => 'gotrip',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.
	);

	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'gotrip_register_required_plugins' );


/**
* Set the default image if none exists.
*
* @param string $html              The post thumbnail HTML.
* @param int    $post_id           The post ID.
* @param int    $post_thumbnail_id The post thumbnail ID.
* @return html
*/

function gotrip_fallback_post_thumbnail_html( $html, $post_id, $post_thumbnail_id ) {
	if ( empty( $html ) ) {
		$html = '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/default-image.jpg" loading="lazy" alt="' . get_the_title( $post_id ) . '" class="default-img"/>';
	}

	return $html;
}

add_filter( 'post_thumbnail_html', 'gotrip_fallback_post_thumbnail_html' , 5, 3 );

function gotrip_excerpt_length( $length ){ 
    $excerpt_length = 20;
    if ( is_admin() ) return $length;
    return $excerpt_length;
}
add_filter( 'excerpt_length','gotrip_excerpt_length' );

/**
 * Get file version with respect to file modified date.
 */
function gotrip_file_version( $file_path ) {
	return gmdate('ymd-Gis', filemtime( get_theme_file_path( $file_path ) ) );
}

function gotrip_dequeue_wp_travel_pro_css() {
    if (is_single()) {
        wp_dequeue_style('wp-travel-travel-guide-front-style');
    }
}
add_action('wp_enqueue_scripts', 'gotrip_dequeue_wp_travel_pro_css', 999);


// Load TGMPA
require get_template_directory() . '/inc/class-tgm-plugin-activation.php';
require get_template_directory() . '/inc/pattern-category.php';
require get_template_directory() . '/class/admin-info.php';