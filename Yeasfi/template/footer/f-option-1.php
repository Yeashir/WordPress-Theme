<?php
$image_id = cs_get_option('address_image');
$addrsimg = wp_get_attachment_image_src($image_id, 'full');
$image_id = cs_get_option('phone_image');
$phoneimg = wp_get_attachment_image_src($image_id, 'full');
$image_id = cs_get_option('email_image');
$emailimg = wp_get_attachment_image_src($image_id, 'full');
?>

<section class="footer-section footer-widget-area">
    <div class="container">        
        <div class="row">
            <div class="col-md-12  col-lg-4 footer-add-sec">

                <h2>Contact Us</h2>  
                <div class="row">
                    <div id="footer-address" class="col-12 foot-com">  
                        <div class="row">
                            <div class="col-md-12 col-lg-2">
                                <img src="<?php echo $addrsimg[0]; ?>"                                                     
                                     alt="<?php echo cs_get_option('keyword'); ?> Phone" class="banerphone" aria-hidden="true"> 
                            </div>
                            <div class="col-md-12 col-lg-10 align-self-center pl-0">
                                <a  href="<?php echo cs_get_option('maplink'); ?>">
                                    <?php echo cs_get_option('streetaddress'); ?> 
                                    <?php echo cs_get_option('addresslocality'); ?> 
                                    <?php echo cs_get_option('addressregion'); ?> 
                                    <?php echo cs_get_option('postalcode'); ?> 
                                </a> 
                            </div>
                        </div>
                    </div>
                    
                    <div id="footer-email" class="col-12 foot-com">
                        <div class="row">
                            <div class="col-md-12 col-lg-2">
                                <img src="<?php echo $emailimg[0]; ?>"                                                     
                                     alt="<?php echo cs_get_option('keyword'); ?> email" class="banerphone" aria-hidden="true"> 
                            </div>
                            <div class="col-md-12 col-lg-10 align-self-center pl-lg-0">
                                <a  href="mailto:<?php echo cs_get_option('email'); ?>">  <?php echo cs_get_option('email'); ?>  </a> 
                            </div>
                        </div>
                    </div> 
                    
                    <div id="footer-phone" class="col-12 d-none  d-lg-block foot-com">  
                        <div class="row">
                            <div class="col-md-12 col-lg-2">
                                <img src="<?php echo $phoneimg[0]; ?>"                                                     
                                     alt="<?php echo cs_get_option('keyword'); ?> Phone" class="banerphone" aria-hidden="true"> 
                            </div>
                            <div class="col-md-12 col-lg-10 align-self-center pl-lg-0">
                                <a  href="tel:<?php echo cs_get_option('phone'); ?>">   <?php echo cs_get_option('phone'); ?>  </a> 
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>

            <div class="col-md-12  col-lg-4 footerlogo footer-add-sec">
                <h2>Business Hours</h2>

                <div class="row">
                    <div class="col-12 footerlogo">
                        <?php //if (cs_get_option('footer_logo')) :  ?>
<!--                            <a class="mt-4" href='<?php echo esc_url(home_url('/')); ?>' >
                                <img class="img-fluid logo " src='<?php echo cs_get_option('footer_logo'); ?>' alt='<?php echo esc_attr(get_bloginfo('name', 'display')); ?> Logo'>
                            </a>-->
                        <?php //endif;  ?>
                        <?php echo cs_get_option('openinghour'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 footer-social">
                        <ul class="social-sec-footer">
                            <?php
                            $group_items = cs_get_option('socialmediaa');

                            //var_dump( $group_items ); // see all.
                            if (!empty($group_items)) {

                                foreach ($group_items as $item) {
                                    //var_dump( $item );// has title
                                    $link = !empty($item['smolink']) ? $item['smolink'] : '';
                                    $icon = !empty($item['smicon']) ? $item['smicon'] : '';
                                    $title = !empty($item['smotitle']) ? $item['smotitle'] : '';

                                    echo '<li><a  target="_blank" href="' . $link . '"> <i class="' . $icon . '"> </i>  </a></li>';
                                }
                            }
                            ?>
                        </ul>
                    </div>

                </div>

            </div>

            <div class="col-md-12  col-lg-4 bis-hour footer-add-sec">
                <h2>Useful Links</h2>
                <div class="row">
                    <div class="col-12 footer-menu">
                        <?php
                        wp_nav_menu(array(
                            'menu' => 'footer',
                            'theme_location' => 'footer',
                            'container_id' => 'cssmenu',
                            'walker' => new CSS_Menu_Walker()
                        ));
                        ?>
                    </div>

                </div>
            </div>


        </div>            
    </div>        
</section>



<section class="copyright-section" >
    <div class="container">
        <div class="row">
            <div class="col-md-12 licench-text-srea text-center align-self-center">
                &copy; <?php echo the_date('Y'); ?> <?php echo cs_get_option('licenchtxt'); ?>
            </div>
            <div class="col-md-12 copyright-text-srea text-center align-self-center">
                <div class="text-copy">&copy; <?php echo the_date('Y'); ?> <?php echo cs_get_option('copytext'); ?>.
                    All Rights Reserved.<span class="dtb"> <img src="<?php echo get_template_directory_uri(); ?>/img/BeLocal-Logo.png" alt="<?php echo cs_get_option('keyword'); ?> belocal icon"> Digital Transformation by 
                        <a target="_blank" href="http://belocal.today">BeLocal Today</a></span>


                </div>
            </div>

        </div>

</section>

<section class="mobile-bottom d-md-block d-lg-none">


    <div class="col-6 p-0" id="call"><a  class="btm-cl align-self-center"  href="tel:<?php echo $yeasfe['phone1']; ?>">Call</a></div>
    <div class="col-6 p-0" id="eml"> <a class="btm-eml align-self-center" href="mailto:<?php echo cs_get_option('email'); ?>"> Email </a> </div>

</section>

<style>
    .footer-social li {
        display: inline-block;
        margin: 5px 12px;
        background: #263e92;
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

    div#header-social li:last-child {
        background: url(/wp-content/themes/yeasfi/img/google-review.png) no-repeat center;
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