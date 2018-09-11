<section id="topheader" class="topheader d-none d-lg-block">
    <div class="container-fluid">
        <div class="row">
            <div id="header-email" class="col-lg-3">
                <img src="<?php echo get_template_directory_uri() ?>/img/email-icon.png"                                                     
                     alt="<?php echo $yeasfe['alt_txt']; ?> email" class="baneremail hedcomon" aria-hidden="true"> 
                <a  href="mailto:<?php echo cs_get_option('email'); ?>"> <?php echo cs_get_option('email'); ?></a>  

            </div>
            <div id="header-phone" class="col-lg-3">
                <div id="top-phone" class="col">
                    <img src="<?php echo get_template_directory_uri() ?>/img/phone-icon.png"                                                     
                         alt="<?php echo cs_get_option('keyword'); ?> phone" class="banerphone hedcomon" aria-hidden="true"> 
                    <a  href="tel:<?php echo cs_get_option('mobile_number'); ?>">   <?php echo cs_get_option('mobile_number'); ?>  </a> <span class="mobtel" >or
                        <a  href="tel:<?php echo cs_get_option('phone_number'); ?>">   <?php echo cs_get_option('phone_number'); ?>  </a> </span> 
                </div> 
            </div>
            <div id="header-social" class="col-lg-3">
                <?php get_template_part('social-media'); ?>
            </div>
            <div id="top-header-menu" class="col-lg-3">
                <?php
                wp_nav_menu(array(
                    'menu' => 'topmenu',
                    'theme_location' => 'topmenu',
                    'container_id' => 'cssmenu',
                    'walker' => new CSS_Menu_Walker()
                ));
                ?>
            </div>
        </div>
    </div>
</section>
<section id="sticker" class="header-top-area">
    <div class="container-fluid">
        <div class="row">
            <div id="logo-area" class="col-md-12 col-lg-3 col-sm-12">
                <?php if (cs_get_option('logo_upload')) : ?>
                    <a href='<?php echo esc_url(home_url('/')); ?>' >
                        <img class="img-fluid logo " src='<?php echo cs_get_option('logo_upload') ?>' alt='<?php echo esc_attr(get_bloginfo('name', 'display')); ?> Logo'>
                    </a>
                <?php endif; ?>
            </div>                             

            <div id="menu-sec" class="col-lg-9 d-none d-lg-block">
                        <?php
                        wp_nav_menu(array(
                            'menu' => 'mainmenu',
                            'theme_location' => 'mainmenu',
                            'container_id' => 'cssmenu',
                            'walker' => new CSS_Menu_Walker()
                        ));
                        ?>
                    </div>
                </div>
            </div>
</section>

