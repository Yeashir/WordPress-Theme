<?php

if (!defined('ABSPATH')) {
    die;
} // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings = array(
    'menu_title' => 'Theme Option',
    'menu_type' => 'theme', // menu, submenu, options, theme, etc.
    'menu_slug' => 'cs-framework',
    'ajax_save' => false,
    'show_reset_all' => false,
    'framework_title' => 'Theme Option <small>by Md Yeasir Arafat</small>',
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options = array();

// ----------------------------------------
// a option section for options overview  -
// ----------------------------------------
$options[] = array(
    'name' => 'Basic Fields',
    'title' => 'Basic Fields',
    'icon' => 'fa fa-star',
    'sections' => array(
        array(
            'name' => 'text_options',
            'title' => 'General Information',
            'icon' => 'fa fa-check',
            // begin: fields
            'fields' => array(
                // begin: a field
                array(
                    'id' => 'logo_upload',
                    'type' => 'upload',
                    'title' => 'Logo',
                ),
                array(
                    'id' => 'unique_typography_3',
                    'type' => 'typography',
                    'title' => 'Sclect Your font family',
                    'default' => array(
                        'family' => 'Arial',
                        'font' => 'websafe',
                    ),
                    'variant' => false,
                    'chosen' => false,
                ),
                // end: a field
                array(
                    'id' => 'openinghour',
                    'type' => 'textarea',
                    'title' => 'Opening Hour',
                ),
                array(
                    'id' => 'closingtime',
                    'type' => 'textarea',
                    'title' => 'Closing Hour',
                ),
                array(
                    'id' => 'openinghour_image',
                    'type' => 'image',
                    'title' => 'Opening Hour Image',
                ),
            // end: a field
            ),
        ), // end: sections
        array(
            'name' => 'phone',
            'title' => 'Phone & Email',
            'icon' => 'fa fa-phone',
            // begin: fields
            'fields' => array(
                array(
                    'id' => 'fieldset_phone',
                    'type' => 'fieldset',
                    'title' => 'Phone Number',
                    'un_array' => true,
                    'fields' => array(
                        // begin: a field
                        array(
                            'id' => 'phone',
                            'type' => 'text',
                            'title' => 'Phone Number',
                        ),
                        array(
                            'id' => 'phone_image',
                            'type' => 'image',
                            'title' => 'Phone Image',
                        ),
                        array(
                            'id' => 'phone-icon',
                            'type' => 'icon',
                            'title' => 'Phone Icon',
                        ),
                        array(
                            'id' => 'phone-Color',
                            'type' => 'color_picker',
                            'title' => 'Color Picker Field',
                        ),
                    ),
                ),
                array(
                    'id' => 'fieldset_mobile',
                    'type' => 'fieldset',
                    'title' => 'Mobile Number',
                    'un_array' => true,
                    'fields' => array(
                        // begin: a field
                        array(
                            'id' => 'mobilenumberswitch',
                            'type' => 'switcher',
                            'title' => 'Allow Mobile Number',
                        ),
                        array(
                            'id' => 'mobile',
                            'type' => 'text',
                            'title' => 'Mobile Number',
                            'dependency' => array('mobilenumberswitch', '==', 'true') // dependency rule
                        ),
                        array(
                            'id' => 'mobile_image',
                            'type' => 'image',
                            'title' => 'Mobile Image',
                            'dependency' => array('mobilenumberswitch', '==', 'true') // dependency rule
                        ),
                        array(
                            'id' => 'mobileicon',
                            'type' => 'icon',
                            'title' => 'Mobile Icon',
                            'dependency' => array('mobilenumberswitch', '==', 'true') // dependency rule
                        ),
                    ),
                ),
                array(
                    'id' => 'fieldset_email',
                    'type' => 'fieldset',
                    'title' => 'Email Field',
                    'un_array' => true,
                    'fields' => array(
                        array(
                            'id' => 'email',
                            'type' => 'text',
                            'title' => 'Email',
                        ),
                        array(
                            'id' => 'email_image',
                            'type' => 'image',
                            'title' => 'Email Image',
                        ),
                        array(
                            'id' => 'email-icon',
                            'type' => 'icon',
                            'title' => 'Email Icon',
                        ),
                        array(
                            'id' => 'email-Color',
                            'type' => 'color_picker',
                            'title' => 'Color Picker Field',
                        ),
                    ),
                ),
            ),
        ), // end: sections
        array(
            'name' => 'Address',
            'title' => 'Address',
            'icon' => 'fa fa-address-book',
            // begin: fields
            'fields' => array(
                // begin: a field
                array(
                    'id' => 'address_image',
                    'type' => 'image',
                    'title' => 'Address Image',
                ),
                array(
                    'id' => 'streetaddress',
                    'type' => 'text',
                    'title' => 'Street Address',
                ),
                array(
                    'id' => 'addresslocality',
                    'type' => 'text',
                    'title' => 'Address Locality',
                ),
                array(
                    'id' => 'addressregion',
                    'type' => 'text',
                    'title' => 'Address Region',
                ),
                array(
                    'id' => 'postalcode',
                    'type' => 'text',
                    'title' => 'Postal Code',
                ),
                array(
                    'id' => 'maplink',
                    'type' => 'text',
                    'title' => 'Gool map short link',
                ),
                array(
                    'id' => 'map_image',
                    'type' => 'image',
                    'title' => 'Map Image',
                ),
                // end: a field
                array(
                    'id' => 'padding_1',
                    'type' => 'padding',
                    'title' => 'Padding',
                    'default' => array(
                        'top' => '10px',
                        'right' => '20px',
                        'bottom' => '30px',
                        'left' => '40px',
                    )
                ),
            ),
        ), // end: sections
        array(
            'name' => 'Social',
            'title' => 'Social media',
            'icon' => 'fa fa-share-square',
            // begin: fields
            'fields' => array(
                // begin: a field
                array(
                    'id' => 'socialmediaa',
                    'type' => 'group',
                    'title' => 'Social Media',
                    'button_title' => 'Add New',
                    'accordion_title' => 'Social Media Option',
                    'fields' => array(
                        array(
                            'id' => 'smotitle',
                            'type' => 'text',
                            'title' => 'SM Title',
                        ),
                        array(
                            'id' => 'smolink',
                            'type' => 'text',
                            'title' => 'Put Your SM Link',
                        ),
                        array(
                            'id' => 'smicon',
                            'type' => 'icon',
                            'title' => 'Chose Icon',
                        ),
                        array(
                            'id' => 'smimg',
                            'type' => 'image',
                            'title' => 'Chose Image',
                        ),
                    ),
                ),
            // end: a field
            ),
        ), // end: sections
    ),
);

// ------------------------------
// Header                    -
// ------------------------------
$options[] = array(
    'name' => 'Header',
    'title' => 'Header Section',
    'icon' => 'fa fa-header',
    'sections' => array(
        array(
            'name' => 'Layout',
            'title' => 'Header Layout',
            'icon' => 'fa fa-columns',
            'fields' => array(
                array(
                    'id' => 'image_select_option',
                    'type' => 'image_select',
                    'title' => 'Image Select Field',
                    'options' => array(
                        'opt1' => get_template_directory_uri() . '/template/img/headerlayout_02.jpg',
                        'opt2' => get_template_directory_uri() . '/template/img/opt2.png',
                        'opt3' => get_template_directory_uri() . '/template/img/opt3.jpg',
                        'opt4' => get_template_directory_uri() . '/template/img/opt4.jpg',
                        'opt5' => get_template_directory_uri() . '/template/img/opt5.jpg',
                    ),
                    'default' => 'opt5',
                    'radio' => true,
                ),
            ),
        ),
        array(
            'name' => 'Style',
            'title' => 'Header Style',
            'icon' => 'fa fa-snowflake-o',
            // begin: fields
            'fields' => array(
                // begin: a field
                array(
                    'id' => 'tophedbg',
                    'type' => 'background',
                    'title' => 'Background Field',
                    'class' => 'topheader',
                    'default' => array(
                        'image' => '',
                        'repeat' => '',
                        'position' => '',
                        'attachment' => '',
                        'size' => '',
                        'color' => '',
                    ),
                ),
                array(
                    'id' => 'headertextcolor',
                    'type' => 'color_picker',
                    'title' => 'Text Colour',
                ),
                array(
                    'id' => 'headertextcolorhover',
                    'type' => 'color_picker',
                    'title' => 'Hover Colour ',
                ),
                array(
                    'id' => 'authorizecompany',
                    'type' => 'group',
                    'title' => 'Authorize Company Logo',
                    'button_title' => 'Add New',
                    'fields' => array(
                        array(
                            'id' => 'acimg',
                            'type' => 'image',
                            'title' => 'Chose Image',
                        ),
                        array(
                            'id' => 'acurl',
                            'type' => 'text',
                            'title' => 'URL of LOgo',
                        ),
                    ),
                ),
            // end: a field
            ),
        ), // end: sections
    )
);


// ------------------------------
// Menu           -
// ------------------------------
$options[] = array(
    'name' => 'mnStyle',
    'title' => 'Menu',
    'icon' => 'fa fa-bars',
    // begin: fields
    'fields' => array(
        // begin: a field
        array(
            'id' => 'menubg',
            'type' => 'background',
            'title' => 'Background Field',
            'class' => 'topheader',
            'default' => array(
                'image' => '',
                'repeat' => '',
                'position' => '',
                'attachment' => '',
                'size' => '',
                'color' => '',
            ),
        ),
        array(
            'id' => 'textcolor',
            'type' => 'color_picker',
            'title' => 'Text Color',
        ),
        array(
            'id' => 'HoverActive',
            'type' => 'color_picker',
            'title' => 'Hover and Active Color',
        ),
        array(
            'id' => 'padding_menu',
            'type' => 'padding',
            'title' => 'Menu Element Padding',
            'default' => array(
                'top' => '10px',
                'right' => '10px',
                'bottom' => '10px',
                'left' => '10px',
            )
        ),
//        array(
//            'id' => 'padding_menu',
//            'type' => 'group',
//            'title' => 'Padding Between 2 Eleement',
//            'button_title' => 'Add New Padding',
//            'accordion_title' => 'Padding',
//            'fields' => array(
//                array(
//                    'id' => 'top',
//                    'type' => 'number',
//                    'title' => 'Top',
//                ),
//                array(
//                    'id' => 'right',
//                    'type' => 'number',
//                    'title' => 'Right',
//                ),
//                array(
//                    'id' => 'left',
//                    'type' => 'number',
//                    'title' => 'Left',
//                ),
//                array(
//                    'id' => 'bottom',
//                    'type' => 'number',
//                    'title' => 'Bottom',
//                ),
//            ),
//        ),
        // end: a field
        array(
            'id' => 'fontsize',
            'type' => 'number',
            'title' => 'Font Size',
        ),
        array(
            'id' => 'font-weight',
            'type' => 'number',
            'title' => 'Font Weight',
        ),
        array(
            'id' => 'texttransform',
            'type' => 'select',
            'title' => 'Select Text Transform',
            'options' => array(
                'capitalize' => 'Capitalize',
                'uppercase' => 'Uppercase',
                'lowercase' => 'Lowercase',
            ),
            'default' => 'blue',
        ),
    ),
);


// ------------------------------
// Home                    -
// ------------------------------
$options[] = array(
    'name' => 'Home',
    'title' => 'Home Page',
    'icon' => 'fa fa-home',
    'sections' => array(
        array(
            'name' => 'Home_layout',
            'title' => 'Home Layout',
            'icon' => 'fa fa-columns',
            'fields' => array(
                array(
                    'id' => 'homelayout',
                    'type' => 'sorter',
                    'title' => 'Home Layout',
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
        array(
            'name' => 'banner',
            'title' => 'Banner',
            'icon' => 'fa fa-picture-o',
            'fields' => array(
                array(
                    'id' => 'bannerheight',
                    'type' => 'number',
                    'title' => 'Section Height',
                ),
                array(
                    'id' => 'fieldset_3',
                    'type' => 'fieldset',
                    'title' => 'Banner',
                    'un_array' => true,
                    'fields' => array(
                        array(
                            'id' => 'bannerimage',
                            'type' => 'upload',
                            'title' => 'Banner Image',
                        ),
                        array(
                            'id' => 'bannert1sec',
                            'type' => 'fieldset',
                            'title' => 'Banner T1 Section',
                            'un_array' => true,
                            'fields' => array(
                                array(
                                    'id' => 'bannert1',
                                    'type' => 'textarea',
                                    'title' => 'Banner T1 Text',
                                    'add_title' => 'Add T1',
                                ),
                                array(
                                    'id' => 'bannert1color',
                                    'type' => 'color_picker',
                                    'title' => 'Colour',
                                ),
                                array(
                                    'id' => 'bannert1fontsize',
                                    'type' => 'number',
                                    'title' => 'Font Size',
                                    'desc' => 'Font Size in PX',
                                    'default' => '40',
                                ),
                                array(
                                    'id' => 'ban1fwidth',
                                    'type' => 'number',
                                    'title' => 'Font Width ',
                                    'default' => '600',
                                ),
                                array(
                                    'id' => 't1txttransform',
                                    'type' => 'select',
                                    'title' => 'Text Transform',
                                    'options' => array(
                                        'capitalize' => 'capitalize',
                                        'uppercase' => 'uppercase',
                                        'lowercase' => 'lowercase',
                                        'inherit' => 'inherit'
                                    ),
                                    'default' => 'capitalize',
                                ),
                            ),
                        ),
                        array(
                            'id' => 'fieldset_bannert2',
                            'type' => 'fieldset',
                            'title' => 'Banner T2 Section',
                            'un_array' => true,
                            'fields' => array(
                                array(
                                    'id' => 'bannert2',
                                    'type' => 'textarea',
                                    'title' => 'T2 Text ',
                                    'add_title' => 'Add T2',
                                ),
                                array(
                                    'id' => 't2fontsize',
                                    'type' => 'number',
                                    'title' => 'Font Size',
                                    'desc' => 'Font Size in PX',
                                    'default' => '20',
                                ),
                                array(
                                    'id' => 't2fwidth',
                                    'type' => 'number',
                                    'title' => 'Font Width ',
                                    'default' => '400',
                                ),
                                array(
                                    'id' => 't2txttransform',
                                    'type' => 'select',
                                    'title' => 'Text Transform',
                                    'options' => array(
                                        'capitalize' => 'capitalize',
                                        'uppercase' => 'uppercase',
                                        'lowercase' => 'lowercase',
                                        'inherit' => 'inherit'
                                    ),
                                    'default' => 'blue',
                                ),
                            ),
                        ),
                        array(
                            'id' => 'actionbtn',
                            'type' => 'switcher',
                            'title' => 'Action Button',
                        ),
                        array(
                            'id' => 'actionbtntxt',
                            'type' => 'text',
                            'title' => 'Button Text',
                            'default' => 'Quick Quote',
                            'dependency' => array('actionbtn', '==', 'true')
                        ),
                        array(
                            'id' => 'actionbtnurl',
                            'type' => 'text',
                            'title' => 'Button URL',
                            'dependency' => array('actionbtn', '==', 'true')
                        ),
                    ),
                ),
            ),
        ), // end: a field
        array(
            'id' => 'fieldset_slider',
            'type' => 'fieldset',
            'title' => 'Slider Section',
            'icon' => 'fa fa-sliders',
            'un_array' => true,
            'fields' => array(
                array(
                    'id' => 'slider_switcher',
                    'type' => 'switcher',
                    'title' => 'Slider ON/OFF  Button',
                    'label' => 'Yes,on your Slider.',
                ),
                array(
                    'id' => 'varticalslider',
                    'type' => 'switcher',
                    'title' => 'Vartical Slider',
                    'label' => 'Yes,on your Vartical Slider.',
                ),
                array(
                    'id' => 'slidergroup',
                    'type' => 'group',
                    'title' => 'Slider Element',
                    'button_title' => 'Add New',
                    'accordion_title' => 'Add New Item',
                    'fields' => array(
                        array(
                            'id' => 'slidertitle',
                            'type' => 'textarea',
                            'title' => 'Slider Title',
                        ),
                        array(
                            'id' => 'sliderdescription',
                            'type' => 'text',
                            'title' => 'Slider Description',
                        ),
                        array(
                            'id' => 'media',
                            'type' => 'upload',
                            'title' => 'Upload Image',
                        ),
                    ),
                ),
                array(
                    'id' => 'slidercontrol',
                    'type' => 'switcher',
                    'title' => 'Slider Controler',
                    'label' => 'Buttons( Off ) / Indicators ( On )',
                ),
            ),
        ),
        array(
            'name' => 'service',
            'title' => 'Service',
            'icon' => 'fa fa-tasks',
            'fields' => array(
                array(
                    'id' => 'servicebg',
                    'type' => 'background',
                    'title' => 'Section Background',
                    'default' => array(
                        'image' => '',
                        'repeat' => '',
                        'position' => '',
                        'attachment' => '',
                        'size' => '',
                        'color' => '',
                    ),
                ),
                array(
                    'id' => 'sec-pad',
                    'type' => 'padding',
                    'title' => 'Section Padding',
                ),
                array(
                    'id' => 'srvsorter',
                    'type' => 'sorter',
                    'title' => 'Service  Sorter',
                    'default' => array(
                        'enabled' => array(),
                        'disabled' => array(
                            'lefticonrighttext' => 'Left Icon Right Text',
                            'blogstyle' => 'Odd Evin Blog Style',
                            'roundicon' => 'Round Icon',
                        ),
                    ),
                ),
                array(
                    'id' => 'unique_option_901',
                    'type' => 'group',
                    'title' => 'Group Field',
                    'button_title' => 'Add New',
                    'accordion_title' => 'Add New Field',
                    'fields' => array(
                        array(
                            'id' => 'srvpage2',
                            'type' => 'select',
                            'title' => 'Select Field for Pages',
                            'options' => 'pages',
                            'class' => 'chosen',
                        ),
                    ),
                ),
                array(
                    'id' => 'fieldset_srvtitle',
                    'type' => 'fieldset',
                    'title' => 'Service Section Title',
                    'un_array' => true,
                    'fields' => array(
                        array(
                            'id' => 'srvvicetitle',
                            'type' => 'text',
                            'title' => 'Section Title',
                        ),
                        array(
                            'id' => 'srvtitlecolor',
                            'type' => 'color_picker',
                            'title' => 'Text Colour',
                        ),
                        array(
                            'id' => 'srvfntsize',
                            'type' => 'number',
                            'title' => 'Font Size',
                            'desc' => 'Font Size in PX',
                            'default' => '60',
                        ),
                        array(
                            'id' => 'srvfwidth',
                            'type' => 'number',
                            'title' => 'Font Width',
                            'default' => '600',
                        ),
                    ),
                ),
            ),
        ), // end: a field
        array(
            'name' => 'otherservice',
            'title' => 'Other Service',
            'icon' => 'fa fa-tasks',
            'fields' => array(
                array(
                    'id' => 'otherservicebg',
                    'type' => 'background',
                    'title' => 'Section Background',
                    'default' => array(
                        'image' => '',
                        'repeat' => '',
                        'position' => '',
                        'attachment' => '',
                        'size' => '',
                        'color' => '',
                    ),
                ),
                array(
                    'id' => 'othersrvstyle',
                    'type' => 'select',
                    'title' => 'Select Style',
                    'options' => array(
                        'opt1' => 'Left Icon Right Text',
                        'opt2' => 'Blog Style',
                        'opt3' => 'Centerl Icon',
                        'opt4' => 'SIngle Service (full grid)',
                        'opt5' => 'OddEven',
                        'opt6' => 'Product Carousel',
                        'opt7' => 'Round Icon',
                    ),
                    'default_option' => 'Select a Style',
                ),
                array(
                    'id' => 'othsrvvicetitle',
                    'type' => 'text',
                    'title' => 'Section Title',
                ),
                array(
                    'id' => 'othersrvpage',
                    'type' => 'select',
                    'title' => 'Select Field for Pages',
                    'options' => 'pages',
                    'class' => 'chosen',
                    'attributes' => array(
                        'placeholder' => 'Select a color',
                        'multiple' => 'multiple',
                        'style' => 'width: 600px;'
                    ),
                ),
            ),
        ), // end: a field
        array(
            'name' => 'Welcome',
            'title' => 'Welcome Section',
            'icon' => 'fa fa-coffee',
            'fields' => array(
                array(
                    'id' => 'wlsecqbg',
                    'type' => 'background',
                    'title' => 'Section background',
                    'default' => array(
                        'image' => '',
                        'repeat' => '',
                        'position' => '',
                        'attachment' => '',
                        'size' => '',
                        'color' => '',
                    ),
                ),
                array(
                    'id' => 'wlqstyle',
                    'type' => 'select',
                    'title' => 'Select Style',
                    'options' => array(
                        'opt1' => '2part(left-right)',
                        'opt2' => '1 Part',
                    ),
                    'default_option' => 'Select a Style',
                ),
                array(
                    'id' => 'wlqvedio',
                    'type' => 'text',
                    'title' => 'Welcome Vedio Link',
                ),
                array(
                    'id' => 'wlqtitle',
                    'type' => 'text',
                    'title' => 'Welcome Title',
                ),
                array(
                    'id' => 'wlqtitlefontsize',
                    'type' => 'number',
                    'title' => 'Font Size',
                    'desc' => 'Font Size in PX',
                    'default' => '40',
                ),
                array(
                    'id' => 'wlqfwidth',
                    'type' => 'number',
                    'title' => 'Font Width',
                    'default' => '600',
                ),
                array(
                    'id' => 'wlq_text_colcor',
                    'type' => 'color_picker',
                    'title' => 'Text Colour',
                ),
                array(
                    'id' => 'wlq-cont',
                    'type' => 'wysiwyg',
                    'title' => 'Scorl',
                    'desc' => 'This is an option',
                    'help' => 'Write something',
                    'attributes' => array(
                        'placeholder' => 'Scorl Text',
                        'rows' => 20,
                    ),
                ),
                array(
                    'id' => 'scorlhight',
                    'type' => 'number',
                    'title' => 'Scorl Height',
                    'desc' => 'In PX',
                ),
                array(
                    'id' => 'wlq-contrdm',
                    'type' => 'wysiwyg',
                    'title' => 'Read More',
                    'desc' => 'This is an option',
                    'help' => 'Write something',
                    'attributes' => array(
                        'placeholder' => 'Do stuff',
                        'rows' => 20,
                    ),
                ),
            ),
        ), // end: a field
        array(
            'name' => 'testmonial',
            'title' => 'Testmonial',
            'icon' => 'fa fa-commenting',
            'fields' => array(
                array(
                    'id' => 'testmonialbg',
                    'type' => 'background',
                    'title' => 'Section background',
                    'default' => array(
                        'image' => '',
                        'repeat' => '',
                        'position' => '',
                        'attachment' => '',
                        'size' => '',
                        'color' => '',
                    ),
                ),
                array(
                    'id' => 'selectgrid',
                    'type' => 'select',
                    'title' => 'Select Field',
                    'options' => array(
                        'doublegrid' => 'Double Grid',
                        'singlegrid' => 'Single Grid',
                    ),
                ),
                array(
                    'id' => 'tmtitle',
                    'type' => 'text',
                    'title' => 'Testmonial Section Title',
                ),
                array(
                    'id' => 'tmcollor',
                    'type' => 'color_picker',
                    'title' => 'Title Colour',
                ),
                array(
                    'id' => 'tmfontsize',
                    'type' => 'number',
                    'title' => 'Font Size',
                    'desc' => 'Font Size in PX',
                    'default' => '40',
                ),
                array(
                    'id' => 'tmfontwidth',
                    'type' => 'number',
                    'title' => 'Font Width',
                    'default' => '600',
                ),
            ),
        ), // end: a field
        array(
            'name' => 'gallery',
            'title' => 'Gallery',
            'icon' => 'fa fa-picture-o',
            'fields' => array(
                array(
                    'id' => 'galtitle',
                    'type' => 'text',
                    'title' => 'Gallery Title',
                ),
                array(
                    'id' => 'galleryshorter',
                    'type' => 'sorter',
                    'title' => 'Gallery Sorter',
                    'default' => array(
                        'enabled' => array(
                        ),
                        'disabled' => array(
                            '3dstyle' => '3d Style',
                            'unitegallery' => 'Unite Gallery',
                        ),
                    ),
                ),
                array(
                    'id' => 'galcolour',
                    'type' => 'color_picker',
                    'title' => 'Text Colour',
                ),
                array(
                    'id' => 'galfontsize',
                    'type' => 'number',
                    'title' => 'Font Size',
                    'desc' => 'Font Size in PX',
                    'default' => '40',
                ),
                array(
                    'id' => 'galfwidth',
                    'type' => 'number',
                    'title' => 'Font Width',
                    'default' => '600',
                ),
                array(
                    'id' => 'gal-text',
                    'type' => 'wysiwyg',
                    'title' => 'Gallery',
                    'settings' => array(
                        'textarea_rows' => 5,
                        'tinymce' => false,
                        'media_buttons' => false,
                    )
                ),
                array(
                    'id' => 'padding_gal',
                    'type' => 'padding',
                    'title' => 'Section Padding',
                ),
            ),
        ), // end: a field
        array(
            'name' => 'Form',
            'title' => 'Form ',
            'icon' => 'fa fa-empire',
            'fields' => array(
                array(
                    'id' => 'formtitle',
                    'type' => 'text',
                    'title' => 'Form Title',
                ),
                array(
                    'id' => 'selectlayout',
                    'type' => 'select',
                    'title' => 'Select Field',
                    'options' => array(
                        '2part' => 'Double part',
                        '1part' => 'Single part',
                    ),
                ),
                array(
                    'id' => 'formbg',
                    'type' => 'background',
                    'title' => 'Section background',
                    'default' => array(
                        'image' => '',
                        'repeat' => '',
                        'position' => '',
                        'attachment' => '',
                        'size' => '',
                        'color' => '',
                    ),
                ),
            ),
        ), // end: a field
        array(
            'name' => 'dblgrid',
            'title' => 'Double Grid ',
            'icon' => 'fa fa-th-large',
            'fields' => array(
                array(
                    'id' => 'dblgrid_sorter',
                    'type' => 'sorter',
                    'title' => 'Sorter',
                    'default' => array(
                        'enabled' => array(
                        ),
                        'disabled' => array(
                            'firstsection' => 'First Section',
                            'scondsection' => 'Scond Section',
                            'thirdsection' => 'Third Section',
                        ),
                    ),
                ),
                array(
                    'type' => 'subheading',
                    'content' => ' First Section',
                ),
                array(
                    'id' => 'dbgf_switcher',
                    'type' => 'switcher',
                    'title' => 'Switcher',
                    'label' => 'Switcher On',
                ),
                array(
                    'id' => 'dblgrida',
                    'type' => 'background',
                    'title' => 'Section background',
                    'dependency' => array('dbgf_switcher', '==', 'true'),
                    'default' => array(
                        'image' => '',
                        'repeat' => '',
                        'position' => '',
                        'attachment' => '',
                        'size' => '',
                        'color' => '',
                    ),
                ),
                array(
                    'id' => 'dblgrid_title',
                    'type' => 'textarea',
                    'title' => 'Title Field',
                    'dependency' => array('dbgf_switcher', '==', 'true'),
                ),
                array(
                    'id' => 'dblgrid_txt',
                    'type' => 'textarea',
                    'title' => 'Textarea Field',
                    'dependency' => array('dbgf_switcher', '==', 'true'),
                ),
//                array(
//                    'id' => 'dblgrid_image',
//                    'type' => 'image',
//                    'title' => 'Image',
//                ),
                array(
                    'id' => 'dblgrid_gallery',
                    'type' => 'gallery',
                    'title' => 'Gallery',
                    'add_title' => 'Add Images',
                    'edit_title' => 'Edit Images',
                    'clear_title' => 'Remove Images',
                    'dependency' => array('dbgf_switcher', '==', 'true'),
                ),
                array(
                    'id' => 'dblgrid_url', // this is must be unique
                    'type' => 'text',
                    'title' => 'URL',
                    'dependency' => array('dbgf_switcher', '==', 'true'),
                ),
                array(
                    'type' => 'subheading',
                    'content' => 'Scond Section',
                ),
                array(
                    'id' => 'ss_switcher',
                    'type' => 'switcher',
                    'title' => 'Switcher',
                    'label' => 'Switcher On',
                ),
                array(
                    'id' => 'dblgridab',
                    'type' => 'background',
                    'title' => 'Section background',
                    'dependency' => array('ss_switcher', '==', 'true'),
                    'default' => array(
                        'image' => '',
                        'repeat' => '',
                        'position' => '',
                        'attachment' => '',
                        'size' => '',
                        'color' => '',
                    ),
                ),
                array(
                    'id' => 'dblgridb_title',
                    'type' => 'textarea',
                    'title' => 'Title Field',
                    'dependency' => array('ss_switcher', '==', 'true'),
                ),
                array(
                    'id' => 'dblgridb_txt',
                    'type' => 'textarea',
                    'title' => 'Textarea Field',
                    'dependency' => array('ss_switcher', '==', 'true'),
                ),
//                array(
//                    'id' => 'dblgridb_image',
//                    'type' => 'image',
//                    'title' => 'Image',
//                ),
                array(
                    'id' => 'dblgridb_gallery',
                    'type' => 'gallery',
                    'title' => 'Gallery',
                    'add_title' => 'Add Images',
                    'edit_title' => 'Edit Images',
                    'clear_title' => 'Remove Images',
                    'dependency' => array('ss_switcher', '==', 'true'),
                ),
                array(
                    'id' => 'dblgridb_url', // this is must be unique
                    'type' => 'text',
                    'title' => 'URL',
                    'dependency' => array('ss_switcher', '==', 'true'),
                ),
                array(
                    'type' => 'subheading',
                    'content' => 'Third Section',
                ),
                array(
                    'id' => 'ss_switcher_C',
                    'type' => 'switcher',
                    'title' => 'Switcher',
                    'label' => 'Switcher On',
                ),
                array(
                    'id' => 'dblgridac',
                    'type' => 'background',
                    'title' => 'Section background',
                    'dependency' => array('ss_switcher_C', '==', 'true'),
                    'default' => array(
                        'image' => '',
                        'repeat' => '',
                        'position' => '',
                        'attachment' => '',
                        'size' => '',
                        'color' => '',
                    ),
                ),
                array(
                    'id' => 'dblgridbc_title',
                    'type' => 'text',
                    'title' => 'Title Field',
                    'dependency' => array('ss_switcher_C', '==', 'true'),
                ),
                array(
                    'id' => 'dblgridc_txt',
                    'type' => 'textarea',
                    'title' => 'Textarea Field',
                    'dependency' => array('ss_switcher_C', '==', 'true'),
                ),
                array(
                    'id' => 'dblgridc_image',
                    'type' => 'image',
                    'title' => 'Image',
                    'dependency' => array('ss_switcher_C', '==', 'true'),
                ),
                array(
                    'id' => 'dblgridc_gallery',
                    'type' => 'gallery',
                    'title' => 'Gallery',
                    'add_title' => 'Add Images',
                    'edit_title' => 'Edit Images',
                    'clear_title' => 'Remove Images',
                    'dependency' => array('ss_switcher_C', '==', 'true'),
                ),
                array(
                    'id' => 'dblgridc_url', // this is must be unique
                    'type' => 'text',
                    'title' => 'URL',
                    'dependency' => array('ss_switcher_C', '==', 'true'),
                ),
                //test
                array(
                    'id' => 'heading',
                    'type' => 'heading',
                    'content' => 'Custom CSS',
                ),
                array(
                    'id' => 'dblgridcustom_css',
                    'type' => 'textarea',
                    'attributes' => array(
                        'rows' => '20',
                    ),
                ),
            ),
        ), // end: a field
    ), // end: sections
);

// ------------------------------
// Footer                    -
// ------------------------------
$options[] = array(
    'name' => 'Footer',
    'title' => 'Footer Section',
    'icon' => 'fa fa-sort-alpha-desc',
    'sections' => array(
        array(
            'name' => 'layout',
            'title' => 'Footer Layout',
            'icon' => 'fa fa-columns',
            'fields' => array(
                array(
                    'id' => 'footer_select_option',
                    'type' => 'image_select',
                    'title' => 'Footer Image Select Field',
                    'options' => array(
                        'fopt1' => get_template_directory_uri() . '/template/img/footeropt1.jpg',
                        'fopt2' => get_template_directory_uri() . '/template/img/footeropt2.jpg',
                        'fopt3' => get_template_directory_uri() . '/template/img/footeropt3.jpg',
                        'fopt4' => get_template_directory_uri() . '/template/img/footeropt4.jpg',
                        'fopt5' => get_template_directory_uri() . '/template/img/footeropt5.png',
                        'fopt6' => get_template_directory_uri() . '/template/img/footeropt6.jpg',
                    )
                )
            )
        ),
        array(
            'name' => 'footer_logo',
            'title' => 'Footer Element',
            'icon' => 'fa fa-picture-o',
            'fields' => array(
                array(
                    'id' => 'footermain',
                    'type' => 'fieldset',
                    'title' => 'Main Element',
                    'un_array' => true,
                    'fields' => array(
                        array(
                            'id' => 'maintitle',
                            'type' => 'text',
                            'title' => 'SEC Title',
                        ),
                        array(
                            'id' => 'footerextatext',
                            'type' => 'textarea',
                            'title' => 'More Text',
                        ),
                        array(
                            'id' => 'footerbg',
                            'type' => 'background',
                            'title' => 'Section background',
                            'default' => array(
                                'image' => '',
                                'repeat' => '',
                                'position' => '',
                                'attachment' => '',
                                'size' => '',
                                'color' => '',
                            )
                        ),
                        array(
                            'id' => 'footer_logo',
                            'type' => 'upload',
                            'title' => 'Footer Image',
                        ),
                    ),
                ),
                array(
                    'id' => 'copywright',
                    'type' => 'fieldset',
                    'title' => 'Copywright Information',
                    'un_array' => true,
                    'fields' => array(
                        array(
                            'id' => 'copytext',
                            'type' => 'text',
                            'title' => 'Copy Wright',
                        ),
                        array(
                            'id' => 'copytextsize',
                            'type' => 'number',
                            'title' => 'Font Size',
                        ),
                        array(
                            'id' => 'copytextcoler',
                            'type' => 'color_picker',
                            'title' => 'Copy text coler',
                        ),
                        array(
                            'id' => 'ancoretextcoler',
                            'type' => 'color_picker',
                            'title' => 'Copy ancore text coler ',
                        ),
                    ),
                ),
                array(
                    'id' => 'footersorter',
                    'type' => 'fieldset',
                    'title' => 'Section Sorter',
                    'un_array' => true,
                    'fields' => array(
                        array(
                            'id' => 'ftrsorter',
                            'type' => 'sorter',
                            'title' => 'Sorter',
                            'default' => array(
                                'enabled' => array(
                                ),
                                'disabled' => array(
                                    'services' => 'Services',
                                    'otherservices' => 'Other Services',
                                    'welcome-sec' => 'Welcome',
                                    'testimonials' => 'Testimonials',
                                    'gallery' => 'Gallery',
                                    'form' => 'Form',
                                    'doublegrid' => 'Double Grid',
                                ),
                            ),
                        ),
                    ),
                ),
            )
        ),
    ),
);

// ------------------------------
// Inner Page                  -
// ------------------------------
$options[] = array(
    'name' => 'Inner_Page',
    'title' => 'Inner Page',
    'icon' => 'fa fa-info-circle',
    'fields' => array(
        array(
            'id' => 'innertitle',
            'type' => 'upload',
            'title' => 'Title Image',
        ),
    )
);

// ------------------------------
// Blog                     -
// ------------------------------
$options[] = array(
    'name' => 'Blog_Section',
    'title' => 'Blog Section',
    'icon' => 'fa fa-info-circle',
    'fields' => array(
        array(
            'id' => 'comingsong',
            'type' => 'switcher',
            'title' => 'Coming Soon',
            'default' => true
        ),
        array(
            'id' => 'cumingsunnimage',
            'type' => 'upload',
            'title' => 'Coming Soon',
        ),
        array(
            'id' => 'blog-desc',
            'type' => 'wysiwyg',
            'title' => 'Blog page desc',
        ),
    )
);

// ------------------------------
// license                      -
// ------------------------------
$options[] = array(
    'name' => 'Advance_Section',
    'title' => 'Advance Section',
    'icon' => 'fa fa-info-circle',
    'fields' => array(
        array(
            'type' => 'heading',
            'content' => '100% GPL License, Yes it is free!'
        ),
        array(
            'id' => 'keyword',
            'type' => 'text',
            'title' => 'Main Key Word',
        ),
        array(
            'id' => 'businesstype',
            'type' => 'text',
            'title' => 'Business type For Schema',
        ),
    )
);

CSFramework::instance($settings, $options);
