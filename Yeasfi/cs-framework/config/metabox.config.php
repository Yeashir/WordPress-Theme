<?php

if (!defined('ABSPATH')) {
    die;
} // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// METABOX OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options = array();

// -----------------------------------------
// Page Metabox Options                    -
// -----------------------------------------
$options[] = array(
    'id' => 'custom_page_options',
    'title' => 'Custom Page Options',
    'post_type' => 'page',
    'context' => 'normal',
    'priority' => 'default',
    'sections' => array(
        // begin: a section
        array(
            'name' => 'section_1',
            'title' => 'Icon/Image',
            'icon' => 'fa fa-cog',
            // begin: fields
            'fields' => array(
                array(
                    'id' => 'image_2',
                    'type' => 'upload',
                    'title' => 'Image for Custom Section',
                    'add_title' => 'Add image or Icon',
                ),
                
            ), // end: fields
        ), // end: a section
    ),
);

$options[] = array(
    'id' => 'page_layout',
    'title' => 'Add Other Section',
    'post_type' => 'page',
    'context' => 'normal',
    'priority' => 'default',
    'sections' => array(
        // begin: a section
        array(
            'name' => 'page_layout',
            'title' => 'paage Layout',
            'icon' => 'fa fa-columns',
            'fields' => array(
                array(
                    'id' => 'pagelayout',
                    'type' => 'sorter',
                    'title' => 'Page Layout',
                    'default' => array(
                        'enabled' => array(
                        ),
                        'disabled' => array(
                            'banner' => 'Banner',
                            'services' => 'Services',
                            'otherservices' => 'Other Services',
                            'welcome-sec' => 'Welcome',
                            'testimonials' => 'Testimonials',
                            'gallery' => 'Gallery',
                            'form' => 'Form',
                            'doublegrid' => 'Double Grid',
                        ),
                    ),
                    'enabled_title' => 'Active Section',
                    'disabled_title' => 'Deactive Section',
                ),
            ),
        ),
    ),
);
// -----------------------------------------
// custom_post Metabox Options                    -
// -----------------------------------------
$options[] = array(
    'id' => 'custom_post_options',
    'title' => 'Gallery Options',
    'post_type' => 'photo_gallery',
    'context' => 'normal',
    'priority' => 'default',
    'sections' => array(
        // begin: a section
        array(
            'name' => 'section_1',
            'title' => 'Icon/Image',
            'icon' => 'fa fa-cog',
            // begin: fields
            'fields' => array(
                array(
                    'id' => 'gallery_1',
                    'type' => 'gallery',
                    'title' => 'Gallery',
                ),
            ), // end: fields
        ), // end: a section
    ),
);





// -----------------------------------------
// Post Metabox Options                    -
// -----------------------------------------
$options[] = array(
    'id' => 'post_options_group_display',
    'title' => 'Custom Product ancore  Options',
    'post_type' => 'page',
    'context' => 'normal',
    'priority' => 'default',
    'sections' => array(
        array(
            'name' => 'titlemetabox',
            'fields' => array(
                array(
                    'id' => 'meta_groups',
                    'type' => 'group',
                    'title' => 'Product Ancore inputs',
                    'button_title' => ' new input ',
                    'accordion_title' => 'input title',
                    'fields' => array(
                        array(
                            'id' => 'subproducttitle',
                            'type' => 'text',
                            'title' => 'Title ',
                        ),
                        array(
                            'id' => 'pageslug',
                            'type' => 'text',
                            'title' => 'Target Page Slug',
                        ),
                        array(
                            'id' => 'subproductimage',
                            'type' => 'upload',
                            'title' => 'Upload Field',
                        ),
                    )
                ),
            ),
        ),
    ),
);

CSFramework_Metabox::instance($options);
