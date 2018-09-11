<?php
/**
 * The Footer Option template for our theme
 * 
 */

?> 

<div style="clear: both;"></div>
<?php
$fotlayout = cs_get_option('ftrsorter')['enabled'];
if ($fotlayout): foreach ($fotlayout as $key => $value) {

        switch ($key) {           
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
            case 'otherservices': get_template_part('page-templates/home_part/otherservices', 'page');
                break;
        }
    }
endif;
?>


<footer class="">
     <?php
            $option = cs_get_option('footer_select_option');
            if ($option == 'fopt1') {
                get_template_part('template/footer/f-option-1', 'page');
            }
             if ($option == 'fopt2') {
                get_template_part('template/footer/f-option-2', 'page');
            }
            if ($option == 'fopt3') {
                get_template_part('template/footer/f-option-3', 'page');
            }
            if ($option == 'fopt4') {
                get_template_part('template/footer/f-option-4', 'page');
            }
            if ($option == 'fopt5') {
                get_template_part('template/footer/f-option-5', 'page');
            }
            if ($option == 'fopt6') {
                get_template_part('template/footer/f-option-6', 'page');
            }
            ?>

</footer>
<?php



wp_footer();
get_template_part('header_script');
get_template_part('style');
?>
</body>
</html>
