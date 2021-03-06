<?php 

// Add Shortcode: [dotmailer-signup]
// Use attribute: showtitle=0 if you don't want to display the default title
// Use attribute: showdesc=0 if you don't want to display the default description before the form
function dm_shortcode_signup( $atts ) {

	$a = shortcode_atts( array(
        'showtitle' => 1,
        'showdesc' => 1,
        'redirection' => NULL
    ), $atts );
	
	ob_start();
	
	the_widget ( 'DM_Widget', $instance, array( "showtitle" => $a["showtitle"], "showdesc" => $a["showdesc"], "redirection" => $a["redirection"] ) );
	
	$widget = ob_get_contents();
	
	ob_end_clean();
	
	return $widget;

}

add_shortcode( 'dotmailer-signup', 'dm_shortcode_signup' );

?>