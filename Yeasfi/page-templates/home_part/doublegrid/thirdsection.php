<?php
if (cs_get_option('ss_switcher_C') == 1) {
    ?>  

    <section  class="dblgrd-sectionC" style="clear: both;">
        <div class="container-fluid"> 
            <div class="row">  
                <div class="col-lg-2 pl-lg-0 d-none podlcgrid  d-lg-block"><hr class="dsborderc"></div>
                <div class="col-lg-4 col-md-12 left-sec podlcgrid-hf align-self-center">
                    <h2 class="dsa-title"><?php echo cs_get_option('dblgridbc_title'); ?></h2>
                    <?php echo wpautop(cs_get_option('dblgridc_txt')); ?>
                    <a class = "clc-link" href = "<?php echo cs_get_option('dblgridc_url') ?>" > Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                </div>
                <div class="col-lg-6 col-md-12 right-sec p-lg-0 d-none  d-lg-block">
                    <?php  
                    $gallery = cs_get_option('dblgridc_gallery');
                    if (!empty($gallery)) {
                        $ids = explode(',', $gallery);
                        foreach ($ids as $id) {
                            $attachment = wp_get_attachment_image_src($id, 'full');
                            ?>                           
                            <img alt="<?php echo cs_get_option('keyword'); ?> <?php echo cs_get_option('dblgrid_title'); ?> Gallery Image" src="<?php echo $attachment[0]; ?>"  >

                            <?php
                        }
                    }
                    ?>
                </div>
            
            </div>
        </div>
    </section>
<?php } else {};
?>