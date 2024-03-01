<?php
/**
 * GoTrip: Block Patterns
 *
 * @since GoTrip 1.0
 */

/**
 * Registers pattern categories.
 *
 * @since GoTrip 1.0
 *
 * @return void
 */
if( !class_exists( 'GoTrip_Register_Pattern_Category' ) ){
	class GoTrip_Register_Pattern_Category {

	    protected $block_pattern_categories;

	    public function __construct( $block_pattern_categories = array() ) {
	        add_action( 'init', array( $this, 'register_pattern_categories' ) );
	        $this->block_pattern_categories = $block_pattern_categories;
	    }

	    public function register_pattern_categories() {
	        foreach ( $this->block_pattern_categories as $name => $properties ) {
	            if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
	                register_block_pattern_category( $name, $properties );
	            }
	        }
	    }
	}
}

// Example usage: Create an instance of the class and provide block pattern categories
$categories = array(
    'gotrip' => array(
        'label' => __( 'GoTrip', 'gotrip' )
    ),
);

new GoTrip_Register_Pattern_Category( $categories );

