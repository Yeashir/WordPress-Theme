<?php
$image_id = cs_get_option('address_image');
$addrsimg = wp_get_attachment_image_src($image_id, 'full');
$image_id = cs_get_option('phone_image');
$phoneimg = wp_get_attachment_image_src($image_id, 'full');
$image_id = cs_get_option('email_image');
$emailimg = wp_get_attachment_image_src($image_id, 'full');

$mwta = cs_get_option('keyword');
?>


<section class="footer-section footer-widget-area footeropt6">
    <div class="container">        
        <div class="row">
            <div class="col-md-12  col-lg-2 footer-add-sec">              
                <div id="footer-logo" class="foot-com">
                    <?php if (cs_get_option('footer_logo')) : ?>
                        <a class="" href='<?php echo esc_url(home_url('/')); ?>' >
                            <img class="img-fluid logo " src='<?php echo cs_get_option('footer_logo'); ?>' alt='<?php echo esc_attr(get_bloginfo('name', 'display')); ?> Logo'>
                        </a>
                    <?php endif; ?>                    
                </div>

            </div>
            <div class="col-md-12 col-lg-4 foot-com footermorecoctent">
                <?php echo cs_get_option('footerextatext'); ?>
            </div>
            <div class="col-md-12  col-lg-2 footer-menu d-none d-lg-block">
                <h2 class="footer-title">Others Page</h2>
                <?php
                wp_nav_menu(array(
                    'menu' => 'footer',
                    'theme_location' => 'footer',
                    'container_id' => 'footermenu',
                        // 'walker' => new CSS_Menu_Walker()
                ));
                ?>
            </div>
            <div class="col-md-12  col-lg-4 footer-add-sec">
                <h2 class="footer-title">Contact</h2>

                <div class="col-md-12 col-lg-12 align-self-center pl-0">
                    <?php echo cs_get_option('streetaddress'); ?> </br>
                    <?php echo cs_get_option('addresslocality'); ?> 
                    <?php echo cs_get_option('addressregion'); ?> 
                    <?php echo cs_get_option('postalcode'); ?> 

                </div>
                <div class="col-12 footerphone  align-self-center pl-lg-0 d-none d-lg-block">
                    <a  href="tel:<?php echo cs_get_option('phone'); ?>">   <?php echo cs_get_option('phone'); ?>  </a> 
                </div>

                <div class="col-12 align-self-center pl-lg-0 d-md-block d-lg-none ">
                    <a class="tap-t-cl" href="tel:<?php echo cs_get_option('phone'); ?>"> Call </a>
                </div>

                <div class="col-12 align-self-center pl-lg-0">
                    <a class="email-footer"  href="mailto:<?php echo cs_get_option('email'); ?>">  <?php echo cs_get_option('email'); ?>  </a> 
                </div> 
                <div class="col-12 align-self-center pl-lg-0 socialmedia">
                    <?php get_template_part('social-media', 'page') ?>
                </div>
                <div class="footer2ndlogo">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/fotter-qbcc-logo.png" alt="<?php echo cs_get_option('keyword'); ?> Footer Logo">
                    
                </div>

            </div>
            <div class="text-copy col-12">&copy; <?php echo the_date('Y'); ?><span> <?php echo cs_get_option('copytext'); ?>.
                    All Rights Reserved.</span><span class="dtb"> <img src="<?php echo get_template_directory_uri(); ?>/img/belocal.png" alt="<?php echo cs_get_option('keyword'); ?> belocal icon"> Digital Transformation by 
                    <a target="_blank" href="http://belocal.today">BeLocal Today</a></span>
            </div>
        </div>
    </div>
</section>




<style>    
    .footer-social li {display: inline-block; margin: 5px 12px; text-align: center; width: 40px; height: 40px; border-top-left-radius: 20px; border-bottom-right-radius: 20px; }
    .footer-social li i{display: block; padding:10px; }
    ul#menu-footer-menu li{display: block;}
    section.copyright-section {padding:20px 0;background: #fff;color: #000; }
    section.copyright-section a{color: #263e92; font-weight: 600;}
    div#footer-phone{color: #0083ca; margin-bottom: 20px; }
    div#footer-phone a { font-size: 18px;  font-weight: 600;  color: #000;  }
    .footer-add-sec .row {padding:15px 0; }
    .footer-add-sec .phone  a{color:#f47d1f;}
    .copyright-section #cssmenu a{color: #fff; padding: 0; text-transform: capitalize; font-size: 0.6em;}
    .copyright-section #cssmenu a:hover, .copyright-section .current-menu-item a{color: #fca200 !important;}
    section.mobile-bottom {position: fixed; bottom: 0; width: 100%; background: #170a0a;z-index:7777; text-align: center; height: 45px;}
    a.btm-cl, a.btm-eml{font-size: 24px; padding: 5px; color: #fff; font-weight: 600;display: block; transition: 0.2s; -webkit-transition: 0.2s; width: 50%;float: left;}
    div#call {border-right: 1px solid; }
    a.btm-cl:hover, a.btm-eml:hover{background: #fca200; }
    section#home-form {  position: relative;  z-index: 8888;}
    .text-copy a {color: #000; font-weight: 700;}
    .text-copy{text-align: center;  margin: 30px 0 0;  border-top: 1px solid #e0e0e0;  padding: 20px;}
</style>