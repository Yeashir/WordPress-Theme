<?php
add_action('header_opt1', 'display_header_image');
function display_header_image() {
    echo '<section id="sticker" class="header-top-area d-none d-lg-block">
    <div class="container-fluid">
        <div class="row"> 
            <div class="col-lg-1"></div>
            <div class="col-md-12 col-lg-10 customegrid"><div class="row"><a href="' . esc_url(home_url("/")) . '"> <img class="img-fluid logo" src="' . cs_get_option("logo_upload") . '" alt="' . esc_attr(get_bloginfo("name", "display")) . ' Logo"></a>'
    ;
}
