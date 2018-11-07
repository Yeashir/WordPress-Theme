<?php
/**
 * Template Name: Gallery Page Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.

 */
get_header();
?> 
<?php global $yeasfe;
?>



<section class="gallery-page-titel">

    <div class="tetel-inner-page">
        <h1 id="page-<?php the_ID(); ?>" class="innerpage-titel"> <?php echo the_title(); ?></h1>
    </div>
</section>    
<section class="innerpage" >
    <div class="container">
        <div class="row">
            <div id="content-galarey" class="inner-content-div col-12">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>                      
                        <div class="post-content-innerpage">
                            <?php the_content('<p class="serif">Read the rest of this page »</p>'); ?>
                        </div>

                        <?php
                    endwhile;
                endif;
                ?>
                <?php //edit_post_link('Edit this entry.', '<p>', '</p>');    ?>
            </div>

            <?php
            global $post;
            $args = array(
                'post_type' => 'photo_gallery',
                'posts_per_page' => 100,
                'orderby' => 'ID',
                'order' => 'ASC',
            );
            $loop = new WP_Query($args);
            ?>
            <div id="gallery3"  class="col-12 p-0" >

                <?php
                while ($loop->have_posts()) : $loop->the_post();
                    $gallery = get_post_meta(get_the_ID(), 'custom_post_options', true);
                    $dfd = $gallery [gallery_1];
                    if (!empty($dfd)) {
                        $ids = explode(',', $dfd);
                        foreach ($ids as $id) {
                           $attachment = wp_get_attachment_image_src($id, 'full');
                                $thumb = wp_get_attachment_image_src($id, 'thumbnail');
                            ?>
                            <img alt="<?php echo cs_get_option('keyword'); ?>" src=" <?php echo  $thumb[0]; ?>" data-image="<?php echo $attachment[0]; ?>">
                            <?php
                        }
                    }
                endwhile;
                ?>
            </div>
            <!-- navigation holder -->

        </div>
    </div>
</div>

</section>



<?php get_footer(); ?> 






