<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package travel_joy
 * @since 1.0.0
 */

/**
 * Hook before starting the head tag. Has doctype.
 *
 * @hooked travel_joy_doctype.
 */
do_action( 'travel_joy_doctype' );
?>
<head>
	<?php

		/**
		 * Hook for head tag.
		 *
		 * @hooked travel_joy_before_wp_head
		 */
		do_action( 'travel_joy_before_wp_head' );
		wp_head();
	?>
</head>

<button id="myBtn" title="Lên đầu trang"><img src='<?php echo get_template_directory_uri() ?>/image/top.png' title='lên đầu trang' width='40px'/></button>
<script>
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
 
if (document.body.scrollTop > 600 || document.documentElement.scrollTop > 600) {
document.getElementById("myBtn").style.display = "block";
} else {
document.getElementById("myBtn").style.display = "none";
}
}
 
document.getElementById('myBtn').addEventListener("click", function(){
document.body.scrollTop = 0;
document.documentElement.scrollTop = 0;
});
</script>

<body <?php body_class(); ?>>
	<?php

	/**
	 * Hook after body open.
	 */
	do_action( 'wp_body_open' );

	/**
	 * Hook travel_joy_before_header_starts.
	 *
	 * @hooked travel_joy_main_wrapper
	 */
	do_action( 'travel_joy_before_header_starts' );

	/**
	 * Hook travel_joy_header.
	 *
	 * @hooked travel_joy_main_header
	 */
	do_action( 'travel_joy_header' );
