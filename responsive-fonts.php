<?php
/*
Plugin Name: Responsive Fonts
Description: This is a plugin that will give the average wordpress user the ability to customize the size of their font responsively, changing the size on mobile, tablet and desktop in one simple place.
Version: 1.0.0
Author: Donte Henley
Author URI: https://www.dontehenley.com
License: GPLv2 or later
Text Domain: responsive-fonts
*/

if (!defined('ABSPATH')) die ('No direct access allowed');


//Setting up options in customizer
function responsive_fonts_customize_register( $wp_customize ) {

    //1. Define a new section (if desired) to the Theme Customizer
      $wp_customize->add_section( 'responsive_fonts__options', 
         array(
            'title'       => __( 'Responsive Fonts', 'responsiveFonts' ), //Visible title of section
            'priority'    => 35, //Determines what order this appears in
            'capability'  => 'edit_theme_options', //Capability needed to tweak
            'description' => __('Set font size responsively according to screen size.', 'responsiveFonts'), //Descriptive tooltip
         ) 
      );
      
      $wp_customize->add_setting( 'default_body_font', //No need to use a SERIALIZED name, as `theme_mod` settings already live under one db record
         array(
            'default'    => '16px', //Default setting/value to save
            'type'       => 'theme_mod', //Is this an 'option' or a 'theme_mod'?
            'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
            'transport'  => 'postMessage', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
         ) 
      );      
            
      $wp_customize->add_control( new WP_Customize_Control( 
         $wp_customize,
         'responsiveFonts_default_body_font',
         array(
            'label'      => __( 'Body Font Size', 'responsiveFonts' ), //Admin-visible name of the control
            'settings'   => 'default_body_font', //Which setting to load and manipulate (serialized is okay)
            'priority'   => 10, //Determines the order this control appears in for the specified section
            'section'    => 'responsive_fonts__options', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
         ) 
      ) );
      $wp_customize->add_setting( 'desktop_body_font', //No need to use a SERIALIZED name, as `theme_mod` settings already live under one db record
         array(
            'default'    => '16px', //Default setting/value to save
            'type'       => 'theme_mod', //Is this an 'option' or a 'theme_mod'?
            'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
            'transport'  => 'postMessage', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
         ) 
      );      
            
      $wp_customize->add_control( new WP_Customize_Control( 
         $wp_customize,
         'responsiveFonts_desktop_body_font',
         array(
            'label'      => __( 'Desktop Body Font Size', 'responsiveFonts' ), //Admin-visible name of the control
            'settings'   => 'desktop_body_font', //Which setting to load and manipulate (serialized is okay)
            'priority'   => 11, //Determines the order this control appears in for the specified section
            'section'    => 'responsive_fonts__options', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
         ) 
      ) );

      $wp_customize->add_setting( 'tablet_body_font', //No need to use a SERIALIZED name, as `theme_mod` settings already live under one db record
         array(
            'default'    => '16px', //Default setting/value to save
            'type'       => 'theme_mod', //Is this an 'option' or a 'theme_mod'?
            'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
            'transport'  => 'postMessage', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
         ) 
      );      
            
      $wp_customize->add_control( new WP_Customize_Control( 
         $wp_customize,
         'responsiveFonts_tablet_body_font',
         array(
            'label'      => __( 'Tablet Body Font Size', 'responsiveFonts' ), //Admin-visible name of the control
            'settings'   => 'tablet_body_font', //Which setting to load and manipulate (serialized is okay)
            'priority'   => 12, //Determines the order this control appears in for the specified section
            'section'    => 'responsive_fonts__options', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
         ) 
      ) );

      $wp_customize->add_setting( 'mobile_body_font', //No need to use a SERIALIZED name, as `theme_mod` settings already live under one db record
         array(
            'default'    => '16px', //Default setting/value to save
            'type'       => 'theme_mod', //Is this an 'option' or a 'theme_mod'?
            'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
            'transport'  => 'postMessage', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
         ) 
      );      
            
      $wp_customize->add_control( new WP_Customize_Control( 
         $wp_customize,
         'responsiveFonts_mobile_body_font',
         array(
            'label'      => __( 'Mobile Body Font Size', 'responsiveFonts' ), //Admin-visible name of the control
            'settings'   => 'mobile_body_font', //Which setting to load and manipulate (serialized is okay)
            'priority'   => 13, //Determines the order this control appears in for the specified section
            'section'    => 'responsive_fonts__options', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
         ) 
      ) );
 
}
add_action( 'customize_register', 'responsive_fonts_customize_register' );


/*
 * Code to output CSS
 */
function responsiveFonts_customize_css()
{
    $mobile_max = "576px";
    $tablet_min = "700px";
    $tablet_max = "1219.99px";
    $desktop = "1220px";
    ?>
         <style type="text/css">
             body p { font-size: <?php echo get_theme_mod('default_body_font', '16px'); ?>; }
             @media screen and (max-width: <?php echo $mobile_max; ?>) {
                body p { font-size: <?php echo get_theme_mod('mobile_body_font', '16px'); ?>; }
            }
            @media screen and (min-width: <?php echo $tablet_min; ?>) and (max-width: <?php echo $tablet_max; ?>) {
                body p { font-size: <?php echo get_theme_mod('tablet_body_font', '16px'); ?>; }
            }
            @media screen and (min-width: <?php echo $desktop; ?>) {
                body p { font-size: <?php echo get_theme_mod('desktop_body_font', '16px'); ?>; }
            }
         </style>

   
    <?php

}
add_action( 'wp_head', 'responsiveFonts_customize_css');

/*
 * Code to output JS
 
function responsiveFonts_customize_js()
{
  ?>

         <script>
( function( $, api, _ ) {
         // Add listener for the "default body font" control.
        api( 'default_body_font', function( value ) {
            value.bind( function( to ) {
                // Add background color to header and footer wrappers.
                $( 'body:not(.overlay-header)#site-header, body p' ).css( 'font-size', to );

                
            } );
        } );
    })
         </script>

    <?php

}
add_action( 'wp_footer', 'responsiveFonts_customize_js');
*/
