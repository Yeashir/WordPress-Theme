<?php
$dblgrid_sorter = cs_get_option('dblgrid_sorter')['enabled'];
if ($dblgrid_sorter): foreach ($dblgrid_sorter as $key => $value) {
        switch ($key) {
            case 'firstsection': get_template_part('page-templates/home_part/doublegrid/firstsection', 'page');
                break;
            case 'scondsection': get_template_part('page-templates/home_part/doublegrid/scondsection', 'page');
                break;
            case 'thirdsection': get_template_part('page-templates/home_part/doublegrid/thirdsection', 'page');
                break;
        }
    }
endif;

$custom_css = cs_get_option( 'dblgridcustom_css' );
    if( $custom_css ) {
      echo '<style type="text/css">'. $custom_css .'</style>';
    }
?>
                

