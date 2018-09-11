<div style="clear:both;"></div>
<section class="services-section roundiconstyle" >
    <div class="container">
        <div class="row">           
            <div class="col-12">
                <h2 class="srv-titelaa"><?php
                    $words = explode(' ', cs_get_option('srvvicetitle', '', false));
                    $words[0] = $words[0];
                    $words[2] = '<span>' . $words[2] . '</span>';
                    $title = implode(' ', $words);
                    echo $title;

// echo cs_get_option(); 
                    ?> </h2>  
                <div class="row">

                    <?php
                    $pagename = cs_get_option('srvpage');
                    $i = 1;
                    $pont = 0;
                    $locality = cs_get_option('addresslocality');

                    foreach ($pagename as $page) {
                        $args = array('page_id' => $page);
                        $loop = new WP_Query($args);
                        while ($loop->have_posts()) : $loop->the_post();
                            $meta_data = get_post_meta(get_the_ID(), 'custom_page_options', true);
                            $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID, 'thumbnail'));
                            ?>

                            <div id="option7srv" class="col-md-6 col-lg-3 col-sm-12 service7">
                                <a class="" href="<?php echo get_permalink(); ?>">
                                    <div class="text-center srvimg">
                                        <img src="<?php echo $meta_data['image_2']; ?>" alt="<?php the_title(); ?> <?php echo $locality; ?>"/>
                                    </div>
                                    <div class="col-12 srv-txt">
                                        <h2 class="white-text"><?php the_title(); ?></h2>
                                    </div>
                                </a>
                            </div>
                            <?php
                        endwhile;
                        $i++;
                        $pont ++;
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
</section>
<style>
#option7srv .srvimg img { max-width: 100%;}
#option7srv .white-text {color: #000!important; font-size: 22px; font-weight: 600; text-align: center;}
#option7srv:hover .white-text {color: #352878!important; }
#option7srv .srv-txt {background: url(img/Illume-Solar-Lights-arrow.png) no-repeat center top;}
#option7srv:hover .srv-txt {background: url(img/Illume-Solar-Lights-hover.png)no-repeat center top;}
#option7srv .srv-txt {padding-top: 50px; padding-bottom: 30px;}
</style>