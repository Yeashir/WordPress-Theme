<?php global $yeasfe; ?>
<section class="home-blog-section wow fadeInUp wHighlight animated" style="clear:both;" >

    <div class="container">
        <div class="row">
            <h2 class="home-blog-sec-titel">Our Blog</h2> 
            <div id="latestblog" class="col-md-12 owl-carousel" >   
                <?php
                query_posts(array(
                    'post_type' => 'post',
                    'posts_per_page' => 300,
                    'orderby' => 'ID',
                    'order' => 'DSEC',
                ));
                $counter = 0;
                $loop = new WP_Query($args);
                if (have_posts()) : while (have_posts()) : the_post();
                        $counter++;
                        $thamb = wp_get_attachment_url(get_post_thumbnail_id($post->ID), '');
                         $image_thumbnail = aq_resize($thamb,269, 378, true);
                        ?>
                        <div class="ltpost blog-post<?php echo $counter ?>">
                            <div class="col-md-6 col-xs-12 postimg">
                                <a  href="<?php the_permalink(); ?>">  <img src="<?php echo $image_thumbnail; ?>" alt="<?php echo $yeasfe['alt_txt']; ?> <?php echo the_title(); ?>"/></a>
                            </div>
                            <div class="col-md-6  col-xs-12 postcont">
                                <h2 class="post-titel"><?php echo the_title(); ?></h2>
                                <div class="row">
                                    <div class="col-xs-12 cpm">
                                        <div class="col-md-5 col-xs-6 date-adm">
                                            <img src="<?php echo get_template_directory_uri() ?>/img/House-and-Land-Packages--Gold-Coast-Blog-user.png" alt="<?php
                                            echo $yeasfe['alt_txt'];
                                            Admin
                                            ?> <?php echo the_title(); ?>"/>  
                                            <p class="aurthor"><?php
                                                $author = get_the_author();
                                                echo $author;
                                                ?> </p>
                                        </div>
                                        <div class="col-md-7 col-xs-6 date-adm">                                       
                                            <p class="aurthor"><?php the_time('d M Y'); ?> </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">  
                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 post-cont">
                                        <?php echo substr(get_the_content(), 40, '...'); ?>
                                        <a class="lb-rm" href="<?php the_permalink(); ?>"></a>
                                    </div>
                                </div>

                            </div>



                        </div>

                        <?php
                        $counter++;
                    endwhile;
                endif;
                ?>


            </div>
        </div>         
    </div>    
</section>

