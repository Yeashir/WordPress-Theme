<?php

// Theme Setup
function yeasfi_setup() {
    add_theme_support('post-formats', array('aside', 'image', 'link', 'quote', 'status'));
    add_theme_support('custom-background', array('default-color' => 'e6e6e6',));
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    set_post_thumbnail_size(624, 9999); // Unlimited height, soft crop
}

add_action('after_setup_theme', 'yeasfi_setup');
//Framework Setup
/**
 *
 * Codestar Framework
 * A Lightweight and easy-to-use WordPress Options Framework
 *
 */
require_once get_template_directory() . '/cs-framework/cs-framework.php';

// -( or )-
// require_once get_template_directory() .'/subfolder/cs-framework/cs-framework.php';

/**
 * Filter the page title.
 */
function yeasfi_wp_title($title, $sep) {
    global $paged, $page;
    if (is_feed())
        return $title;
    // Add the site name.
    $title .= get_bloginfo('name', 'display');
    // Add the site description for the home/front page.
    $site_description = get_bloginfo('description', 'display');
    if ($site_description && ( is_home() || is_front_page() ))
        $title = "$title $sep $site_description";
    // Add a page number if necessary.
    if (( $paged >= 2 || $page >= 2 ) && !is_404())
        $title = "$title $sep " . sprintf(__('Page %s', 'yeasfi'), max($paged, $page));
    return $title;
}

add_filter('wp_title', 'yeasfi_wp_title', 10, 2);

/**
 * Filter the page menu arguments.
 * 
 */
function yeasfi_page_menu_args($args) {
    if (!isset($args['show_home']))
        $args['show_home'] = true;
    return $args;
}

add_filter('wp_page_menu_args', 'yeasfi_page_menu_args');

function menu_setup() {
    register_nav_menu('topmenu', __('Top Menu', 'yeasfi'));
    register_nav_menu('mainmenu', __('Main Menu', 'yeasfi'));
    register_nav_menu('footer', __('Footer Menu', 'yeasfi'));
    register_nav_menu('service', __('Service Menu', 'yeasfi'));
}

add_action('after_setup_theme', 'menu_setup');

/**
 * Register sidebars.
 *
 */
function yeasfi_widgets_init() {
    register_sidebar(array(
        'name' => __('Inner Page Form Widget'),
        'id' => 'inner-form-widget',
        'description' => __('Appears in the Inner Page Form Widget Area of the site.'),
        'before_title' => '<h3 class="inner-form-widget-titel">',
        'after_title' => '</h3>',
    ));
}

add_action('widgets_init', 'yeasfi_widgets_init');

// Style registration
function yeasfi_css() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', 'all');
    wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.css', 'all');
    wp_enqueue_style('owlcss', get_template_directory_uri() . '/css/owl.carousel.css', 'all');
    wp_enqueue_style('responsive', get_template_directory_uri() . '/css/responsive.css', 'all');
    wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900|Open+Sans:300,400,700,800');
    wp_enqueue_style('icon', get_template_directory_uri() . '/css/font-awesome.css', 'all');
    wp_enqueue_style('fancybox', get_template_directory_uri() . '/css/jquery.fancybox.min.css', 'all');
    wp_enqueue_style('unite-gallery', get_template_directory_uri() . '/css/unite-gallery.css', 'all');
    wp_enqueue_style('slider', get_template_directory_uri() . '/css/slider.css', 'all');
    wp_enqueue_style('menu', get_template_directory_uri() . '/cssmenu/menu.css', 'all');
    wp_enqueue_style('3dgallery', get_template_directory_uri() . '/css/3dgallery.css', 'all');
}

add_action('wp_enqueue_scripts', 'yeasfi_css');

// Scripts registration
function yeasfi_scripts() {
    $js_path = esc_url(get_template_directory_uri() . '/js/');
    $deps = array('jquery');
    wp_enqueue_script('jquery');
    wp_enqueue_script('tether', $js_path . 'tether.min.js', $deps, '', true);
    wp_enqueue_script('bootstrap', $js_path . 'bootstrap.min.js', $deps, '', true);
    wp_enqueue_script('woo', $js_path . 'wow.min.js', $deps, '', true);
    wp_enqueue_script('owl', $js_path . 'owl.carousel.min.js', $deps, '', true);
    wp_enqueue_script('fancybox', $js_path . 'jquery.fancybox.min.js', $deps, '', true);
    wp_enqueue_script('unitegallery', $js_path . 'unitegallery.min.js', $deps, '', true);
    wp_enqueue_script('ugtilegrid', $js_path . 'ug-theme-tilesgrid.js', $deps, '', true);
    wp_enqueue_script('ugtile', $js_path . 'ug-theme-tiles.js', $deps, '', true);
    wp_enqueue_script('unitegallery-caro', $js_path . 'ug-theme-carousel.js', $deps, '', true);
    wp_enqueue_script('faq', $js_path . 'jquery.simpleFAQ.js', $deps, '', true);
    wp_enqueue_script('main', $js_path . 'classie.js', $deps, '', true);
    wp_enqueue_script('galleryimain', $js_path . 'jquery.gallery.js', $deps, '', true);
    wp_enqueue_script('custom53451', $js_path . 'modernizr.custom.53451.js', $deps, '', true);

    
    
    
}

add_action("wp_enqueue_scripts", "yeasfi_scripts");

if (!function_exists('yeasfi_entry_meta')) :

    /**
     * Set up post entry meta.
     *     
     */
    function yeasfi_entry_meta() {
        // Translators: used between list items, there is a space after the comma.
        $categories_list = get_the_category_list(__(', ', 'yeasfi'));

        // Translators: used between list items, there is a space after the comma.
        $tag_list = get_the_tag_list('', __(', ', 'yeasfi'));

        $date = sprintf('<a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s">%4$s</time></a>', esc_url(get_permalink()), esc_attr(get_the_time()), esc_attr(get_the_date('c')), esc_html(get_the_date())
        );

        $author = sprintf('<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s" rel="author">%3$s</a></span>', esc_url(get_author_posts_url(get_the_author_meta('ID'))), esc_attr(sprintf(__('View all posts by %s', 'yeasfi'), get_the_author())), get_the_author()
        );

        // Translators: 1 is category, 2 is tag, 3 is the date and 4 is the author's name.
        if ($tag_list) {
            $utility_text = __('This entry was posted in %1$s and tagged %2$s on %3$s<span class="by-author"> by %4$s</span>.', 'yeasfi');
        } elseif ($categories_list) {
            $utility_text = __('This entry was posted in %1$s on %3$s<span class="by-author"> by %4$s</span>.', 'yeasfi');
        } else {
            $utility_text = __('This entry was posted on %3$s<span class="by-author"> by %4$s</span>.', 'yeasfi');
        }

        printf(
                $utility_text, $categories_list, $tag_list, $date, $author
        );
    }

endif;

function yeasfi_customize_register($wp_customize) {
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport = 'postMessage';
    $wp_customize->get_setting('header_textcolor')->transport = 'postMessage';
}

add_action('customize_register', 'yeasfi_customize_register');


/* logo uploder function */

function themeslug_theme_customizer($wp_customize) {
    // Fun code will go here
    $wp_customize->add_section('themeslug_logo_section', array(
        'title' => __('Logo', 'themeslug'),
        'priority' => 30,
        'description' => 'Upload a logo to replace the default site name and description in the header',
    ));

    $wp_customize->add_setting('themeslug_logo');
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'themeslug_logo', array(
        'label' => __('Logo', 'themeslug'),
        'section' => 'themeslug_logo_section',
        'settings' => 'themeslug_logo',
    )));
}

add_action('customize_register', 'themeslug_theme_customizer');

// Auto image responsive Class image
function image_tag_class($class) {
    $class .= ' img-responsive';
    return $class;
}

add_filter('get_image_tag_class', 'image_tag_class');

add_filter('post_thumbnail_html', 'remove_width_attribute', 10);
add_filter('image_send_to_editor', 'remove_width_attribute', 10);

function remove_width_attribute($html) {
    $html = preg_replace('/(width|height)="\d*"\s/', "", $html);
    return $html;
}

// Register Relevant Services

add_action('init', 'create_post_type_service');

function create_post_type_service() {

    $labels = array(
        'name' => 'Services',
        'all_items' => 'All Item',
        'singular_name' => 'Add New Item',
    );

    $args = array(
        'labels' => $labels,
        'publicly_queryable' => true,
        'show_in_menu' => true,
        'exclude_from_search' => true,
        'menu_position' => null,
        'public' => true,
        'menu_class' => 'wp-menu-image dashicons-before dashicons-admin-comments',
        'has_archive' => true,
        'query_var' => true,
        'show_ui' => true,
        'menu_position' => 18,
        'menu_icon' => 'dashicons-admin-customizer',
        'description' => 'Description for Signature Dishes',
        'query_var' => true,
        'can_export' => true,
        'show_in_nav_menus' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => true,
        'supports' => array('title', 'editor', 'thumbnail')
    );

    register_post_type('service', $args);
}

function register_srv_icon_metabox() {
    $prefix = '_brancheprefix_';

    $cmb_branche = new_cmb2_box(array(
        'id' => 'srv-icon',
        'title' => __('Service Icon', 'cmb2'),
        'object_types' => array('service'),
    ));

    $cmb_branche->add_field(array(
        'id' => 'srv-iconset',
        'name' => 'Uplode Product Icon',
        'default' => '',
        'type' => 'file'
    ));
}

;
add_action('cmb2_admin_init', 'register_srv_icon_metabox');

// We Provide


function register_pageicon_metabox() {
    $prefix = '_pageicon_';

    $cmb_branche = new_cmb2_box(array(
        'id' => 'page-icon',
        'title' => __('Icon/Image For This page', 'cmb2'),
        'object_types' => array('page'),
    ));

    $cmb_branche->add_field(array(
        'id' => 'page-iconset',
        'name' => 'Uplode Your Icon/Image',
        'default' => '',
        'type' => 'file'
    ));
    $cmb_branche->add_field(array(
        'id' => 'page-img',
        'name' => 'Uplode Your Icon/Image',
        'default' => '',
        'type' => 'file'
    ));
}

;
add_action('cmb2_admin_init', 'register_pageicon_metabox');




add_action('init', 'create_post_type_ourteam');

function create_post_type_ourteam() {

    $labels = array(
        'name' => 'Our Team',
        'all_items' => 'All Item',
        'singular_name' => 'Add A Item',
    );

    $args = array(
        'labels' => $labels,
        'publicly_queryable' => true,
        'show_in_menu' => true,
        'exclude_from_search' => true,
        'menu_position' => null,
        'public' => true,
        'menu_class' => 'wp-menu-image dashicons-before dashicons-admin-comments',
        'has_archive' => true,
        'query_var' => true,
        'show_ui' => true,
        'menu_position' => 20,
        'menu_icon' => 'dashicons-format-status',
        'description' => 'Description for Signature Dishes',
        'query_var' => true,
        'can_export' => true,
        'show_in_nav_menus' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => true,
        'supports' => array('title', 'editor', 'thumbnail')
    );

    register_post_type('ourteam', $args);
}

function register_ourteam_designation_metabox() {
    $prefix = '_ourteam_';

    $cmb_branche = new_cmb2_box(array(
        'id' => 'designation',
        'title' => __('Designation', 'cmb2'),
        'object_types' => array('ourteam'),
    ));

    $cmb_branche->add_field(array(
        'id' => 'designation',
        'name' => 'Designation',
        'default' => '',
        'type' => 'text'
    ));
}

;
add_action('cmb2_admin_init', 'register_ourteam_designation_metabox');



// Testmonial

add_action('init', 'create_post_type_testimonial');

function create_post_type_testimonial() {

    $labels = array(
        'name' => 'Testimonial',
        'all_items' => 'All Testimonial',
        'singular_name' => 'Add New Testimonial',
    );

    $args = array(
        'labels' => $labels,
        'publicly_queryable' => true,
        'show_in_menu' => true,
        'exclude_from_search' => true,
        'menu_position' => null,
        'public' => true,
        'menu_class' => 'wp-menu-image dashicons-before dashicons-admin-comments',
        'has_archive' => true,
        'query_var' => true,
        'show_ui' => true,
        'menu_position' => 19,
        'menu_icon' => 'dashicons-format-status',
        'description' => 'Description for Signature Dishes',
        'query_var' => true,
        'can_export' => true,
        'show_in_nav_menus' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields')
    );

    register_post_type('testimonial', $args);
}

// FAQ

add_action('init', 'create_post_type_faqs');

function create_post_type_faqs() {

    $labels = array(
        'name' => 'FAQs',
        'all_items' => 'All FAQs',
        'singular_name' => 'Add New FAQ',
    );

    $args = array(
        'labels' => $labels,
        'publicly_queryable' => true,
        'show_in_menu' => true,
        'exclude_from_search' => true,
        'menu_position' => null,
        'public' => true,
        'menu_class' => 'wp-menu-image dashicons-before dashicons-admin-comments',
        'has_archive' => true,
        'query_var' => true,
        'show_ui' => true,
        'menu_position' => 21,
        'menu_icon' => 'dashicons-editor-help',
        'description' => 'Description for Signature Dishes',
        'query_var' => true,
        'can_export' => true,
        'show_in_nav_menus' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields')
    );

    register_post_type('faqs', $args);
}

function create_faqs_taxonomies() {
    $labels = array(
        'name' => _x('Categories', 'taxonomy general name'),
        'singular_name' => _x('Category', 'taxonomy singular name'),
        'search_items' => __('Search Categories'),
        'all_items' => __('All Categories'),
        'parent_item' => __('Parent Category'),
        'parent_item_colon' => __('Parent Category:'),
        'edit_item' => __('Edit Category'),
        'update_item' => __('Update Category'),
        'add_new_item' => __('Add New Category'),
        'new_item_name' => __('New Category Name'),
        'menu_name' => __('Categories'),
    );

    $args = array(
        'hierarchical' => true, // Set this to 'false' for non-hierarchical taxonomy (like tags)
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'categories'),
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post',
    );

    register_taxonomy('faqs_categories', array('faqs'), $args);
}

add_action('init', 'create_faqs_taxonomies');



//
// Gallary
//
//----------------------------------------------
//--------------add theme support for thumbnails
//----------------------------------------------
//----------------------------------------------
//----------register and label gallery post type
//----------------------------------------------
// Register Gallery

add_action('init', 'create_post_type_photo_gallery');

function create_post_type_photo_gallery() {

    $labels = array(
        'name' => 'Gallery',
        'all_items' => 'All Albums',
        'singular_name' => 'Add New Albums',
    );

    $args = array(
        'labels' => $labels,
        'publicly_queryable' => true,
        'show_in_menu' => true,
        'exclude_from_search' => true,
        'menu_position' => null,
        'public' => true,
        'menu_class' => 'wp-menu-image dashicons-before dashicons-admin-comments',
        'has_archive' => true,
        'query_var' => true,
        'show_ui' => true,
        'menu_position' => 27,
        'menu_icon' => 'dashicons-format-gallery',
        'description' => 'Description for Signature Dishes',
        'query_var' => true,
        'can_export' => true,
        'show_in_nav_menus' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => true,
        'supports' => array('title', 'custom-fields')
    );

    register_post_type('photo_gallery', $args);
}

function wp_get_attachment($attachment_id) {
    $attachment = get_post($attachment_id);
    return array(
        'alt' => get_post_meta($attachment->ID, '_wp_attachment_image_alt', true),
        'caption' => $attachment->post_excerpt,
        'description' => $attachment->post_content,
        'href' => get_permalink($attachment->ID),
        'src' => $attachment->guid,
        'title' => $attachment->post_title
    );
}

class CSS_Menu_Walker extends Walker {

    var $db_fields = array('parent' => 'menu_item_parent', 'id' => 'db_id');

    function start_lvl(&$output, $depth = 0, $args = array()) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul>\n";
    }

    function end_lvl(&$output, $depth = 0, $args = array()) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";
    }

    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {

        global $wp_query;
        $indent = ($depth) ? str_repeat("\t", $depth) : '';
        $class_names = $value = '';
        $classes = empty($item->classes) ? array() : (array) $item->classes;

        /* Add active class */
        if (in_array('current-menu-item', $classes)) {
            $classes[] = 'active';
            unset($classes['current-menu-item']);
        }

        /* Check for children */
        $children = get_posts(array('post_type' => 'nav_menu_item', 'nopaging' => true, 'numberposts' => 1, 'meta_key' => '_menu_item_menu_item_parent', 'meta_value' => $item->ID));
        if (!empty($children)) {
            $classes[] = 'has-sub';
        }

        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

        $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
        $id = $id ? ' id="' . esc_attr($id) . '"' : '';

        $output .= $indent . '<li' . $id . $value . $class_names . '>';

        $attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
        $attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
        $attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';

        $item_output = $args->before;
        $item_output .= '<a' . $attributes . '><span>';
        $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
        $item_output .= '</span></a>';
        $item_output .= $args->after;

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }

    function end_el(&$output, $item, $depth = 0, $args = array()) {
        $output .= "</li>\n";
    }

}

// Add Shortcode
function custom_shortcode() {
    ob_start();
    if (has_post_thumbnail()) {
        the_post_thumbnail('full');
    }
    $output = ob_get_clean();
    return '<div class="col-12 px-0 my-4 innerimage">'.$output.'</div>' ;
}

add_shortcode('image_withgrid', 'custom_shortcode');



// Add Shortcode
function innerpageimage_shortcode() {
    ob_start();
    if (has_post_thumbnail()) {
        the_post_thumbnail('full');
    }
    $output = ob_get_clean();
    return $output ;
}

add_shortcode('image_withoutgrid', 'innerpageimage_shortcode');



add_filter('frm_scroll_offset', 'frm_scroll_offset');

function frm_scroll_offset() {
    return 200; //this will disable the autoscroll
}



function header_opt1() {
	do_action('header_opt1');
}

require_once get_template_directory() . '/template/header/header/hook.php';


