<section id="topheader" class="option4">
    <div class="container">
        <div class="row">
            <div class="col-12 sitetitle-sec">
                <h1 class="sitetitle"><?php
                    $site_title = get_bloginfo('name');
                    echo $site_title;
                    ?></h1>
                <h2 class="description"><?php
                    $site_description = get_bloginfo('description');
                    echo $site_description;
                    ?></h2>
            </div>
            <div class="col-12 translate"> <?php echo do_shortcode('[google-translator]'); ?></div>
            

        </div>
    </div>
</section>

<section id="mainmenu" class="topheader d-none d-lg-block option4">
    <div class="container">
        <div class="row">
            <div  class="col-12 menu">
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