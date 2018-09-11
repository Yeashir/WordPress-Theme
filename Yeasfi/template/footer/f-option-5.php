<?php
$image_id = cs_get_option('address_image');
$addrsimg = wp_get_attachment_image_src($image_id, 'full');
$image_id = cs_get_option('phone_image');
$phoneimg = wp_get_attachment_image_src($image_id, 'full');
$image_id = cs_get_option('email_image');
$emailimg = wp_get_attachment_image_src($image_id, 'full');
?>

<section class="footeroption5 contuctinfosection">
    <div class="container">        
        <div class="row">
            <div class="col-md-12  col-lg-3 footer-add-sec footer-seccomon">

                <div id="footer-address" class="col-12 foot-com">                    
                    <div class="col-12 align-self-center insetborder">
                        <h2>Address</h2>
                        <a  href="<?php echo cs_get_option('maplink'); ?>">
                            <?php echo cs_get_option('streetaddress'); ?> 
                            <?php echo cs_get_option('addresslocality'); ?> 
                            <?php echo cs_get_option('addressregion'); ?> 
                            <?php echo cs_get_option('postalcode'); ?> 
                        </a> 
                    </div>
                    <img src="<?php echo $addrsimg[0]; ?>"  alt="<?php echo cs_get_option('keyword'); ?> Phone" class="banerphone" aria-hidden="true"> 
                </div>
            </div>

            <div class="col-md-12  col-lg-3 footer-email-sec footer-seccomon">

                <div id="footer-phone" class="col-12 d-none  d-lg-block foot-com">                    
                    <div class="col-12 align-self-center insetborder">
                        <h2>Phone</h2>
                        <a  href="tel:<?php echo cs_get_option('phone'); ?>">   <?php echo cs_get_option('phone'); ?>  </a> 
                    </div>
                    <img src="<?php echo $phoneimg[0]; ?>"                                                     
                         alt="<?php echo cs_get_option('keyword'); ?> Phone" class="banerphone" aria-hidden="true"> 
                </div>
            </div>


            <div class="col-md-12  col-lg-3 footer-email-sec footer-seccomon">

                <div id="footer-email" class="col-12 foot-com">
                    <div class="col-12 align-self-center insetborder ">
                        <h2>Email</h2> 
                        <a  href="mailto:<?php echo cs_get_option('email'); ?>">  <?php echo cs_get_option('email'); ?>  </a> 
                    </div>
                    <img src="<?php echo $emailimg[0]; ?>"                                                     
                         alt="<?php echo cs_get_option('keyword'); ?> email" class="banerphone" aria-hidden="true"> 
                </div>
            </div> 


            <div class="col-md-12  col-lg-3 footeropenhour footer-seccomon">

                <div id="footer-opg" class="col-12 foot-com">                   
                    <div class="col-12 align-self-center insetborder">
                        <h2>Business Hours</h2>
                        <?php echo cs_get_option('openinghour'); ?>
                    </div>
                    <img src="<?php echo $emailimg[0]; ?>"                                                     
                         alt="<?php echo cs_get_option('keyword'); ?> email" class="banerphone" aria-hidden="true">
                </div>

            </div>
        </div>
</section>
<section class="footer-section">
    <div class="container">
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
                            $imagesm = !empty($item['smimg']) ? $item['smimg'] : '';
                            $socialimg = wp_get_attachment_image_src($imagesm, 'full');
                            $title = !empty($item['smotitle']) ? $item['smotitle'] : '';
                            if (!empty($icon)) {
                                echo '<li><a  target="_blank" href="' . $link . '">  <i class="' . $icon . '"> </i>  </a></li>';
                            } else {
                                echo '<li><a  target="_blank" href="' . $link . '"> <img class="socialimg" src="' . $socialimg[0] . '" alt="' . $mwta . '|' . $title . '"/>  </a></li>';
                            }
                        }
                    }
                    ?>
                </ul>
            </div>
            
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
            
            <div class="col-md-12 copyright-text-srea text-center align-self-center">
                <div class="text-copy">&copy; <?php echo the_date('Y'); ?> <?php echo cs_get_option('copytext'); ?>.
                    All Rights Reserved.<span class="dtb"> <img src="<?php echo get_template_directory_uri(); ?>/img/belocal-logo.png" alt="<?php echo cs_get_option('keyword'); ?> belocal icon"> Digital Transformation by 
                        <a target="_blank" href="http://belocal.today">BeLocal Today</a></span>
                </div>
            </div>
        </div>
    </div>
</section>




<style>
    .text-copy a {
    color: #6e7fb5;
}
    .footer-social li {
        display: inline-block;
        margin:0 12px;
        margin-bottom: 0 !important;
        background: #fff;
        text-align: center;
        width:60px;
        height:60px;
        border-radius: 50%;
        border: 4px solid #ececec;
    }
    .footer-social li:last-child {border: none; position: relative;  top: -1px;}
    .footer-social li:last-child:hover {border: none; position: relative;  top: -1px;}

    .footer-social li i{
        display: block;
        padding: 16px;
        font-size: 20px;
    }
    .footer-social li:hover {background: #272324}
    .footer-social li .fa{ color: transparent; -webkit-text-stroke-width: 1px;   -webkit-text-stroke-color: #000;}
    .footer-social li:hover .fa{color: transparent; -webkit-text-stroke-color: #efe457;}

    div#header-social li:last-child {
        background: url(/wp-content/themes/yeasfi/img/google-review.png) no-repeat center;
    }

    section.copyright-section {
        padding:20px 0;
        background: #fff;
        color: #000;
    }

    section.copyright-section a{ color: #263e92;    font-weight: 600;}


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