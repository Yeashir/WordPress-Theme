<?php
/**
 * Template Name: Thanks
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
get_header();?>

        <div class="clear"></div>
        <div class="tnxArea">
            <section class="tnxBanner">
                <div class="container sectnx">
                   
                </div>
                <div class="container sectnx">
                    <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12 boxborders">
                        <h2 class="bntextpara1">We have received your enquiry. One of friendly team<br/>members will be in touch within next 24 hours</2>
                        </h2>
                    </div>    
                </div>
                <div class="container sectnx">
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12"></div>
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 btn-home">
                    <p class="tnxbtn">
                        <a class="visitwebsite" href="<?php echo esc_attr(get_option('homeurl')); ?>" title="Visit Our Website">Visit Our Website</a>
                    </p>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12"></div>
                </div>
                
                <div class="container socialsContainer">
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12"></div>
             <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 tnx-social">
                        <ul class="foottnxUl">
                            <li><a href="<?php echo  esc_attr(get_option('facebook')); ?>" title="" target="blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="<?php echo esc_attr(get_option('twitter')); ?>" title="" target="blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="<?php echo esc_attr(get_option('gplus')); ?>" title="" target="blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            <li><a href="<?php echo esc_attr(get_option('linkind')); ?>" title="" target="blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="<?php echo esc_attr(get_option('youtube')); ?>" title="" target="blank"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                        </ul>

                    </div>
                
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12"></div>
                </div>
            </section>

        </div>
<!--        <section class="socials">
            
        </section>-->
<div class="clear"></div>


		<style>
		/*============21" to 23" device media query================*/ 
@media (min-width: 1701px) and (max-width:2000px) {
  section.textbanners {
    padding: 5% 0%;
    width: 100%;
}
    
}


/*============27" large device media query================*/ 
@media only screen and (min-width: 2001px) {
    
    section.textbanners {
    padding: 6% 0%;
    width: 100%;
}
    
}


/*Thnak you Pages*/
section.tnxBanner {
    background: url(../wp-content/themes/Landing-them/img/tnxbg.png);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center top;
    padding: 3% 0%;
    width: 100%;
}
img.img-responsive.thanks-imgs {
    margin: 0 auto;
}
.thankyouImg {
    padding: 6% 0% 0% 0%;
}
h2.bntextpara1 {
    font-size: 40px;
    text-align: center;
    font-weight: 400;
    color: #252060;
    border: 10px solid #252060;
    padding: 40px 0px 60px 0px;
}
.btn-home {
    padding: 0;
    margin: 0;
}
.tnxbtn {
    padding: 6px 0px;
    margin: 0;
    text-align: center;
    position: relative;
    bottom: 50px;
    
}
a.visitwebsite {
    background: #18a94c;
    font-size: 40px;
    color: #FFF;
    font-weight: 600;
    padding: 12px 30px;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center top;
}
ul.foottnxUl {
    list-style: none;
}
ul.foottnxUl li {
    float: left;
    padding-right: 15px;
}
ul.foottnxUl li a {
    font-size: 50px;
    color: #252060;
}
section.footer-tnx-area {
    background: #252060;
    color: #FFF;
    padding: 2% 0% 1% 0%;
    text-align: center;
}
p.tnxbelocal {
    font-size: 22px;
}
p.tnxbelocal a{
    font-size: 22px;
    color: #FFF;
}
/**Portrite media query**/
@media all and (min-width:0px) and (max-width:768px) {
    
    .tnxbtn {
    position: relative;
    bottom: 0px;
    
}
    a.visitwebsite {
    font-size: 20px;
    padding: 10px 30px;
    
}
ul.foottnxUl li a {
    font-size: 25px;
    color: #252060;
}
h2.bntextpara1 {
    font-size: 22px;
    text-align: center;
    font-weight: 400;
    color: #252060;
    border: 10px solid #252060;
    padding: 40px 10px;
}
    
    
}
/*Thnak you Pages*/
		</style>
        <?php get_footer(); ?>