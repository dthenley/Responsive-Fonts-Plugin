/* global wp, jQuery */

jQuery(document).ready( function($){

    var mobile_max = "576";
    var tablet_min = "700";
    var tablet_max = "1219.99";
    var desktop = "1220";

    wp.customize( 'default_body_font', function( value ) {
        value.bind( function( to ) {
            $( 'body:not(.overlay-header)#site-header, body p' ).css( 'font-size', to );                
        } );
    });
    if ($(window).width() < mobile_max) {
        wp.customize( 'mobile_body_font', function( value ) {
            value.bind( function( to ) {
                //if ($(window).width() < mobile_max) {
                        $( 'body:not(.overlay-header)#site-header, body p' ).css( 'font-size', to );  
                //}              
            } );
        });
    }
    /*
    //if (($(window).width() > tablet_min) && ($(window).width() < tablet_max) ) {
        wp.customize( 'tablet_body_font', function( value ) {
            value.bind( function( to ) {
                $( 'body:not(.overlay-header)#site-header, body p' ).css( 'font-size', to );                
            } );
        });
    //}
    //if ($(window).width() > desktop) {
        wp.customize( 'desktop_body_font', function( value ) {
            value.bind( function( to ) {
                $( 'body:not(.overlay-header)#site-header, body p' ).css( 'font-size', to );                
            } );
        });
    //}
    */   
});