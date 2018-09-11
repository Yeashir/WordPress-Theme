<section class="gallery">
    <div class="container-fluid">
        <div class="row">             
            <div class="col-12 wow fadeInUp wHighlight animated tmcontent-block">            
                <h2 class="gal-titele"><?php echo cs_get_option('galtitle'); ?></h2> 
                <?php
                global $post;
                $args = array(
                    'post_type' => 'photo_gallery',
                    'posts_per_page' => 50,
                    'orderby' => 'ID',
                    'order' => 'ASC',
                );
                $loop = new WP_Query($args);
                ?>
                <div id="dg-container" class="dg-container">
                    <div class="dg-wrapper">
                        <?php
                        while ($loop->have_posts()) : $loop->the_post();
                            $gallery = get_post_meta(get_the_ID(), 'custom_post_options', true);
                            $dfd = $gallery [gallery_1];
                            if (!empty($dfd)) {
                                $ids = explode(',', $dfd);
                                foreach ($ids as $id) {
                                    $attachment = wp_get_attachment_image_src($id, 'full');
                                    ?>                                    
                                    <a class="fancybox" rel="gallery1" href="<?php echo $attachment[0]; ?>"><img alt="<?php echo cs_get_option('keyword'); ?>" src="<?php echo $attachment[0]; ?>"  ><div></div></a>
                                    <?php
                                }
                            }
                        endwhile;
                        ?>
                    </div>
                    <nav class="gallerynave">	
                        <span class="dg-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
                        <span class="dg-next"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                    </nav>
                </div>


            </div>


        </div>
    </div>
</section>