<?php
/**
 * The Footer template for our theme
 * 
 */

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