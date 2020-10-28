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
            'default'    => '', //Default setting/value to save
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
            'default'    => '', //Default setting/value to save
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
            'default'    => '', //Default setting/value to save
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
            'default'    => '', //Default setting/value to save
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
      //1. Define a new section (if desired) to the Theme Customizer
      $wp_customize->add_section( 'responsive_fonts__options', 
         array(
            'title'       => __( 'Responsive Fonts', 'responsiveFonts' ), //Visible title of section
            'priority'    => 35, //Determines what order this appears in
            'capability'  => 'edit_theme_options', //Capability needed to tweak
            'description' => __('Set font size responsively according to screen size.', 'responsiveFonts'), //Descriptive tooltip
         ) 
      );
      
      $wp_customize->add_setting( 'default_h1_font', //No need to use a SERIALIZED name, as `theme_mod` settings already live under one db record
         array(
            'default'    => '', //Default setting/value to save
            'type'       => 'theme_mod', //Is this an 'option' or a 'theme_mod'?
            'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
            'transport'  => 'postMessage', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
         ) 
      );      
            
      $wp_customize->add_control( new WP_Customize_Control( 
         $wp_customize,
         'responsiveFonts_default_h1_font',
         array(
            'label'      => __( 'H1 Font Size', 'responsiveFonts' ), //Admin-visible name of the control
            'settings'   => 'default_h1_font', //Which setting to load and manipulate (serialized is okay)
            'priority'   => 14, //Determines the order this control appears in for the specified section
            'section'    => 'responsive_fonts__options', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
         ) 
      ) );
      $wp_customize->add_setting( 'desktop_h1_font', //No need to use a SERIALIZED name, as `theme_mod` settings already live under one db record
         array(
            'default'    => '', //Default setting/value to save
            'type'       => 'theme_mod', //Is this an 'option' or a 'theme_mod'?
            'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
            'transport'  => 'postMessage', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
         ) 
      );      
            
      $wp_customize->add_control( new WP_Customize_Control( 
         $wp_customize,
         'responsiveFonts_desktop_h1_font',
         array(
            'label'      => __( 'Desktop H1 Font Size', 'responsiveFonts' ), //Admin-visible name of the control
            'settings'   => 'desktop_h1_font', //Which setting to load and manipulate (serialized is okay)
            'priority'   => 15, //Determines the order this control appears in for the specified section
            'section'    => 'responsive_fonts__options', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
         ) 
      ) );

      $wp_customize->add_setting( 'tablet_h1_font', //No need to use a SERIALIZED name, as `theme_mod` settings already live under one db record
         array(
            'default'    => '', //Default setting/value to save
            'type'       => 'theme_mod', //Is this an 'option' or a 'theme_mod'?
            'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
            'transport'  => 'postMessage', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
         ) 
      );      
            
      $wp_customize->add_control( new WP_Customize_Control( 
         $wp_customize,
         'responsiveFonts_tablet_h1_font',
         array(
            'label'      => __( 'Tablet H1 Font Size', 'responsiveFonts' ), //Admin-visible name of the control
            'settings'   => 'tablet_h1_font', //Which setting to load and manipulate (serialized is okay)
            'priority'   => 16, //Determines the order this control appears in for the specified section
            'section'    => 'responsive_fonts__options', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
         ) 
      ) );

      $wp_customize->add_setting( 'mobile_h1_font', //No need to use a SERIALIZED name, as `theme_mod` settings already live under one db record
         array(
            'default'    => '', //Default setting/value to save
            'type'       => 'theme_mod', //Is this an 'option' or a 'theme_mod'?
            'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
            'transport'  => 'postMessage', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
         ) 
      );      
            
      $wp_customize->add_control( new WP_Customize_Control( 
         $wp_customize,
         'responsiveFonts_mobile_h1_font',
         array(
            'label'      => __( 'Mobile H1 Font Size', 'responsiveFonts' ), //Admin-visible name of the control
            'settings'   => 'mobile_h1_font', //Which setting to load and manipulate (serialized is okay)
            'priority'   => 17, //Determines the order this control appears in for the specified section
            'section'    => 'responsive_fonts__options', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
         ) 
      ) );
      //1. Define a new section (if desired) to the Theme Customizer
      $wp_customize->add_section( 'responsive_fonts__options', 
         array(
            'title'       => __( 'Responsive Fonts', 'responsiveFonts' ), //Visible title of section
            'priority'    => 35, //Determines what order this appears in
            'capability'  => 'edit_theme_options', //Capability needed to tweak
            'description' => __('Set font size responsively according to screen size.', 'responsiveFonts'), //Descriptive tooltip
         ) 
      );
      
      $wp_customize->add_setting( 'default_h2_font', //No need to use a SERIALIZED name, as `theme_mod` settings already live under one db record
         array(
            'default'    => '', //Default setting/value to save
            'type'       => 'theme_mod', //Is this an 'option' or a 'theme_mod'?
            'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
            'transport'  => 'postMessage', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
         ) 
      );      
            
      $wp_customize->add_control( new WP_Customize_Control( 
         $wp_customize,
         'responsiveFonts_default_h2_font',
         array(
            'label'      => __( 'H2 Font Size', 'responsiveFonts' ), //Admin-visible name of the control
            'settings'   => 'default_h2_font', //Which setting to load and manipulate (serialized is okay)
            'priority'   => 18, //Determines the order this control appears in for the specified section
            'section'    => 'responsive_fonts__options', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
         ) 
      ) );
      $wp_customize->add_setting( 'desktop_h2_font', //No need to use a SERIALIZED name, as `theme_mod` settings already live under one db record
         array(
            'default'    => '', //Default setting/value to save
            'type'       => 'theme_mod', //Is this an 'option' or a 'theme_mod'?
            'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
            'transport'  => 'postMessage', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
         ) 
      );      
            
      $wp_customize->add_control( new WP_Customize_Control( 
         $wp_customize,
         'responsiveFonts_desktop_h2_font',
         array(
            'label'      => __( 'Desktop H2 Font Size', 'responsiveFonts' ), //Admin-visible name of the control
            'settings'   => 'desktop_h2_font', //Which setting to load and manipulate (serialized is okay)
            'priority'   => 19, //Determines the order this control appears in for the specified section
            'section'    => 'responsive_fonts__options', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
         ) 
      ) );

      $wp_customize->add_setting( 'tablet_h2_font', //No need to use a SERIALIZED name, as `theme_mod` settings already live under one db record
         array(
            'default'    => '', //Default setting/value to save
            'type'       => 'theme_mod', //Is this an 'option' or a 'theme_mod'?
            'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
            'transport'  => 'postMessage', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
         ) 
      );      
            
      $wp_customize->add_control( new WP_Customize_Control( 
         $wp_customize,
         'responsiveFonts_tablet_h2_font',
         array(
            'label'      => __( 'Tablet H2 Font Size', 'responsiveFonts' ), //Admin-visible name of the control
            'settings'   => 'tablet_h2_font', //Which setting to load and manipulate (serialized is okay)
            'priority'   => 20, //Determines the order this control appears in for the specified section
            'section'    => 'responsive_fonts__options', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
         ) 
      ) );

      $wp_customize->add_setting( 'mobile_h2_font', //No need to use a SERIALIZED name, as `theme_mod` settings already live under one db record
         array(
            'default'    => '', //Default setting/value to save
            'type'       => 'theme_mod', //Is this an 'option' or a 'theme_mod'?
            'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
            'transport'  => 'postMessage', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
         ) 
      );      
            
      $wp_customize->add_control( new WP_Customize_Control( 
         $wp_customize,
         'responsiveFonts_mobile_h2_font',
         array(
            'label'      => __( 'Mobile H2 Font Size', 'responsiveFonts' ), //Admin-visible name of the control
            'settings'   => 'mobile_h2_font', //Which setting to load and manipulate (serialized is okay)
            'priority'   => 21, //Determines the order this control appears in for the specified section
            'section'    => 'responsive_fonts__options', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
         ) 
      ) );
      //1. Define a new section (if desired) to the Theme Customizer
      $wp_customize->add_section( 'responsive_fonts__options', 
         array(
            'title'       => __( 'Responsive Fonts', 'responsiveFonts' ), //Visible title of section
            'priority'    => 35, //Determines what order this appears in
            'capability'  => 'edit_theme_options', //Capability needed to tweak
            'description' => __('Set font size responsively according to screen size.', 'responsiveFonts'), //Descriptive tooltip
         ) 
      );
      
      $wp_customize->add_setting( 'default_h3_font', //No need to use a SERIALIZED name, as `theme_mod` settings already live under one db record
         array(
            'default'    => '', //Default setting/value to save
            'type'       => 'theme_mod', //Is this an 'option' or a 'theme_mod'?
            'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
            'transport'  => 'postMessage', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
         ) 
      );      
            
      $wp_customize->add_control( new WP_Customize_Control( 
         $wp_customize,
         'responsiveFonts_default_h3_font',
         array(
            'label'      => __( 'H3 Font Size', 'responsiveFonts' ), //Admin-visible name of the control
            'settings'   => 'default_h3_font', //Which setting to load and manipulate (serialized is okay)
            'priority'   => 22, //Determines the order this control appears in for the specified section
            'section'    => 'responsive_fonts__options', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
         ) 
      ) );
      $wp_customize->add_setting( 'desktop_h3_font', //No need to use a SERIALIZED name, as `theme_mod` settings already live under one db record
         array(
            'default'    => '', //Default setting/value to save
            'type'       => 'theme_mod', //Is this an 'option' or a 'theme_mod'?
            'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
            'transport'  => 'postMessage', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
         ) 
      );      
            
      $wp_customize->add_control( new WP_Customize_Control( 
         $wp_customize,
         'responsiveFonts_desktop_h3_font',
         array(
            'label'      => __( 'Desktop H3 Font Size', 'responsiveFonts' ), //Admin-visible name of the control
            'settings'   => 'desktop_h3_font', //Which setting to load and manipulate (serialized is okay)
            'priority'   => 23, //Determines the order this control appears in for the specified section
            'section'    => 'responsive_fonts__options', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
         ) 
      ) );

      $wp_customize->add_setting( 'tablet_h3_font', //No need to use a SERIALIZED name, as `theme_mod` settings already live under one db record
         array(
            'default'    => '', //Default setting/value to save
            'type'       => 'theme_mod', //Is this an 'option' or a 'theme_mod'?
            'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
            'transport'  => 'postMessage', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
         ) 
      );      
            
      $wp_customize->add_control( new WP_Customize_Control( 
         $wp_customize,
         'responsiveFonts_tablet_h3_font',
         array(
            'label'      => __( 'Tablet H3 Font Size', 'responsiveFonts' ), //Admin-visible name of the control
            'settings'   => 'tablet_h3_font', //Which setting to load and manipulate (serialized is okay)
            'priority'   => 24, //Determines the order this control appears in for the specified section
            'section'    => 'responsive_fonts__options', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
         ) 
      ) );

      $wp_customize->add_setting( 'mobile_h3_font', //No need to use a SERIALIZED name, as `theme_mod` settings already live under one db record
         array(
            'default'    => '', //Default setting/value to save
            'type'       => 'theme_mod', //Is this an 'option' or a 'theme_mod'?
            'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
            'transport'  => 'postMessage', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
         ) 
      );      
            
      $wp_customize->add_control( new WP_Customize_Control( 
         $wp_customize,
         'responsiveFonts_mobile_h3_font',
         array(
            'label'      => __( 'Mobile H3 Font Size', 'responsiveFonts' ), //Admin-visible name of the control
            'settings'   => 'mobile_h3_font', //Which setting to load and manipulate (serialized is okay)
            'priority'   => 25, //Determines the order this control appears in for the specified section
            'section'    => 'responsive_fonts__options', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
         ) 
      ) );
      //1. Define a new section (if desired) to the Theme Customizer
      $wp_customize->add_section( 'responsive_fonts__options', 
         array(
            'title'       => __( 'Responsive Fonts', 'responsiveFonts' ), //Visible title of section
            'priority'    => 35, //Determines what order this appears in
            'capability'  => 'edit_theme_options', //Capability needed to tweak
            'description' => __('Set font size responsively according to screen size.', 'responsiveFonts'), //Descriptive tooltip
         ) 
      );
      
      $wp_customize->add_setting( 'default_h4_font', //No need to use a SERIALIZED name, as `theme_mod` settings already live under one db record
         array(
            'default'    => '', //Default setting/value to save
            'type'       => 'theme_mod', //Is this an 'option' or a 'theme_mod'?
            'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
            'transport'  => 'postMessage', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
         ) 
      );      
            
      $wp_customize->add_control( new WP_Customize_Control( 
         $wp_customize,
         'responsiveFonts_default_h4_font',
         array(
            'label'      => __( 'H4 Font Size', 'responsiveFonts' ), //Admin-visible name of the control
            'settings'   => 'default_h4_font', //Which setting to load and manipulate (serialized is okay)
            'priority'   => 26, //Determines the order this control appears in for the specified section
            'section'    => 'responsive_fonts__options', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
         ) 
      ) );
      $wp_customize->add_setting( 'desktop_h4_font', //No need to use a SERIALIZED name, as `theme_mod` settings already live under one db record
         array(
            'default'    => '', //Default setting/value to save
            'type'       => 'theme_mod', //Is this an 'option' or a 'theme_mod'?
            'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
            'transport'  => 'postMessage', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
         ) 
      );      
            
      $wp_customize->add_control( new WP_Customize_Control( 
         $wp_customize,
         'responsiveFonts_desktop_h4_font',
         array(
            'label'      => __( 'Desktop H4 Font Size', 'responsiveFonts' ), //Admin-visible name of the control
            'settings'   => 'desktop_h4_font', //Which setting to load and manipulate (serialized is okay)
            'priority'   => 27, //Determines the order this control appears in for the specified section
            'section'    => 'responsive_fonts__options', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
         ) 
      ) );

      $wp_customize->add_setting( 'tablet_h4_font', //No need to use a SERIALIZED name, as `theme_mod` settings already live under one db record
         array(
            'default'    => '', //Default setting/value to save
            'type'       => 'theme_mod', //Is this an 'option' or a 'theme_mod'?
            'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
            'transport'  => 'postMessage', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
         ) 
      );      
            
      $wp_customize->add_control( new WP_Customize_Control( 
         $wp_customize,
         'responsiveFonts_tablet_h4_font',
         array(
            'label'      => __( 'Tablet H4 Font Size', 'responsiveFonts' ), //Admin-visible name of the control
            'settings'   => 'tablet_h4_font', //Which setting to load and manipulate (serialized is okay)
            'priority'   => 28, //Determines the order this control appears in for the specified section
            'section'    => 'responsive_fonts__options', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
         ) 
      ) );

      $wp_customize->add_setting( 'mobile_h4_font', //No need to use a SERIALIZED name, as `theme_mod` settings already live under one db record
         array(
            'default'    => '', //Default setting/value to save
            'type'       => 'theme_mod', //Is this an 'option' or a 'theme_mod'?
            'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
            'transport'  => 'postMessage', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
         ) 
      );      
            
      $wp_customize->add_control( new WP_Customize_Control( 
         $wp_customize,
         'responsiveFonts_mobile_h4_font',
         array(
            'label'      => __( 'Mobile H4 Font Size', 'responsiveFonts' ), //Admin-visible name of the control
            'settings'   => 'mobile_h4_font', //Which setting to load and manipulate (serialized is okay)
            'priority'   => 29, //Determines the order this control appears in for the specified section
            'section'    => 'responsive_fonts__options', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
         ) 
      ) );
      //1. Define a new section (if desired) to the Theme Customizer
      $wp_customize->add_section( 'responsive_fonts__options', 
         array(
            'title'       => __( 'Responsive Fonts', 'responsiveFonts' ), //Visible title of section
            'priority'    => 35, //Determines what order this appears in
            'capability'  => 'edit_theme_options', //Capability needed to tweak
            'description' => __('Set font size responsively according to screen size.', 'responsiveFonts'), //Descriptive tooltip
         ) 
      );
      
      $wp_customize->add_setting( 'default_h5_font', //No need to use a SERIALIZED name, as `theme_mod` settings already live under one db record
         array(
            'default'    => '', //Default setting/value to save
            'type'       => 'theme_mod', //Is this an 'option' or a 'theme_mod'?
            'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
            'transport'  => 'postMessage', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
         ) 
      );      
            
      $wp_customize->add_control( new WP_Customize_Control( 
         $wp_customize,
         'responsiveFonts_default_h5_font',
         array(
            'label'      => __( 'H5 Font Size', 'responsiveFonts' ), //Admin-visible name of the control
            'settings'   => 'default_h5_font', //Which setting to load and manipulate (serialized is okay)
            'priority'   => 30, //Determines the order this control appears in for the specified section
            'section'    => 'responsive_fonts__options', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
         ) 
      ) );
      $wp_customize->add_setting( 'desktop_h5_font', //No need to use a SERIALIZED name, as `theme_mod` settings already live under one db record
         array(
            'default'    => '', //Default setting/value to save
            'type'       => 'theme_mod', //Is this an 'option' or a 'theme_mod'?
            'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
            'transport'  => 'postMessage', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
         ) 
      );      
            
      $wp_customize->add_control( new WP_Customize_Control( 
         $wp_customize,
         'responsiveFonts_desktop_h5_font',
         array(
            'label'      => __( 'Desktop H4 Font Size', 'responsiveFonts' ), //Admin-visible name of the control
            'settings'   => 'desktop_h5_font', //Which setting to load and manipulate (serialized is okay)
            'priority'   => 31, //Determines the order this control appears in for the specified section
            'section'    => 'responsive_fonts__options', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
         ) 
      ) );

      $wp_customize->add_setting( 'tablet_h5_font', //No need to use a SERIALIZED name, as `theme_mod` settings already live under one db record
         array(
            'default'    => '', //Default setting/value to save
            'type'       => 'theme_mod', //Is this an 'option' or a 'theme_mod'?
            'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
            'transport'  => 'postMessage', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
         ) 
      );      
            
      $wp_customize->add_control( new WP_Customize_Control( 
         $wp_customize,
         'responsiveFonts_tablet_h5_font',
         array(
            'label'      => __( 'Tablet H5 Font Size', 'responsiveFonts' ), //Admin-visible name of the control
            'settings'   => 'tablet_h5_font', //Which setting to load and manipulate (serialized is okay)
            'priority'   => 32, //Determines the order this control appears in for the specified section
            'section'    => 'responsive_fonts__options', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
         ) 
      ) );

      $wp_customize->add_setting( 'mobile_h5_font', //No need to use a SERIALIZED name, as `theme_mod` settings already live under one db record
         array(
            'default'    => '', //Default setting/value to save
            'type'       => 'theme_mod', //Is this an 'option' or a 'theme_mod'?
            'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
            'transport'  => 'postMessage', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
         ) 
      );      
            
      $wp_customize->add_control( new WP_Customize_Control( 
         $wp_customize,
         'responsiveFonts_mobile_h5_font',
         array(
            'label'      => __( 'Mobile H4 Font Size', 'responsiveFonts' ), //Admin-visible name of the control
            'settings'   => 'mobile_h5_font', //Which setting to load and manipulate (serialized is okay)
            'priority'   => 33, //Determines the order this control appears in for the specified section
            'section'    => 'responsive_fonts__options', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
         ) 
      ) );
      //1. Define a new section (if desired) to the Theme Customizer
      $wp_customize->add_section( 'responsive_fonts__options', 
         array(
            'title'       => __( 'Responsive Fonts', 'responsiveFonts' ), //Visible title of section
            'priority'    => 35, //Determines what order this appears in
            'capability'  => 'edit_theme_options', //Capability needed to tweak
            'description' => __('Set font size responsively according to screen size.', 'responsiveFonts'), //Descriptive tooltip
         ) 
      );
      
      $wp_customize->add_setting( 'default_h6_font', //No need to use a SERIALIZED name, as `theme_mod` settings already live under one db record
         array(
            'default'    => '', //Default setting/value to save
            'type'       => 'theme_mod', //Is this an 'option' or a 'theme_mod'?
            'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
            'transport'  => 'postMessage', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
         ) 
      );      
            
      $wp_customize->add_control( new WP_Customize_Control( 
         $wp_customize,
         'responsiveFonts_default_h6_font',
         array(
            'label'      => __( 'H6 Font Size', 'responsiveFonts' ), //Admin-visible name of the control
            'settings'   => 'default_h6_font', //Which setting to load and manipulate (serialized is okay)
            'priority'   => 34, //Determines the order this control appears in for the specified section
            'section'    => 'responsive_fonts__options', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
         ) 
      ) );
      $wp_customize->add_setting( 'desktop_h6_font', //No need to use a SERIALIZED name, as `theme_mod` settings already live under one db record
         array(
            'default'    => '', //Default setting/value to save
            'type'       => 'theme_mod', //Is this an 'option' or a 'theme_mod'?
            'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
            'transport'  => 'postMessage', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
         ) 
      );      
            
      $wp_customize->add_control( new WP_Customize_Control( 
         $wp_customize,
         'responsiveFonts_desktop_h6_font',
         array(
            'label'      => __( 'Desktop H6 Font Size', 'responsiveFonts' ), //Admin-visible name of the control
            'settings'   => 'desktop_h6_font', //Which setting to load and manipulate (serialized is okay)
            'priority'   => 35, //Determines the order this control appears in for the specified section
            'section'    => 'responsive_fonts__options', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
         ) 
      ) );

      $wp_customize->add_setting( 'tablet_h6_font', //No need to use a SERIALIZED name, as `theme_mod` settings already live under one db record
         array(
            'default'    => '', //Default setting/value to save
            'type'       => 'theme_mod', //Is this an 'option' or a 'theme_mod'?
            'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
            'transport'  => 'postMessage', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
         ) 
      );      
            
      $wp_customize->add_control( new WP_Customize_Control( 
         $wp_customize,
         'responsiveFonts_tablet_h6_font',
         array(
            'label'      => __( 'Tablet H6 Font Size', 'responsiveFonts' ), //Admin-visible name of the control
            'settings'   => 'tablet_h6_font', //Which setting to load and manipulate (serialized is okay)
            'priority'   => 36, //Determines the order this control appears in for the specified section
            'section'    => 'responsive_fonts__options', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
         ) 
      ) );

      $wp_customize->add_setting( 'mobile_h6_font', //No need to use a SERIALIZED name, as `theme_mod` settings already live under one db record
         array(
            //'default'    => '', //Default setting/value to save
            'type'       => 'theme_mod', //Is this an 'option' or a 'theme_mod'?
            'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
            'transport'  => 'postMessage', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
         ) 
      );      
            
      $wp_customize->add_control( new WP_Customize_Control( 
         $wp_customize,
         'responsiveFonts_mobile_h6_font',
         array(
            'label'      => __( 'Mobile H6 Font Size', 'responsiveFonts' ), //Admin-visible name of the control
            'settings'   => 'mobile_h6_font', //Which setting to load and manipulate (serialized is okay)
            'priority'   => 37, //Determines the order this control appears in for the specified section
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
            :root{
               --RFdefaultBodyFontSize: <?php echo get_theme_mod('default_body_font'); ?>;
               --RFdefaultH1FontSize: <?php echo get_theme_mod('default_h1_font'); ?>;
               --RFdefaultH2FontSize: <?php echo get_theme_mod('default_h2_font'); ?>;
               --RFdefaultH3FontSize: <?php echo get_theme_mod('default_h3_font'); ?>;
               --RFdefaultH4FontSize: <?php echo get_theme_mod('default_h4_font'); ?>;
               --RFdefaultH5FontSize: <?php echo get_theme_mod('default_h5_font'); ?>;
               --RFdefaultH6FontSize: <?php echo get_theme_mod('default_h6_font'); ?>;

               --RFdesktopBodyFontSize: <?php echo get_theme_mod('desktop_body_font'); ?>;
               --RFdesktopH1FontSize: <?php echo get_theme_mod('desktop_h1_font'); ?>;
               --RFdesktopH2FontSize: <?php echo get_theme_mod('desktop_h2_font'); ?>;
               --RFdesktopH3FontSize: <?php echo get_theme_mod('desktop_h3_font'); ?>;
               --RFdesktopH4FontSize: <?php echo get_theme_mod('desktop_h4_font'); ?>;
               --RFdesktopH5FontSize: <?php echo get_theme_mod('desktop_h5_font'); ?>;
               --RFdesktopH6FontSize: <?php echo get_theme_mod('desktop_h6_font'); ?>;

               --RFtabletBodyFontSize: <?php echo get_theme_mod('tablet_body_font'); ?>;
               --RFtabletH1FontSize: <?php echo get_theme_mod('tablet_h1_font'); ?>;
               --RFtabletH2FontSize: <?php echo get_theme_mod('tablet_h2_font'); ?>;
               --RFtabletH3FontSize: <?php echo get_theme_mod('tablet_h3_font'); ?>;
               --RFtabletH4FontSize: <?php echo get_theme_mod('tablet_h4_font'); ?>;
               --RFtabletH5FontSize: <?php echo get_theme_mod('tablet_h5_font'); ?>;
               --RFtabletH6FontSize: <?php echo get_theme_mod('tablet_h6_font'); ?>;

               --RFmobileFontSize: <?php echo get_theme_mod('mobile_body_font'); ?>;
               --RFmobileH1FontSize: <?php echo get_theme_mod('mobile_h1_font'); ?>;
               --RFmobileH2FontSize: <?php echo get_theme_mod('mobile_h2_font'); ?>;
               --RFmobileH3FontSize: <?php echo get_theme_mod('mobile_h3_font'); ?>;
               --RFmobileH4FontSize: <?php echo get_theme_mod('mobile_h4_font'); ?>;
               --RFmobileH5FontSize: <?php echo get_theme_mod('mobile_h5_font'); ?>;
               --RFmobileH6FontSize: <?php echo get_theme_mod('mobile_h6_font'); ?>;



            }

             body p { font-size: var(--RFdefaultBodyFontSize); }
             h1 { font-size: var(--RFdefaultH1FontSize); }
             h2 { font-size: var(--RFdefaultH2FontSize); }
             h3 { font-size: var(--RFdefaultH3FontSize); }
             h4 { font-size: var(--RFdefaultH4FontSize); }
             h5 { font-size: var(--RFdefaultH5FontSize); }
             h6 { font-size: var(--RFdefaultH6FontSize); }


            @media screen and (max-width: <?php echo $mobile_max; ?>) {
               body p { font-size: var(--RFmobileBodyFontSize); }
               h1 { font-size: var(--RFmobileH1FontSize); }
               h2 { font-size: var(--RFmobileH2FontSize); }
               h3 { font-size: var(--RFmobileH3FontSize); }
               h4 { font-size: var(--RFmobileH4FontSize); }
               h5 { font-size: var(--RFmobileH5FontSize); }
               h6 { font-size: var(--RFmobileH6FontSize); }
            }
            @media screen and (min-width: <?php echo $tablet_min; ?>) and (max-width: <?php echo $tablet_max; ?>) {
               body p { font-size: var(--RFtabletBodyFontSize); }
               h1 { font-size: var(--RFtabletH1FontSize); }
               h2 { font-size: var(--RFtabletH2FontSize); }
               h3 { font-size: var(--RFtabletH3FontSize); }
               h4 { font-size: var(--RFtabletH4FontSize); }
               h5 { font-size: var(--RFtabletH5FontSize); }
               h6 { font-size: var(--RFtabletH6FontSize); }
            }
            @media screen and (min-width: <?php echo $desktop; ?>) {
               body p { font-size: var(--RFdesktopBodyFontSize); }
               h1 { font-size: var(--RFdesktopH1FontSize); }
               h2 { font-size: var(--RFdesktopH2FontSize); }
               h3 { font-size: var(--RFdesktopH3FontSize); }
               h4 { font-size: var(--RFdesktopH4FontSize); }
               h5 { font-size: var(--RFdesktopH5FontSize); }
               h6 { font-size: var(--RFdesktopH6FontSize); }
            }
         </style>

   
    <?php

}
add_action( 'wp_head', 'responsiveFonts_customize_css');

$theme_version = wp_get_theme()->get( 'Version' );

// Add main customizer js file.
wp_enqueue_script( 'responsive-font', plugin_dir_url( __FILE__ ) . 'js/customize.js', array( 'jquery' ), $theme_version, false );

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
