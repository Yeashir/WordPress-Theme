<?php
/**
 * Template Name:Inner Page Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.

 */
get_header();
?> 

<div class="tetel-inner-page">
    <div class="container">
        <div class="row">
            <h2 id="page-<?php the_ID(); ?>" class="innerpage-titel"> <?php echo the_title(); ?></h2>
        </div>
    </div>
</div>


<section class="innerpage" >
    <div class="container">
        <div class="row">
            <div class="col-12 inner-content-div">
                <?php
                if (have_posts()) : while (have_posts()) : the_post();
                        $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID, 'thumbnail'));
                        ?>
                        <div class="row">                            
                            <div class="post-content-iamg  col-md-12 col-lg-5"> 
                                <?php echo do_shortcode('[image_withoutgrid]'); ?>
                            </div>
                            <div class="post-content-innerpage  col-md-12 col-lg-7">                          
                                <?php the_content(); ?>                          
                            </div>
                        </div>


                        <?php
                    endwhile;
                endif;
                ?>
                <?php //edit_post_link('Edit this entry.', '<p>', '</p>');     ?>
            </div>
        </div>
    </div>
</section>
<?php
$pagemeta_data = get_post_meta(get_the_ID(), 'page_layout', true);
$sponsors = $pagemeta_data[pagelayout][enabled];
if ($sponsors): foreach ($sponsors as $key => $value) {
        switch ($key) {
            case 'banner': get_template_part('page-templates/home_part/banner', 'page');
                break;
            case 'services': get_template_part('page-templates/home_part/services', 'page');
                break;
            case 'welcome-sec': get_template_part('page-templates/home_part/welcome-sec', 'page');
                break;
            case 'testimonials': get_template_part('page-templates/home_part/testimonials', 'page');
                break;
            case 'gallery': get_template_part('page-templates/home_part/gallery', 'page');
                break;
            case 'form': get_template_part('page-templates/home_part/form', 'page');
                break;
            case 'doublegrid': get_template_part('page-templates/home_part/doublegrid', 'page');
                break;
        }
    }
endif;

get_footer('option');
?>
