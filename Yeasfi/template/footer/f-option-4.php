<?php
$image_id = cs_get_option('address_image');
$addrsimg = wp_get_attachment_image_src($image_id, 'full');
$image_id = cs_get_option('phone_image');
$phoneimg = wp_get_attachment_image_src($image_id, 'full');
$image_id = cs_get_option('email_image');
$emailimg = wp_get_attachment_image_src($image_id, 'full');
$mwta = cs_get_option('keyword');
?>


<section class="footer-section footer-widget-area footeropt3">
    <div class="container">        
        <div class="row">
            <div class="col-12 title"> <h2><?php echo cs_get_option('maintitle'); ?></h2></div>
            <div class="col-12 address">
                <?php echo cs_get_option('streetaddress'); ?> <?php echo cs_get_option('addresslocality'); ?> <?php echo cs_get_option('addressregion'); ?> <?php echo cs_get_option('postalcode'); ?> 
            </div>
            <div class="col-12 phone_emailsec d-none d-lg-block">
                <div class="row">
                    <div class="col-md-12 col-lg-2 offset-lg-3 phone_email_img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/CONTACT-US-icon.png"                                                     
                             alt="<?php echo cs_get_option('keyword'); ?> Phone email" class="banerphone" aria-hidden="true"> 
                    </div>
                    <div class="col-md-12 col-lg-3 align-self-center phone_email_txt">
                        <a class="phone"  href="tel:<?php echo cs_get_option('phone'); ?>">   <?php echo cs_get_option('phone'); ?>  </a> 
                        <a class="email-footer"  href="mailto:<?php echo cs_get_option('email'); ?>">  <?php echo cs_get_option('email'); ?>  </a> 
                    </div>
                </div>
            </div>
            <div class="col-12">
                <ul class="socialmedia">
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
                                echo '<li class="align-self-center"><a   target="_blank" href="' . $link . '">  <i class="' . $icon . '"> </i>  </a></li>';
                            } else {
                                echo '<li><a  target="_blank" href="' . $link . '"> <img class="socialimg" src="' . $socialimg[0] . '" alt="' . $mwta . '|' . $title . '"/>  </a></li>';
                            }
                        }
                    }
                    ?>
                </ul>
            </div>

            <div class="col-12 border-foot"></div>
            <div class="col-md-12  col-lg-8 footer-add-sec">              
                <div id="footer-logo" class="col-12 foot-com">
                    <?php if (cs_get_option('footer_logo')) : ?>
                        <a class="" href='<?php echo esc_url(home_url('/')); ?>' >
                            <img class="img-fluid logo " src='<?php echo cs_get_option('footer_logo'); ?>' alt='<?php echo esc_attr(get_bloginfo('name', 'display')); ?> Logo'>
                        </a>
                    <?php endif; ?>
                    <div class="text-copy">&copy; <?php echo the_date('Y'); ?><span> <?php echo cs_get_option('copytext'); ?>.
                            All Rights Reserved.</span><span class="dtb"> <img src="<?php echo get_template_directory_uri(); ?>/img/BeLocal-logo.png" alt="<?php echo cs_get_option('keyword'); ?> belocal icon"> Digital Transformation by <a target="_blank" href="http://belocal.today">BeLocal Today</a></span>
                    </div>
                </div>
            </div>

            <div class="col-md-12  col-lg-4 footer-menu d-none d-lg-block">
                <?php
                wp_nav_menu(array(
                    'menu' => 'footer',
                    'theme_location' => 'footer',
                    'container_id' => 'footermenu',
                        // 'walker' => new CSS_Menu_Walker()
                ));
                ?>
            </div>
        </div>
</section>




<style>
    .title h2 {text-align: center;font-weight: 700;color: #fff;font-size: 55px;}
    .address {color: #fff;text-align: center;margin: 10px 0 30px 0;font-weight: 500;}
    .phone_email_txt { text-align: center;}
    .phone_email_img{text-align: right;}
    .phone_email_txt .phone{font-size: 40px; font-weight: 700; color: #ffd503;}
    .phone_email_img img {margin-top: 21px;}
    ul.socialmedia { text-align: center;}
    .socialmedia li { display: inline-block;  width: 60px;  height: 60px; background: #595959;  margin: 5px;}
    .socialmedia li:hover { background: #ed1c24;}
    .socialmedia li a {display: block;padding: 29%;}
    .socialmedia li a i { font-size: 20px;  color: #fff;}
</style>