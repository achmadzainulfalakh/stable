<?php
/* helper untuk membuat short code */
/* Sumber: Wordpress */
function add_shortcode($tag, $func) {
	global $shortcode_tags;
 
	if ( '' == trim( $tag ) ) {
		$message = __( 'Invalid shortcode name: Empty name given.' );
		_doing_it_wrong( __FUNCTION__, $message, '4.4.0' );
		return;
	}
 
	if ( 0 !== preg_match( '@[<>&/\[\]\x00-\x20=]@', $tag ) ) {
		/* translators: 1: shortcode name, 2: space separated list of reserved characters */
		$message = sprintf( __( 'Invalid shortcode name: %1$s. Do not use spaces or reserved characters: %2$s' ), $tag, '& / < > [ ] =' );
		_doing_it_wrong( __FUNCTION__, $message, '4.4.0' );
		return;
	}
 
	$shortcode_tags[ $tag ] = $func;
}
// [footag foo="bar"]
function footag_func( $atts ) {
    return "foo = {
        $atts[foo]
    }";
}
/*tambahkan code ini pada __construct untuk memanggil fungsi
add_shortcode( 'footag', 'footag_func' ); */