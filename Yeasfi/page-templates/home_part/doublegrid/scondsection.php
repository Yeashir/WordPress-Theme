<?php
 if (cs_get_option('ss_switcher') == 1) { ?>  
    <section  class="dblgrd-sectionB" style="clear: both;">
        <div class="container-fluid"> 
            <div class="row">
                
                <div id="dblgrd-sectionB_gallerybb" class="col-lg-6 col-md-12 left-sec p-0">
                    <?php
                    $gallery = cs_get_option('dblgridb_gallery');
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
               
                 <div id="toprightsecb" class="col-lg-6 col-md-12  right-sec podlcgrid-hf align-self-center ">
                    <h2 class="dsa-title"><?php echo cs_get_option('dblgridb_title'); ?></h2>
                    <?php echo wpautop(cs_get_option('dblgridb_txt')); ?>
                    <a class = "clc-link" href = "<?php echo cs_get_option('dblgridb_url') ?>" >More </a>
                </div>
            </div>
        </div>
    </section>
    <?php
} else {
    
};