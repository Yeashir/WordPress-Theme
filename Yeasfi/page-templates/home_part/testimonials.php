<?php
$args = array(
    'post_type' => 'Testimonial',
    'posts_per_page' => 100,
    'paged' => $paged,
);
$count = 0;
$wp_query = new WP_Query($args);
$layout = cs_get_option('selectgrid');
if ($layout == "doublegrid") {
    ?>
    <section class="testimonial-section" style="clear: both">
        <div class="container-fluid">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-lg-5 col-md-12 align-self-center">
                    <div class="col-12">   <h2 class="tm-titele"><?php echo cs_get_option('tmtitle'); ?> </h2> </div>

                    <div id="testimonial" class="col-md-12 owl-carousel p-0" > 
                        <?php
                        if (have_posts()) : while (have_posts()) : the_post();
                                $description = get_post_meta(get_the_ID(), 'tmsdesignation', true);
                                $thamb = wp_get_attachment_url(get_post_thumbnail_id($post->ID), '');
                                ?>

                                <div class="item<?php echo $tag; ?> p-3"> 
                                    <h2 class="tm-itm-titel"><?php the_title(); ?></h2>
                                    <div class="tmcont">
                                        <a class="tmcont-d" href="/client-review?#<?php echo $tag; ?>"> 
                                            <?php echo substr(strip_tags($post->post_content), 0, 200); ?> ...
                                        </a>
                                    </div>
                                </div>

                                <?php
                                $counter++;
                            endwhile;
                        endif;
                        ?>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 align-self-center">
                    <div class="row">
                        <div class="col-md-12  form-cta text-center"> 
                            <span class="firstpart"> Call us <a  href="tel:<?php echo cs_get_option('phone'); ?>">   <?php echo cs_get_option('phone'); ?>  </a></span>
                            <span class="scondpart"><br/>or Email us using the form below</span>
                        </div>
                        <div class="col-md-12  formsec frm-home">
                            <?php echo FrmFormsController::get_form_shortcode(array('id' => 6, 'title' => false, 'description' => false)); ?>
                        </div>

                    </div>
                </div>

                <div class="col-1"></div>
            </div>
        </div>
    </section>

    <?php
} elseif ($layout == "singlegrid") {
    ?>

    <section class="testimonial-section singlegrid" style="clear: both">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-lg-12">
                    <div class="col-12">   <h2 class="tm-titele"><?php echo cs_get_option('tmtitle'); ?> </h2> </div>

                    <div id="testimonial" class="col-md-12  owl-carousel p-0" > 
                        <?php
                        if (have_posts()) : while (have_posts()) : the_post();
                                $description = get_post_meta(get_the_ID(), 'tmsdesignation', true);
                                $thamb = wp_get_attachment_url(get_post_thumbnail_id($post->ID), '');
                                ?>
                                <div class="item<?php echo $tag; ?>">                                                                      
                                    <div class="tmcont">
                                        <a class="tmcont-d " href="<?php echo $post_slug ?>"> 
                                            <?php echo substr(strip_tags($post->post_content), 0, 200); ?>
                                            <h2 class="tm-itm-titel"><?php the_title(); ?></h2>
                                        </a>
                                    </div>
                                    <div class="tmcont-botom">
<!--                                        <img alt="<?php echo cs_get_option('keyword'); ?> Testmonial Image" src="<?php echo $thamb ?>"  >-->
                                         
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
        </div>
    </section>
    <?php
} else {
    
};
?>

<style>
.testimonial-section .container{background: url(/wp-content/uploads/2018/09/cemicolon.png;) no-repeat top right;}
    .singlegrid h2.tm-titele{ text-align: center; }
    h2.tm-itm-titel {
        font-size: 20px;
        font-weight: 600;
        padding: 20px 0 0;
    } 

    .owl-buttons .owl-prev{text-align: right;  margin-right:10px;}
    .owl-buttons .owl-prev i,.owl-buttons .owl-next i {font-size: 23px;}
    .owl-buttons .owl-prev i:hover,.owl-buttons .owl-next i:hover {color: #ed1b24;}
    .owl-buttons .owl-prev,.owl-buttons .owl-next {display: inline-block;  width:5%;}


    span.firstpart,span.scondpart {color:#fff; font-size: 40px;}
    span.firstpart a{color:#14e420; font-size: 40px;}
    .form-cta { margin-bottom: 30px;}

</style>