<?php
/**
 * Template Name:Contact us Page Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.

 */
get_header();

$image_id = cs_get_option('address_image');
$addrsimg = wp_get_attachment_image_src($image_id, 'full');
$image_id = cs_get_option('phone_image');
$phoneimg = wp_get_attachment_image_src($image_id, 'full');
$image_id = cs_get_option('email_image');
$emailimg = wp_get_attachment_image_src($image_id, 'full');

$mwta = cs_get_option('keyword');
?>

<div class="tetel-inner-page">
    <div class="container">
        <div class="row">
            <h2 id="page-<?php the_ID(); ?>" class="innerpage-titel"> <?php echo the_title(); ?></h2>
        </div>
    </div>
</div>

<section class="conutctpage-bg">
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <div class="row">
                    <div class="col-3"></div>
                    <div id="content" class="contactpage  col-lg-9 col-md-12 ">
                        <?php
                        if (have_posts()) : while (have_posts()) : the_post();
                                $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID, 'thumbnail'));
                                ?>
                                <div class="row">
                                    <div class="post-content-innerpage  col-md-12">
                                        <!--<h2 id="post-<?php the_ID(); ?>"><?php //the_title();                                           ?></h2>-->
                                        <div class="entrytext contuctapage col-12">
                                            <?php the_content(); ?>
                                        </div>
                                    </div>

                                </div>

                                <?php
                            endwhile;
                        endif;
                        ?>
                        <?php //edit_post_link('Edit this entry.', '<p>', '</p>');     ?>
                        <div class="row">
                            <div class="col-12">     <h2 class="cntpage-title">Client Enquiries</h2></div>
                            <div class="col-lg-6 col-md-12 leftblock">
                                
                                <div class="row ">                                    
                                    <div class="col-lg-2 col-md-12 d-lg-block d-none ctpfi align-self-center">
                                        <img src="<?php echo $addrsimg[0]; ?>"  alt="<?php echo cs_get_option('keyword'); ?> Address" class="banerphone" aria-hidden="true"> 

                                    </div>
                                    <div class="col-lg-9 col-md-12 ctpfad  align-self-center">
                                       
                                        <a target="_blank"  href="<?php echo cs_get_option('maplink'); ?>">   
                                            <?php echo cs_get_option('streetaddress'); ?>
                                            <?php echo cs_get_option('addresslocality'); ?></br>
                                            <?php echo cs_get_option('addressregion'); ?>
                                            <?php echo cs_get_option('postalcode'); ?> 
                                        </a> 
                                    </div>


                                    <div class="col-lg-2 col-md-12 d-lg-block d-none ctpfi align-self-center">
                                        <img src="<?php echo $emailimg[0]; ?>"                                                     
                                             alt="<?php echo cs_get_option('keyword'); ?> email" class="banerphone" aria-hidden="true">
                                    </div>
                                    <div class="col-lg-9 col-md-12 ctpfad align-self-center">
                                       
                                        <div id="email-footer" class=" ">
                                            <a  href="mailto:<?php echo cs_get_option('email'); ?>">  <?php echo cs_get_option('email'); ?>  </a> 
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 leftblock">
                                <div class="row ">
                                    <div class="col-lg-2 col-md-12 d-lg-block d-none ctpfi align-self-center">
                                        <img src="<?php echo $phoneimg[0]; ?>"                                                     
                                             alt="<?php echo cs_get_option('keyword'); ?> Phone" class="banerphone" aria-hidden="true"> 

                                    </div>
                                    <div class="col-lg-9 col-md-12 ctpfad  align-self-center">
                                        
                                        <div id="phone-footer" class=" d-lg-block d-none">
                                            <a    href="tel:<?php echo cs_get_option('phone'); ?>"><?php echo cs_get_option('phone'); ?></a>
                                        </div>
                                        <div id="phone-footer" class=" d-md-block d-lg-none">
                                            <a class="tap-t-cl" href="tel:<?php echo cs_get_option('phone'); ?>"> Call </a>
                                        </div>
                                    </div>

                                    <div class="col-12"> 
                                        <?php get_template_part('social-media', 'page') ?>
                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6 col-md-12"></div>
                </div>
            </div>
            <div class="col-4 rightsec">
                <div class="row"> 
                    <div id="content" class="contactpage  col-lg-6 col-md-12 ">
                         <h2 class="cntpage-title">Contact Form</h2>
                        <?php echo FrmFormsController::get_form_shortcode(array('id' => 2, 'title' => false, 'description' => false)); ?>
                    </div>
                    <div class="col-6"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>