<?php global $dumketo; ?>
<section class="footer-social-sec wow fadeInUp wHighlight animated" style="background:url(<?php echo  $dumketo['fosmm-background']['background-image']; ?>) no-repeat;"> 
    <div class="container">
        <div class="row">
            <div class="col-md-12 footer-logo-area">

                <?php if ($dumketo['logo']['url']) : ?>
                    <a href='<?php echo esc_url(home_url('/')); ?>' >
                        <img class="img-responsive logo-footer" src='<?php echo $dumketo['logo']['url']; ?>' alt='<?php echo esc_attr(get_bloginfo('name', 'display')); ?>'></a>
                <?php endif; ?>

            </div>
             <div class="col-md-12 ">
            <div class="col-md-4 col-sm-12"></div>
            <div class="col-md-4 col-sm-12 footer-social-icon">

                <ul class="social-footer list-unstyled list-inline"> 

                    <li> <a target="_blank" class="fb" href="<?php echo $dumketo['facebook']; ?>"><i class="fa fa-facebook"></i></a></li>
                    <li> <a target="_blank" class="gp" href="<?php echo $dumketo['gplus']; ?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    <li> <a target="_blank" class="tw" href="<?php echo $dumketo['twitter']; ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li> <a target="_blank" class="tw" href="<?php echo $dumketo['instagram']; ?>"><i class="fa fa-instagram"></i></a></li>


                </ul> 

            </div>
            <div class="col-md-4 col-sm-12"></div>
             </div>
        </div>
    </div>
</section>