/* global wp, jQuery */

jQuery(document).ready( function($){

    wp.customize( 'default_body_font', function( value ) {
        value.bind( function( to ) {
            $("body").get(0).style.setProperty("--RFdefaultBodyFontSize", to);
        } );
    });
  
    wp.customize( 'desktop_body_font', function( value ) {
        value.bind( function( to ) {
            $("body").get(0).style.setProperty("--RFdesktopBodyFontSize", to);
        } );
    });
    wp.customize( 'tablet_body_font', function( value ) {
        value.bind( function( to ) {
            $("body").get(0).style.setProperty("--RFtabletBodyFontSize", to);
        } );
    });
    wp.customize( 'mobile_body_font', function( value ) {
        value.bind( function( to ) {
            $("body").get(0).style.setProperty("--RFmobileBodyFontSize", to);
        } );
    });
    /*
     * H1
     
    wp.customize( 'default_h1_font', function( value ) {
        value.bind( function( to ) {
            $("body").get(0).style.setProperty("--RFdefaultH1FontSize", to);
        } );
    });
    
    wp.customize( 'desktop_h1_font', function( value ) {
        value.bind( function( to ) {
            $("body").get(0).style.setProperty("--RFdesktopH1FontSize", to);
        } );
    });
    wp.customize( 'tablet_h1_font', function( value ) {
        value.bind( function( to ) {
            $("body").get(0).style.setProperty("--RFtabletH1FontSize", to);
        } );
    });
    wp.customize( 'mobile_h1_font', function( value ) {
        value.bind( function( to ) {
            $("body").get(0).style.setProperty("--RFmobileH1FontSize", to);
        } );
    });
    */

});