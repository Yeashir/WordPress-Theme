<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Belocal
 * @since Be1ocal.0
 */
get_header();
$addrsimg = wp_get_attachment_image_src($image_id, 'full');
?>
<div class="tetel-inner-page">
    <div class="container">
        <div class="row">
            <h2 id="page-<?php the_ID(); ?>" class="innerpage-titel"> Blogs </h2>
        </div>
    </div>
</div>


<section class="blog">
    <div class="container">
        <div class="row">
            <?php if (cs_get_option('comingsong') == 1) { ?> 
                <div class="post-content-iamg  col-md-12 col-lg-5"> 
                    <img src="<?php echo cs_get_option('cumingsunnimage'); ?>" alt="<?php echo $yeasfe['alt_txt']; ?> <?php the_title(); ?> " class="ComingSoon"> 
                </div>
                <div class="post-content-innerpage  col-md-12 col-lg-7">                          
                    <?php if (cs_get_option('blog-desc') != ""): ?>
                        <?Php echo wpautop(cs_get_option('blog-desc')) ?> 
                    <?php endif; ?>                            
                </div>
            </div>
        </div>

    <?php } else { ?>  

        <div class="container">
            <div class="row">
                <div class="post-content-iamg  col-md-12 col-lg-5">                   
                    <img  src="<?php echo cs_get_option('cumingsunnimage'); ?>" alt="<?php echo cs_get_option('keyword'); ?> Coming Soon"  class="blogimg"> 
                </div>

                <div id="blogcontent" class="widecolumn bolg-page-desc col-md-12 col-lg-7">                  
                    <?php if (cs_get_option('blog-desc') != ""): ?>
                        <?Php echo wpautop(cs_get_option('blog-desc')) ?> 
                    <?php endif; ?>                   
                </div>

            </div>

            <div class="row">              
                <?php
                if (have_posts()) : while (have_posts()) : the_post();
                        $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID, 'thumbnail'));
                        ?>
                        <div id="content" class="col-12 blog_content"> 
                            <div class="row">
                                <div class="blog-tnumb col-12 post-bl">
                                    <a href="<?php the_permalink(); ?>">
                                        <img src="<?php echo $url; ?>" alt="<?php echo cs_get_option('keyword'); ?> <?php the_title(); ?> "/>
                                    </a>
                                </div> 

                                <div class="titel-blog col-lg-9 col-md-12">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    <div class="blogtext col-12 px-0"><?php echo wp_trim_words(get_the_content(), 40, "..."); ?> </div>
                                </div>

                                <div class="col-lg-3 col-md-12 post-title"> 
                                    <div class="col-12 aurthor"><i class="fa fa-user-o" aria-hidden="true"></i> <?php echo get_the_author(); ?> </div>
                                    <div class="col-12  date"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php the_time('d - m - Y'); ?></div>

                                </div>
                            </div>
                        </div>
                        <?php
                    endwhile;
                endif;
                ?>
            </div>


        <?php } ?>
    </div>
</section>
<?php get_footer(); ?>