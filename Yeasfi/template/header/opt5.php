<div id="sticker" class="navWrapper d-none d-lg-block">
    <div class="container-fluid">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <nav class="navbar">
                    <?php if (cs_get_option('logo_upload')) : ?>
                        <a class="navbar-brand" href='<?php echo esc_url(home_url('/')); ?>' >
                            <img class="img-fluid logo " src='<?php echo cs_get_option('logo_upload') ?>' alt='<?php echo esc_attr(get_bloginfo('name', 'display')); ?> Logo'>
                        </a>
                    <?php endif; ?>

                    <div class="navbar-toggler navbar-toggle" data-toggle="collapse" data-target="#toogle-navbar">
                        Menu <i class="fa fa-list-ul" aria-hidden="true"></i>
                    </div>
                    <div class="collapse navbar-collapse" id="toogle-navbar">
                        <?php
                        wp_nav_menu(array(
                            'menu' => 'mainmenu',
                            'theme_location' => 'mainmenu',
                            'container_id' => 'cssmenu',
                            'walker' => new CSS_Menu_Walker()
                        ));
                        ?>
                    </div>
                </nav>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
</div>
<script>
//    jQuery(document).ready(function ($) {
//        $('.fa-bars').click(function () {
//            $(this).toggleClass('fa-times');
//        });
//        $('<span class="open"><i class="fa fa-plus" aria-hidden="true"></i></span>').appendTo(".menu-item-has-children");
//        $('.open').click(function () {
//            $(this).siblings('.sub-menu').slideToggle("slow");
//        });
//        $('.fa-plus').click(function () {
//            $(this).toggleClass('fa-minus');
//        });
//    });

</script>

<style>
    div#toogle-navbar ul{width: 100%; }
    ul.sub-menu { height: 100% !important; width: 353px !important;}
    .navbar-toggler.navbar-toggle {color:#efe457; font-weight: 400;}
    div#toogle-navbar li a {color: #fff; padding:11px 20px; display: inline-block; font-weight: 400; font-size: 18px;}
    div#toogle-navbar li { list-style: none;  display: inline-block; text-align: center; color: #fff;    margin-bottom: 0 !important;}
    div#toogle-navbar li i{font-size: 11px;}
    ul.sub-menu li { background:#610004 !important;}
    ul.sub-menu ul li { background:  #ffd503 !important;}
    .sub-menu {display: none;}
</style>