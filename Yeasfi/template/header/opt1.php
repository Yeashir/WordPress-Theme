<section id="sticker" class="header-top-area d-none d-lg-block">
    <div class="container">
        <div class="row">            
            <div class="col-12 customegrid">
                <div class="row">
                    <div id="logo-area" class="col-md-12 col-lg-2 col-sm-12">
                        <?php if (cs_get_option('logo_upload')) : ?>
                            <a href='<?php echo esc_url(home_url('/')); ?>' >
                                <img class="img-fluid logo " src='<?php echo cs_get_option('logo_upload') ?>' alt='<?php echo esc_attr(get_bloginfo('name', 'display')); ?> Logo'>
                            </a>
                        <?php endif; ?>
                    </div>
                    <div id="top-menu" class="col-md-12 col-lg-10 d-none d-lg-block "> 
                        <div class="row">
                            <div class="col-md-12 stikyoff">
                                <div class="row"> 
                                    <div id="top-phone" class="col-lg-5"></div>
                                    <div id="top-phone" class="col">
                                        <img src="<?php echo get_template_directory_uri() ?>/img/call.png"                                                     
                                             alt="<?php echo cs_get_option('keyword'); ?> phone" class="banerphone hedcomon" aria-hidden="true"> 
                                        <a  href="tel:<?php echo cs_get_option('phone'); ?>">   <?php echo cs_get_option('phone'); ?>  </a>  
                                    </div>
                                    <div id="otherlogo" class="col">
                                        <div class="ul">
                                            <?php
                                            $group_items = cs_get_option('authorizecompany');
                                            if (!empty($group_items)) {
                                                foreach ($group_items as $item) {
                                                    $link = !empty($item['acurl']) ? $item['acurl'] : '';
                                                    $icon = !empty($item['acimg']) ? $item['acimg'] : '';
                                                    $acimg = wp_get_attachment_image_src($icon, 'full');
                                                    if (!empty($link)) {
                                                        echo '<li><a  target="_blank" href="' . $link . '"> <img class="socialimg" src="' . $acimg[0] . '" alt="' . $mwta . '|  Authorize Company"/>' . '</a></li>';
                                                    } else {
                                                        echo '<li><img class="socialimg" src="' . $acimg[0] . '" alt="' . $mwta . '|  Authorize Company Image"/> </a></li>';
                                                    }
                                                }
                                            }
                                            ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12  visible-lg visible-md">
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
                    </div> 
                </div>

            </div>
        </div>
</section>

<style>
    .stikyoff { padding: 20px 15px; }
    div#top-phone {position: relative; top: 5px;}
    div#header-email a{color: #000;}
    div#top-phone a {font-size: 29px; color: #020202; margin-left: 6px;font-weight: 400;}
    div#top-phone {text-align: center;}
    div#logo-area .logo {position: relative; left: 0; top: 0; }
    .logo {max-width: 100%; height: auto; width: auto; }
    #cssmenu .current-menu-item a{background: #000;color: #fff;}
    ul#menu-main-menu li a:hover, .current-menu-item a{    background: #000;}

</style>