<?php
$image_id = cs_get_option('address_image');
$addrsimg = wp_get_attachment_image_src($image_id, 'full');
$image_id = cs_get_option('phone_image');
$phoneimg = wp_get_attachment_image_src($image_id, 'full');
$image_id = cs_get_option('email_image');
$emailimg = wp_get_attachment_image_src($image_id, 'full');

$mwta = cs_get_option('keyword');
?>
<div class="socialsection">
    <div class="container">        
        <div class="row">      
            <div class="col-1"></div>
            <?php
            $group_items = cs_get_option('socialmediaa');

            //var_dump( $group_items ); // see all.
            if (!empty($group_items)) {

                foreach ($group_items as $item) {
                    //var_dump( $item );// has title
                    $link = !empty($item['smolink']) ? $item['smolink'] : '';
                    $icon = !empty($item['smicon']) ? $item['smicon'] : '';
                    $imagesm = !empty($item['smimg']) ? $item['smimg'] : '';
                    $socialimg = wp_get_attachment_image_src($imagesm, 'full');
                    $title = !empty($item['smotitle']) ? $item['smotitle'] : '';
                    if (!empty($icon)) {
                        echo '<div class="col"><a  target="_blank" href="' . $link . '">  <i class="' . $icon . '"> </i>  </a></div>';
                    } else {
                        echo '<div class="col"><a  target="_blank" href="' . $link . '"> <img class="socialimg" src="' . $socialimg[0] . '" alt="' . $mwta . '|' . $title . '"/>  </a></div>';
                    }
                }
            }
            ?>
            <div class="col-1"></div>
        </div>
    </div>
</div>

<section class="footer-section footer-widget-area footeropt3">
    <div class="container-fluid">        
        <div class="row">
            <div class="col-1"></div>
            <div class="col-md-12  col-lg-4 footer-add-sec">              
                <div id="footer-logo" class="col-12 foot-com">
                    <?php if (cs_get_option('footer_logo')) : ?>
                        <a class="" href='<?php echo esc_url(home_url('/')); ?>' >
                            <img class="img-fluid logo " src='<?php echo cs_get_option('footer_logo'); ?>' alt='<?php echo esc_attr(get_bloginfo('name', 'display')); ?> Logo'>
                        </a>
                    <?php endif; ?>

                    <div class="text-copy">&copy; <?php echo the_date('Y'); ?><span> <?php echo cs_get_option('copytext'); ?>.
                            All Rights Reserved.</span><span class="dtb"> <img src="<?php echo get_template_directory_uri(); ?>/img/BeLocal-icon.png" alt="<?php echo cs_get_option('keyword'); ?> belocal icon"> Digital Transformation by 
                            <a target="_blank" href="http://belocal.today">BeLocal Today</a></span>
                    </div>
                </div>

            </div>

            <div class="col-md-12  col-lg-3 footer-add-sec">
                <div class="row">
                    <div class="col-md-12 col-lg-2">
                        <img src="<?php echo $addrsimg[0]; ?>"                                                     
                             alt="<?php echo cs_get_option('keyword'); ?> address" class="banerphone" aria-hidden="true"> 
                    </div>
                    <div class="col-md-12 col-lg-10 align-self-center pl-0">
                        <?php echo cs_get_option('streetaddress'); ?> </br>
                        <?php echo cs_get_option('addresslocality'); ?> 
                        <?php echo cs_get_option('addressregion'); ?> 
                        <?php echo cs_get_option('postalcode'); ?> 

                    </div>
                </div>               
                <div class="row">
                    <div class="col-md-12 col-lg-2">
                        <img src="<?php echo $emailimg[0]; ?>"                                                     
                             alt="<?php echo cs_get_option('keyword'); ?> email" class="banerphone" aria-hidden="true"> 
                    </div>
                    <div class="col-md-12 col-lg-10 align-self-center pl-lg-0">
                        <a class="email-footer"  href="mailto:<?php echo cs_get_option('email'); ?>">  <?php echo cs_get_option('email'); ?>  </a> 
                    </div>
                </div>
                <div class="row phone ">
                    <div class="col-md-12 col-lg-2 d-none d-lg-block">
                        <img src="<?php echo $phoneimg[0]; ?>"                                                     
                             alt="<?php echo cs_get_option('keyword'); ?> Phone" class="baneremail hedcomon" aria-hidden="true"> 
                    </div>
                    <div class="col-md-12 col-lg-10 align-self-center pl-lg-0 d-none d-lg-block">
                        <a  href="tel:<?php echo cs_get_option('phone'); ?>">   <?php echo cs_get_option('phone'); ?>  </a> 
                    </div>
                </div>

                <div class="row phone d-md-block d-lg-none">
                    <div class="col-md-12 col-lg-10 align-self-center pl-lg-0">
                        <a class="tap-t-cl" href="tel:<?php echo cs_get_option('phone'); ?>"> Call </a>
                    </div>
                </div>
            </div>
            <div class="col-md-12  col-lg-3 footer-menu d-none d-lg-block">
                <?php
                wp_nav_menu(array(
                    'menu' => 'footer',
                    'theme_location' => 'footer',
                    'container_id' => 'footermenu',
                        // 'walker' => new CSS_Menu_Walker()
                ));
                ?>
            </div>
            <div class="col-1"></div>

        </div>

</section>




<style>
    .footer-social li {
        display: inline-block;
        margin: 5px 12px;     
        text-align: center;
        width: 40px;
        height: 40px;
        border-top-left-radius: 20px;
        border-bottom-right-radius: 20px;
    }
    .footer-social li i{
        display: block;
        padding:10px;
    }


    section.copyright-section {
        padding:20px 0;
        background: #fff;
        color: #000;
    }

    section.copyright-section a{    color: #263e92;    font-weight: 600;}


    div#footer-phone{
        color: #0083ca;    
        margin-bottom: 20px;
    }
    div#footer-phone a {
        font-size: 18px;
        font-weight: 600;
        color: #000;
    }

    .footer-add-sec .row {
        padding:15px 0;
    }
    .footer-add-sec .phone  a{
        color:#f47d1f;
    }
    .copyright-section #cssmenu a{color: #fff; padding: 0; text-transform: capitalize; font-size: 0.6em;}
    .copyright-section #cssmenu a:hover, .copyright-section .current-menu-item a{color: #fca200 !important;}

    section.mobile-bottom {
        position: fixed;
        bottom: 0;
        width: 100%;
        background: #170a0a;
        z-index:7777;
        text-align: center; 
        height: 45px;
    }

    a.btm-cl, a.btm-eml{
        font-size: 24px;
        padding: 5px;
        color: #fff;
        font-weight: 600;
        display: block;
        transition: 0.2s;
        -webkit-transition: 0.2s;
        width: 50%;
        float: left;
    }
    div#call {
        border-right: 1px solid;
    }
    a.btm-cl:hover, a.btm-eml:hover{
        background: #fca200;
    }
    section#home-form {  position: relative;  z-index: 8888;}
</style>