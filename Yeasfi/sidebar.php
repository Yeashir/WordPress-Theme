<?php
/**
 * The Sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<?php
?>
<div style="clear:both;"></div>
<section class="services-section-inerpage" >
    <div class="container">
        <div class="row"> 
            <?php
            $pagename = cs_get_option('srvpage');
            foreach ($pagename as $page) {
                $args = array('page_id' => $page);
                $loop = new WP_Query($args);
                while ($loop->have_posts()) : $loop->the_post();
                    $meta_data = get_post_meta(get_the_ID(), 'custom_page_options', true);
                    $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID, 'thumbnail'));
                    ?>
                    <div id="srv-<?php echo $i; ?>" class="sideber  col-lg-4 col-md-12">
                     
                                <img src="<?php echo $meta_data['image_2']; ?>" alt=""/>
                                 <h2 class="srvtitle"><?php the_title(); ?></h2> 
                            
                          
                            <a class="holeancore" href="<?php echo get_permalink(); ?>"></a>
                        
                    </div>



                <?php
                endwhile;
            };
            ?>
        </div>

    </div>

</section>

