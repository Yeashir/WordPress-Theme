<script>
    jQuery(document).ready(function ($) {
        $("#hide").click(function () {
            $(".readmore-wlq").hide(1000);
            $("#show").css("display", "block");
            $("#hide").css("display", "none");
        });
        $("#show").click(function () {
            $(".readmore-wlq").show(1000);
            $("#show").css("display", "none");
            $("#hide").css("display", "block");
        });

        $(function () {
            $('#dg-container').gallery();
        });

        $(".fancybox").fancybox();
    });



</script>

<script >
    new WOW().init();
    jQuery(document).ready(function ($) {
        //image hover
//        $('img').bind('mouseenter mouseleave', function () {
//            $(this).attr({
//                src: $(this).attr('data-other-src')
//                , 'data-other-src': $(this).attr('src')
//            })
//        });


//unite Gallery 
        jQuery("#gallery3").unitegallery({
            gallery_theme: "tilesgrid",
           tile_width: 300,
            tile_height: 300,
            tile_enable_shadow:false,
            grid_padding:10,

        });

jQuery("#galleryhome").unitegallery({
           gallery_theme: "tiles",
           tiles_max_columns: 3,
           tiles_space_between_cols:20,

        });
    });
</script>

<script>
    jQuery(document).ready(function ($) {
        $(window).scroll(function () {
            var scroll = $(window).scrollTop();
            //console.log(scroll);
            if (scroll >= 300) {
                //console.log('a');
                $("#sticker").addClass("is-sticky");
            } else {
                //console.log('a');
                $("#sticker").removeClass("is-sticky");
            }
        });

    });
    jQuery(document).ready(function ($) {
        // browser window scroll (in pixels) after which the "back to top" link is shown
        var offset = 300,
                //browser window scroll (in pixels) after which the "back to top" link opacity is reduced
                offset_opacity = 1200,
                //duration of the top scrolling animation (in ms)
                scroll_top_duration = 700,
                //grab the "back to top" link
                $back_to_top = $('.cd-top');

        //hide or show the "back to top" link
        $(window).scroll(function () {
            ($(this).scrollTop() > offset) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
            if ($(this).scrollTop() > offset_opacity) {
                $back_to_top.addClass('cd-fade-out');
            }
        });

        //smooth scroll to top
        $back_to_top.on('click', function (event) {
            event.preventDefault();
            $('body,html').animate({
                scrollTop: 0,
            }, scroll_top_duration
                    );
        });

    });

</script>


<script>
    // FAQ 
    jQuery(document).ready(function ($) {
        $('.collapsible').collapsible({
            //defaultOpen: 'section1,section3'
        });

        $("#testimonial").owlCarousel({
            items: 1,
            itemsDesktop: [1199, 1],
            itemsDesktopSmall: [979, 1],
            itemsTablet:[768,1],
            itemsTabletSmall:false,
            itemsMobile:[479,1],
            navigation: true,
            pagination: false,
           navigationText: ["<i class='fa fa-chevron-circle-left' aria-hidden='true'></i>", "<i class='fa fa-chevron-circle-right' aria-hidden='true'></i>"]
        });


    });


    //menu  



</script>


<script type="application/ld+json">
    {
    "@context": "http://schema.org",
    "@type": "Organization",
    "url": "<?php echo get_home_url(); ?>",
    "logo": "<?php echo cs_get_option('logo_upload'); ?>",

    "sameAs" : [<?php
    $group_items = cs_get_option('socialmediaa');
    if (!empty($group_items)) {
        foreach ($group_items as $item) {
            $link = !empty($item['smolink']) ? $item['smolink'] : '';
            ?>
            "<?php echo $link; ?>", 
            <?php
        }
    }
    ?>

    ""]
    }
</script>

<script type="application/ld+json">
    { 
    "@context": "http://schema.org",
    "@type": "<?php echo cs_get_option('businesstype'); ?>", 
    "url": "<?php echo get_home_url(); ?>",
    "image": "<?php echo cs_get_option('logo_upload'); ?>",
    "name": "<?php echo esc_attr(get_bloginfo('name', 'display')); ?>",
    "priceRange": "$$", 
    "telephone": "<?php echo cs_get_option('phone_number'); ?> , <?php echo cs_get_option('mobile_number'); ?>", 
    "email": "<?php echo cs_get_option('email'); ?>", 
    "address":{
    "@type":"PostalAddress",
    "streetAddress":"<?php echo cs_get_option('streetaddress'); ?>",
    "addressLocality":"<?php echo cs_get_option('addresslocality'); ?>",
    "addressRegion":"<?php echo cs_get_option('addressregion'); ?>",
    "postalCode":"<?php echo cs_get_option('postalcode'); ?>"
    }
    }
</script>






