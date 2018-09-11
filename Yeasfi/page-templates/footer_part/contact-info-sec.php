<?php global $dumketo; ?>
<section class="contact-sec wow fadeInUp wHighlight animated" style="background:<?php echo $dumketo['openinghour-background']['background-color'];?>"> 
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 styus">
                <h2>Stay In Touch</h2>
                <table class="table map-table">
                    <tr class="location-map">
                        <td><i class="fa fa-map-marker" aria-hidden="true"></i> </td>
                        <td><a target="_blank" href="https://www.google.com.bd/maps/place/<?php echo $dumketo['address']; ?>"> <?php echo $dumketo['address']; ?></a></td>
                    </tr>
                    <tr class="visible-md visible-lg map-phone">
                        <td><i class="fa fa-phone" aria-hidden="true"></i></td>
                        <td><a id="clickToShow2" href="tel:<?php echo $dumketo['phone']; ?>"><?php echo $dumketo['phone']; ?></a></td>
                    </tr>
                    <tr class="visible-xs visible-sm map-phone">
                        <td></td>
                        <td><a id="clickToShow2" href="tel:<?php echo $dumketo['phone']; ?>">Tap to Call</a></td>
                    </tr>
                    <tr class="map-email">
                        <td><i class="fa fa-envelope" aria-hidden="true"></i></td>
                        <td><a href="mailto:<?php echo $dumketo['email']; ?>"><?php echo $dumketo['email']; ?></a></td>
                    </tr>
                </table>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 openhour">
                <h2>Opening Hours</h2>
                <ul>
                    <li><i class="opn-icon"></i><span>SUN-MON:</span> <?php echo $dumketo['sun-mon_titel']; ?></span></li>
                   <li><i class="opn-icon"></i><span>TUE-FRI:</span> <?php echo $dumketo['sun-mon_titel']; ?></span></li>
                   <li><i class="opn-icon"></i><span>PUBLIC HOLIDAYS:</span> <?php echo $dumketo['sun-mon_titel']; ?></span></li>
                   <li><i class="fa fa-times" aria-hidden="true"></i><span>SATURDAY:</span> <?php echo $dumketo['sun-mon_titel']; ?></span></li>
                </ul>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 instagram">
                <h2>Instagram</h2>
                <?php echo do_shortcode('[instagram-feed num=6 cols=3]');?>                
                
            </div>
        </div>
    </div>
</section>