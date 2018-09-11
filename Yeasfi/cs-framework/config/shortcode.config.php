<?php

if (!defined('ABSPATH')) {
    die;
} // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// SHORTCODE GENERATOR OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options = array();

// -----------------------------------------
// Basic Shortcode Examples                -
// -----------------------------------------
$options[] = array(
    'title' => 'Basic Shortcode Examples',
    'shortcodes' => array(
        // begin: shortcode
        array(
            'name' => 'image_withgrid',
            'title' => 'Featured Images With Grid',
            'fields' => array(
                // shortcode option field
               
            ),
        ),
        array(
            'name' => 'image_withoutgrid',
            'title' => 'Featured Images Without Grid',
            'fields' => array(
                // shortcode option field
               
            ),
        ),
    ),
        // end: shortcode
);




CSFramework_Shortcode_Manager::instance($options);
