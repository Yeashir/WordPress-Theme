<section  class="dblgrd-sectionA" style="clear: both;">
    <div class="container"> 
        <div class="row">
            <div id="toprightsec" class="col-lg-12 col-md-12  left-sec podlcgrid-hf  align-self-center">
                <h2 class="dsa-title"><?php echo cs_get_option('dblgrid_title'); ?></h2>
                <?php echo wpautop(cs_get_option('dblgrid_txt')); ?>
                <a class="clc-link" href="<?php echo cs_get_option('dblgrid_url') ?>">Our Locations </a>
                <a class="clc-link" href="<?php echo cs_get_option('dblgrid_url') ?>">Enquire Now </a>
            </div>
            <div id="dblgrd-section_galleryvv" class="col-lg-12 col-md-12 right-sec p-0">
                <?php
                $gallery = cs_get_option('dblgrid_gallery');
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

<style>
    div#toprightsec {text-align: center; padding: 7em 0;}
    a.clc-link{width: 234px; text-align: center; font-size:20px; display: inline-block;  font-weight: 600; background: #fff; color: #000;  padding:10px 15px; transition: 0.5s;
               -webkit-transition: 0.5s; margin-top: 30px;}

    div#toprightsec:hover a.clc-link{color:#585858;}
    .wlqopt1 h2.wlq-sec-titel{text-align:center; }
    .colse-open button {color: #000; border: none; -webkit-transition: 0.5s; font-weight: 600; text-align: left;    padding: 0px; background: transparent; }

</style>