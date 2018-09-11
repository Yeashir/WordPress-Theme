<div style="clear:both;"></div>
<section class="services-section blogstyle" >
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

                            <?php if ($pont % 2 == 0): ?>
                                <div id="srv-<?php echo $i; ?>" class="srv-srv-odevenblog  col-12">
                                    <div class="row ">                                                                                  
                                        <div class="col-lg-6 col-md-12 srvimage-left ">
                                            <img src="<?php echo $meta_data['image_2']; ?>" alt="<?php the_title(); ?> <?php echo $locality ?>"/>
                                        </div> 
                                        <div class="col-lg-6 col-md-12 srvtext-area-left srvtext-area-comon">
                                            <h2 class="white-text align-middle"><?php the_title(); ?></h2>  
                                            <?php echo wpautop(substr(get_the_content(), 0, 180)); ?>  
                                            <a class="holeancore" href="<?php echo get_permalink(); ?>">Read More</a>
                                        </div>  

                                    </div> 
                                </div>

                            <?php else: ?>
                                <div id="srv-<?php echo $i; ?>" class="srv-srv-odevenblog  col-12">
                                    <div class="row ">

                                        <div class="col-lg-6 col-md-12 srvtext-area-right srvtext-area-comon">
                                            <h2 class="white-text "><?php the_title(); ?> </h2>  
                                            <?php echo wpautop(substr(get_the_content(), 0, 180)); ?>
                                              <a class="holeancore" href="<?php echo get_permalink(); ?>">Read More</a>
                                        </div>  
                                        <div class="col-lg-6 col-md-12 srvimg-right">
                                            <img src="<?php echo $meta_data['image_2']; ?>" alt="<?php the_title(); ?> <?php echo $locality ?>"/>
                                          
                                        </div> 

                                    </div> 
                                </div>

                            <?php endif ?>
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
.blogstyle a.holeancore{position: relative; width: 200px;height:55px; top: 0; color: #000; font-size: 20px; border:1px solid #eaeaea; padding: 10px 15px; display: inline-block; margin-top: 10px;}
.srvtext-area-comon:hover a.holeancore{background: #efeff0;}
.srvtext-area-left{margin-top: 63px;}
.srvtext-area-comon {background: #fff;  padding: 7em 2em; box-shadow:0 2px 15px #dedede;  height: 400px; text-align: center;}
.srv-srv-odevenblog {margin-bottom: 60px;}
.srvimg-right img {margin-left: -114px !important; margin-top: 63px;}
.srvtext-area-right { position: relative;  z-index: 9999;}
h2.white-text{font-weight: 700;}
.srvtext-area-comon p {font-weight: 500;font-size: 18px;color: #000;}
</style>