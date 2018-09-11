<?php
/**
 * Template Name: Brouse our Stock pages Template
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header();
?> 

<div class="tetel-inner-page">
    <h2 id="page-<?php the_ID(); ?>" class="innerpage-titel"> <?php echo the_title(); ?></h2>
</div>


<section class="innerpage" >
    <div class="container">
        <div class="row">
            
            <div class="col-12 inner-content-div">
                <?php if (have_posts()) : while (have_posts()) : the_post(); 
                 $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID, 'thumbnail'));
                ?>
                        <div class="post-content-innerpage  col-12">                          
                                <?php the_content(); ?>                          
                        </div>
  
                        <?php
                    endwhile;
                endif;
                ?>
                <?php //edit_post_link('Edit this entry.', '<p>', '</p>');    ?>
            </div>
           

        </div>
    </div>
</section>


<?php 
get_sidebar();
get_footer('option'); ?>
