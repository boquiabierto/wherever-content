<?php 

if ( ! function_exists('register_wherever_places') ) {
	
	function register_wherever_places( $places = array() ){
		
		$helpers = new Wherever_Content\Helpers();
		$helpers->register_wherever_places( $places );	
		
	}
	
}
