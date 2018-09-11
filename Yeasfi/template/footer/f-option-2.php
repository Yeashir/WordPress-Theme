<section class="footer-section footer-widget-area">
    <div class="container">        
        <div class="row">
            <div class="col-md-12  col-lg-4 footer-add-sec align-self-center">                              
                <div id="footer-adres" class="col-12 foot-com">  
                    <div class="row">
                        <div class="col-12 d-lg-block d-none">
                            <img src="<?php echo get_template_directory_uri() ?>/img/Location-Iocn.png"                                                     
                                 alt="<?php echo cs_get_option('keyword'); ?> address" class="banerphone" aria-hidden="true">

                        </div>
                        <div class="col-12 ">
                            <a target="_blank"  href="<?php echo cs_get_option('maplink'); ?>">   
                                <?php echo cs_get_option('streetaddress'); ?>
                                <?php echo cs_get_option('addresslocality'); ?></br>
                                <?php echo cs_get_option('addressregion'); ?>
                                <?php echo cs_get_option('postalcode'); ?> 
                            </a> 
                        </div>
                    </div>
                </div>

            </div>



            <div class="col-md-12  col-lg-4 bis-hour footer-add-sec  align-self-center">
                <div id="footer-email" class="col-12 foot-com ">
                    <div class="row">
                        <div class="col-12 d-lg-block d-none">
                            <img src="<?php echo get_template_directory_uri() ?>/img/footer-phone-icon.png"                                                     
                                 alt="<?php echo cs_get_option('keyword'); ?> phone" class="banerphone" aria-hidden="true"> 
                        </div>
                        <div class="col-12">                            
                            <div id="phone-footer" class=" col-12 d-lg-block d-none ">
                                <a    href="tel:<?php echo cs_get_option('phone'); ?>"><?php echo cs_get_option('phone'); ?></a>
                            </div>
                            <div id="email-footer" class=" col-12">
                                <a  href="mailto:<?php echo cs_get_option('email'); ?>">  <?php echo cs_get_option('email'); ?>  </a> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12  col-lg-4 footerlogo footer-add-sec align-self-center"> 
                <div class="col-12 foot-com footerlogo text-center ">
                    <?php if (cs_get_option('footer_logo')) : ?>
                        <a  href='<?php echo esc_url(home_url('/')); ?>' >
                            <img class="img-fluid logo " src='<?php echo cs_get_option('footer_logo'); ?>' alt='<?php echo esc_attr(get_bloginfo('name', 'display')); ?> Logo'>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>            
    </div>        
</section>



<section class="copyright-section" >
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="footer2social-sec">
                    <?php
                    $group_items = cs_get_option('socialmediaa');

                    //var_dump( $group_items ); // see all.
                    if (!empty($group_items)) {

                        foreach ($group_items as $item) {
                            //var_dump( $item );// has title
                            $link = !empty($item['smolink']) ? $item['smolink'] : '';
                            $icon = !empty($item['smicon']) ? $item['smicon'] : '';
                            $title = !empty($item['smotitle']) ? $item['smotitle'] : '';

                            echo '<li ><a class="align-self-center" target="_blank" href="' . $link . '"> <i class="' . $icon . '"> </i>  </a></li>';
                        }
                    }
                    ?>
                </ul>
            </div>


            <div class="col-12 copyright-text-srea text-center align-self-center">
                <div class="text-copy">&copy; <?php echo the_date('Y'); ?> <?php echo cs_get_option('copytext'); ?>.
                    All Rights Reserved. <img src="<?php echo get_template_directory_uri(); ?>/img/BeLocal-Logo.png" alt="<?php echo cs_get_option('keyword'); ?> belocal icon"> Digital Transformation by 
                    <a target="_blank" href="http://belocal.today">BeLocal Today</a>
                </div>
            </div>

        </div>

</section>



<style>
    .foot-com{border: 4px solid #e5e5e5;   border-radius: 50%;    text-align: center;  padding: 100px 0;  height: 350px;  }
    #footer-adres{padding: 100px 0;}
    div#footer-adres a {font-size: 24px; color: #000;}
    div#footer-adres img, #footer-email img {margin-bottom:20px;}
    #footer-email a{display: block;}
    div#phone-footer a { font-size: 24px;}
    div#footer-email{ padding: 105px 0;}
    .footer-menu {background: #f6f6f6;}
    .footer-menu #cssmenu a {color: #000; text-transform: capitalize;}
    .footer-menu  #cssmenu ul {text-align: center; }
    .footer-menu  ul#menu-main-menu li a:hover, .footer-menu  .current-menu-item a {color: #000 !important;}
    #cssmenu .current-menu-item { border-color: #000;}
    ul.footer2social-sec li {display: inline-block; margin: 10px; transition: 0.5s; -webkit-transition:0.5s;}
    ul.footer2social-sec {text-align: center; margin-bottom: 30px !important;}
    ul.footer2social-sec li i {font-size: 40px; color: #000; background: #fff; padding:30px 10px; width: 100px; height: 100px; border-radius: 50%; border: 4px solid transparent;}
    ul.footer2social-sec li:hover i{color: #14e420; border-color: #14e420;}    
    section.copyright-section .text-copy a{    font-weight: 600;  text-decoration: underline;}    
    .footer-social li {display: inline-block; margin: 5px 12px;background-image: linear-gradient(to right top, #f5f7f8, #eff2f4, #e8edef, #e2e7eb, #dce2e7);text-align: center; width: 40px;height: 40px;
                       border-radius: 50%;}
    .footer-social li i{display: block; padding:10px; }
    section.copyright-section {padding:60px 0; background: #000; color: #fff;}
    div#footer-address a, div#footer-email a {color: #000; font-weight: 600; }
    div#footer-address,div#footer-email{ margin-bottom: 10px; }
    div#footer-phone{color: #0083ca; margin-bottom: 20px;}
    div#footer-phone a {font-size: 24px; font-weight: 600; color: #18a94c; }
    .copyright-section #cssmenu a{color: #fff; padding: 0; text-transform: capitalize; font-size: 0.6em;}
    .copyright-section #cssmenu a:hover, .copyright-section .current-menu-item a{color: #fca200 !important;}
    div#call {border-right: 1px solid; }
    section#home-form {  position: relative;  z-index: 8888;}
</style>

