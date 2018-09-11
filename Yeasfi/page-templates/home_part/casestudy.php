<?php global $yeasfe; ?>
<section class="casestudy-section" >

    <div class="container-fluid">
        <div class="row"> 
            <div class="col-sm-12 col-lg-4 castady-level">  

            </div>
            <div class="col-sm-12 col-lg-8 castady-content"> 
                <div class="case-dd">
                    <h2 class="castady-titele"><?php echo cs_get_option('casestudytitle'); ?> </h2> 
                    <?php echo wpautop(cs_get_option('casestudy-text')); ?>
                </div>
            </div>


        </div>

    </div>
</section>