<?php 
$gallayout = cs_get_option('galleryshorter')['enabled'];
if ($gallayout): foreach ($gallayout as $key => $value) {

        switch ($key) {
            case '3dstyle': get_template_part('page-templates/home_part/gallery/3dstyle', 'page');
                break;
            case 'unitegallery': get_template_part('page-templates/home_part/gallery/unitegallery', 'page');
                break;
           
        }
    }
endif;
