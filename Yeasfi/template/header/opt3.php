<section id="topheader" class="topheader d-none d-lg-block">
    <div class="container">
        <div class="row">
            <div id="header-social"  class="col-lg-4 align-self-center text-left">
                <?php get_template_part('social-media'); ?>
            </div>

            <div id="logo-area"  class="col-lg-4 align-self-center text-center">
                <?php if (cs_get_option('logo_upload')) : ?>
                    <a href='<?php echo esc_url(home_url('/')); ?>' >
                        <img class="img-fluid logo " src='<?php echo cs_get_option('logo_upload') ?>' alt='<?php echo esc_attr(get_bloginfo('name', 'display')); ?> Logo'>
                    </a>
                <?php endif; ?>
            </div>

            <div id="header-phone" class="col-lg-4 align-self-center text-right">
                <?php
                //if (cs_get_option('phone_image')) : 
                $image_id = cs_get_option('phone_image');
                $attachment = wp_get_attachment_image_src($image_id, 'full');
                ?>
                <img src="<?php echo $attachment[0] ?>"                                                     
                     alt="<?php echo cs_get_option('keyword'); ?> phone" class="banerphone hedcomon" aria-hidden="true"> 
                     <?php //endif;  ?>

                <?php if (cs_get_option('mobile')) : ?>  <a  href="tel:<?php echo cs_get_option('mobile'); ?>">   <?php echo cs_get_option('mobile'); ?>  </a>
                    <span class="mobtel" >or <?php endif; ?>
                    <?php if (cs_get_option('phone')) : ?> 
                        <a  href="tel:<?php echo cs_get_option('phone'); ?>">   <?php echo cs_get_option('phone'); ?>  </a> 
                    <?php endif; ?>
                </span> 
            </div> 


        </div>
    </div>
</section>

<section id="top-header-menu" class="topheader d-none d-lg-block">
    <div class="container">
        <div class="row">
            <div  class="col-12">
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


