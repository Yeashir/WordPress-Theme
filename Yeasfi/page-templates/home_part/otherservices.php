<?php
$pagename = cs_get_option('othersrvpage');
$i = 1;
$pont = 0;
$locality = cs_get_option('addresslocality');
?>
<div style="clear:both;"></div>
<section class="otherservices-section" >
    <div class="container-fluid">
        <div class="row">           
            <div class="col-12">
                <h2 class="srv-titelaa"><?php
                    $words = explode(' ', cs_get_option('othsrvvicetitle', '', false));
                    $words[0] = $words[0];
                    $words[2] = '<span>' . $words[2] . '</span>';
                    $title = implode(' ', $words);
                    echo $title;

// echo cs_get_option(); 
                    ?> </h2>  
                <div class="row"> 
                    <?php
                    foreach ($pagename as $page) {
                        $args = array('page_id' => $page);
                        $loop = new WP_Query($args);
                        while ($loop->have_posts()) : $loop->the_post();
                            $meta_data = get_post_meta(get_the_ID(), 'custom_page_options', true);
                            $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID, 'thumbnail'));
                            ?>

                            <?php if (cs_get_option('othersrvstyle') == 'opt1') { ?>
                                <div class="col-md-6 col-lg-4 col-sm-12">
                                    <div class="col-12 services-section-singel">
                                        <div class="row"> 
                                            <div class="col-3 text-center srvimg">
                                                <div id="sdssd<?php echo $i; ?>" class="col-12 sdssd"></div>
                                            </div>
                                            <div class="col-9 srv-txt">
                                                <h2 class="white-text"><?php the_title(); ?></h2>
                                                <span class="srvtext"><?php echo wpautop(substr(get_the_content(), 0, 130)); ?></span>
            <!--                                                <a class="srvrdm" href="<?php echo get_permalink(); ?>">Read More...</a>-->
                                            </div>
                                        </div>
                                        <a class="srvrdm" href="<?php echo get_permalink(); ?>"></a>
                                    </div>
                                </div>
                                <style>
                                    #sdssd<?php echo $i; ?>{
                                        background: url(<?php echo $meta_data['image_2']; ?>)no-repeat center;                                      
                                    }
                                </style>

                            <?php } elseif (cs_get_option('othersrvstyle') == 'opt2') { ?> 

                                <?php if ($pont % 2 == 0): ?>
                                    <div id="srv-<?php echo $i; ?>" class="srv-opt2  col-12">
                                        <div class="row">                                                                                  
                                            <div class="col-lg-6 col-md-12">
                                                <img src="<?php echo $meta_data['image_2']; ?>" alt=""/>
                                            </div> 
                                            <div class="col-lg-6 col-md-12">
                                                <h2 class="white-text"><?php the_title(); ?></h2>  
                                                <?php echo wpautop(substr(get_the_content(), 0, 200)); ?><span class="rdmsimble">........+</span>   
                                            </div>  
                                            <a class="holeancore" href="<?php echo get_permalink(); ?>"></a>
                                        </div> 
                                    </div>

                                <?php else: ?>
                                    <div id="srv-<?php echo $i; ?>" class="srv-opt2  col-12">
                                        <div class="row">

                                            <div class="col-lg-6 col-md-12">
                                                <h2 class="white-text"><?php the_title(); ?> </h2>  
                                                <?php echo wpautop(substr(get_the_content(), 0, 200)); ?> <span class="rdmsimble">........+</span> 
                                            </div>  
                                            <div class="col-lg-6 col-md-12">
                                                <img src="<?php echo $meta_data['image_2']; ?>" alt=""/>
                                            </div> 

                                            <a class="holeancore" href="<?php echo get_permalink(); ?>"></a>
                                        </div> 
                                    </div>
                                <?php endif ?>

                            <?php } elseif (cs_get_option('othersrvstyle') == 'opt3') { ?>
                                <div class="col-sm-12 col-md-6 col-lg-4 col-sm-12 opt3 p-0">
                                    <div id="services-section-singel<?php echo $i; ?>" class="col-12  services-section-singel">

                                        <div class="srv-txt">
                                            <h2 class="white-text"><?php the_title(); ?> </h2>
                                        </div>
                                        <a class="srvrdmabs" href="<?php echo get_permalink(); ?>"></a>

                                    </div>
                                </div>
                                <style>
                                    #sdssd<?php echo $i; ?>{
                                        background: url(<?php echo $meta_data['image_2']; ?>)no-repeat center;                                      
                                    }
                                    .opt3 #services-section-singel<?php echo $i; ?>{
                                        background: url(<?php echo $meta_data['image_2'] ?>)no-repeat center;                                      
                                    }
                                </style>
                                <?php
                            } elseif (cs_get_option('othersrvstyle') == 'opt4') {
                                ?>
                                <div id="services-section-singel<?php echo $i; ?>" class="col-12 opt4 text-center">                                                                       
                                    <div class="col-12 srv-txt">                                                 
                                        <?php echo substr(get_the_content(), 0, 800); ?>
                                        <a class="srvrdm" href="<?php echo get_permalink(); ?>">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>

                                <?php
                            } elseif (cs_get_option('othersrvstyle') == 'opt5') {
                                ?>
                                <div id="srvopt5" class="col-md-12 col-lg-6 ">
                                    <div class="row">
                                        <?php if ($i & 1) { ?>
                                            <div class="col-lg-8 col-md-12 srvcont leftsrv">
                                                <h2 class="title-srv-text "><?php the_title(); ?> </h2> 
                                                <?php echo wp_strip_all_tags(substr(get_the_content(), 0, 200)); ?>
                                            </div>  
                                            <div id="sdssd<?php echo $i; ?>" class="col-lg-4 col-md-12 srvicon d-none d-lg-block"></div>
                                        <?php } else { ?>
                                        </div>
                                        <div class="row">
                                            <div id="sdssd<?php echo $i; ?>" class="col-lg-4 col-md-12 srvicon d-none d-lg-block"></div>
                                            <div class="col-lg-8 col-md-12 srvcont rightsrv">
                                                <h2 class="title-srv-text"><?php the_title(); ?></h2> 
                                                <?php echo wp_strip_all_tags(substr(get_the_content(), 0, 200)); ?>
                                            </div> 
                                        <?php } ?>
                                    </div>
                                    <a class="srvrdmopt5" href="<?php echo get_permalink(); ?>"></a>
                                </div>
                                <style>
                                    #sdssd<?php echo $i; ?>{
                                        background: url(<?php echo $meta_data['image_2']; ?>)no-repeat center;                                      
                                    }                                                    
                                </style>
                                <?php
                            } elseif (cs_get_option('othersrvstyle') == 'opt6') {
                                ?>
                                <div id="srvopt6" class="col-md-12 col-lg-6 ">
                                    lklkl
                                </div>

                                <?php
                            } elseif (cs_get_option('othersrvstyle') == 'opt7') {
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
                            } else {
                                
                            };
                        endwhile;
                        $i++;
                        $pont ++;
                    }
                    ?>
                    <?php if (cs_get_option('othersrvstyle') == 'opt1') { ?>
                        <div class="col-md-6 col-lg-4 col-sm-12   p-0">
                            <img src="<?php echo get_template_directory_uri() ?>/img/img-bg.jpg"                                                     
                                 alt="<?php echo cs_get_option('keyword'); ?> Services Image" class="banerphone hedcomon" aria-hidden="true"> 
                        </div>
                        <?php
                    } else {
                        
                    };
                    ?>
                </div>

            </div>
        </div>
    </div>
</section>

