<?php ?>
<?php if (cs_get_option('slider_switcher') == 0) { ?>    
    <section id="banner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-sm-12 col-md-12 col-lg-10 bannereltable">

                    <div class="btbs "> 
                        <div class="row">
                            <div class="col-lg-12 col-md-12 text-center">
                                <h1 class="bannert1"> <?php echo $bannert2 = cs_get_option('bannert1'); ?></h1>
                                <h2  class="bannert2"> <?php echo $bannert2 = cs_get_option('bannert2'); ?></h2>
                                <?php if (cs_get_option('actionbtn') == 1) { ?>
                                    <span class=" phone-icon">
                                        <?php
                                        //if (cs_get_option('phone_image')) : 
                                        $image_id = cs_get_option('phone_image');
                                        $attachment = wp_get_attachment_image_src($image_id, 'full');
                                        ?>                                       
                                        <?php //endif;  ?>  <a  class="applybtn" href="<?php echo cs_get_option('actionbtnurl'); ?>"><?php echo cs_get_option('actionbtntxt'); ?></a>
                                    </span>
                                    <?php
                                } else {
                                    
                                }
                                ?>  
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1"></div>
            </div>
        </div>
    </section>

<?php } else { ?> 
    <?php if (cs_get_option('varticalslider') == 0) { ?>  
        <section id="slider" class="horigentalslider">
            <div id="bs-carousel" class="carousel slide" data-ride="carousel">
                <!--            <div class="overlay"></div>-->
                <div class="carousel-inner">
                    <?php
                    $count = 0;
                    $count2 = 0;
                    $l = 1;
                    $group_items = cs_get_option('slidergroup');
                    if (!empty($group_items)) {
                        foreach ($group_items as $item) {
                            $title = !empty($item['slidertitle']) ? $item['slidertitle'] : '';
                            $desc = !empty($item['sliderdescription']) ? $item['sliderdescription'] : '';
                            $image_id = !empty($item['media']) ? $item['media'] : '';
                            $tag = '';
                            if ($count == 0) {
                                $tag = 'active';
                            }
                            ?>
                            <div id="item-<?php echo $count ?>" class="carousel-item slides <?php echo $tag; ?> align-self-center">
                                <div class="slide-<?php echo $count ?> slid-itemsingle">
                                    <div class="row">
                                    <div class="col"></div>
                                    <div class="slidertext col-auto align-self-end">
                                        <h1><?php echo $title; ?></h1>        
                                        <h3><?php echo $desc; ?></h3>
                                    </div>
                                    <div class="col"></div>
                                    </div>
                                    <style>
                                        .slide-<?php echo $count ?>{background:url(<?php echo $image_id; ?>) no-repeat;}
                                    </style>
                                </div>
                            </div>
                            <?php
                            $count++;
                        }
                        ?>
                    </div>
                    <?php if (cs_get_option('slidercontrol') == 0) { ?>  
                        <!-- Carousel Buttons Next/Prev -->
                        <div class="sliderbutton">
                            <a data-slide="prev" href="#bs-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
                            <a data-slide="next" href="#bs-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
                        </div>
                    <?php } else { ?>
                        <div class="sliderindicatore">
                            <ol class="carousel-indicators">
                                <?php
                                foreach ($group_items as $item) {
                                    $tag = '';
                                    if ($count2 == 0) {
                                        $tag2 = 'active';
                                    }
                                    echo '<li data-target="#bs-carousel" data-slide-to="' . $count2 . '" class="' . $tag2 . '">0' . $l . '</li>';
                                    ?>
                                    <?php
                                    $count2++;
                                    $l++;
                                }
                                ?>
                            </ol>
                        </div>
                    <?php };
                }
                ?>  
            </div>          
        </section>   

    <?php } else { ?> 
        <section id="slider" class="vartical">
            <div class="container-fluid">
                <div class="row">  
                    <div id="myCarousel" class="carousel slide col-12">
                        <div class="row"> 
                            <!-- Indicators -->
                            <ol class="carousel-indicators col-1">
                                <?php
                                $group_items = cs_get_option('slidergroup');
                                $count2 = 0;
                                $count3 = 0;
                                foreach ($group_items as $item) {
                                    $actv = '';
                                    if ($count3 == 0) {
                                        $actv = 'active';
                                    }
                                    echo '<li data-target="#myCarousel" data-slide-to="' . $count3 . '" class="' . $actv . '"></li>';
                                    ?>

                                    <?php
                                    $count2++;
                                    $count3++;
                                }
                                ?>

                            </ol>
                            <div class="carousel-inner col-11">
                                <?php
                                $count = 0;
                                $group_items = cs_get_option('slidergroup');
                                if (!empty($group_items)) {
                                    foreach ($group_items as $item) {
                                        $title = !empty($item['slidertitle']) ? $item['slidertitle'] : '';
                                        $desc = !empty($item['sliderdescription']) ? $item['sliderdescription'] : '';
                                        $image_id = !empty($item['media']) ? $item['media'] : '';
                                        $tag = '';
                                        if ($count == 0) {
                                            $tag = 'active';
                                        }
                                        ?>
                                        <div class="carousel-item <?php echo $tag; ?>">
                                            <div class="fill" style=" background:url(<?php echo $image_id; ?>) no-repeat;">
                                                <div class="carousel-desc">
                                                    <h1><?php echo $title; ?></h1>        
                                                    <h3><?php echo $desc; ?></h3>
                                                        <?php if (cs_get_option('actionbtn') == 1) { ?>
                                                        <span class=" phone-icon">
                                                            <?php
                                                            //if (cs_get_option('phone_image')) : 
                                                            $image_id = cs_get_option('phone_image');
                                                            $attachment = wp_get_attachment_image_src($image_id, 'full');
                                                            ?>                                       
                                                        <?php //endif;     ?>  <a  class="applybtn" href="<?php echo cs_get_option('actionbtnurl'); ?>"><?php echo cs_get_option('actionbtntxt'); ?></a>
                                                        </span>
                                                        <?php
                                                    } else {
                                                        
                                                    }
                                                    ?>  
                                                </div>
                                            </div>
                                        </div>

                                        <?php
                                        $count ++;
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
    }
}
?>

<style>
 
    section#slider{background: url(/wp-content/themes/Yeasfi/img/Woolmen-bannerbg.jpg)no-repeat center bottom;}
    .vartical .carousel-inner.col-11 {
        padding-right: 0;
    }
    .vartical  .carousel-inner, .vartical.carousel, .vartical .carousel-item,.vartical .container,.fill {
        height:100%;
        min-height:90vh;
        width:100%;
        background-position:center center;
        background-size:cover;
    }
    .vartical  .slide-wrapper{display:inline;}
    .vartical  .slide-wrapper .container{padding:0;}


    /*------------------------------ vertical bootstrap slider----------------------------*/

    .vartical    .carousel-inner> .carousel-item.carousel-item-next ,
    .vartical   .carousel-inner > .carousel-item.active.carousel-item-right{ 
        transform: translate3d(0, 100%, 0); -webkit-transform: translate3d(0, 100%, 0); -ms-transform: translate3d(0, 100%, 0); -moz-transform: translate3d(0, 100%, 0); -o-transform: translate3d(0, 100%, 0);  top: 0;

    }
    .vartical    .carousel-inner > .carousel-item.carousel-item-prev ,
    .vartical   .carousel-inner > .carousel-item.active.carousel-item-left{ 
        transform: translate3d(0,-100%, 0); -webkit-transform: translate3d(0,-100%, 0);  -moz-transform: translate3d(0,-100%, 0);-ms-transform: translate3d(0,-100%, 0); -o-transform: translate3d(0,-100%, 0); top: 0;

    }
    .vartical   .carousel-inner > .carousel-item.next.carousel-item-left ,
    .vartical   .carousel-inner > .carousel-item.carousel-item-prev.carousel-item-right ,
    .vartical  .carousel-inner > .carousel-item.active{
        transform:translate3d(0,0,0); -webkit-transform:translate3d(0,0,0);-ms-transform:translate3d(0,0,0);; -moz-transform:translate3d(0,0,0); -o-transform:translate3d(0,0,0); top:0;

    }

    /*------------------------------- vertical carousel indicators ------------------------------*/
    .vartical  .carousel-indicators{
        position:relative;
        top:0;
        bottom:0;
        margin:auto;
        height:20px;
        right:10px; left:auto;
        width:auto;
        -webkit-transform: rotate(90deg);
        -moz-transform: rotate(90deg);
        -ms-transform: rotate(90deg);
        -o-transform: rotate(90deg);
        transform: rotate(90deg);
    }
    .vartical  .carousel-indicators li{display:block; margin-bottom:5px;}
    .vartical   .carousel-indicators li.active{margin-bottom:5px;}
</style>
<script>
    jQuery(document).ready(function ($) {
        $('#myCarousel').carousel({
            interval: false
        });

        //scroll slides on swipe for touch enabled devices

        $("#myCarousel").on("touchstart", function (event) {

            var yClick = event.originalEvent.touches[0].pageY;
            $(this).one("touchmove", function (event) {

                var yMove = event.originalEvent.touches[0].pageY;
                if (Math.floor(yClick - yMove) > 1) {
                    $(".carousel").carousel('next');
                } else if (Math.floor(yClick - yMove) < -1) {
                    $(".carousel").carousel('prev');
                }
            });
            $(".carousel").on("touchend", function () {
                $(this).off("touchmove");
            });
        });
    });

</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>