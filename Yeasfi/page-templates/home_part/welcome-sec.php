
<div style="clear:both;"></div>
<section  class="welcome-section">
    <div class="container"> 
        <div class="row">
            <div class="col-12 main-wel-content">
                <div class="wel-content-mobo">
                    <div class="row">
                        <?php if (cs_get_option('wlqstyle') == 'opt1') { ?>
                            <div class="col-sm-12"> 
                                <div class="row">
                                    <div class="col-lg-7 col-md-12">
                                        <h2 class="wlq-sec-titel"><?php
                                            $words = explode(' ', cs_get_option('wlqtitle', '', false));
                                            $words[0] = $words[0];
                                            $words[2] = '<span>' . $words[2];
                                            $words[3] = $words[3] . '</span>';
                                            $title = implode(' ', $words);
                                            echo $title;
                                            ?></h2>

                                        <div class="wlqcont col-12 pl-0">
                                            <?php
                                            echo wpautop(cs_get_option('wlq-cont'));
                                            $remcont = cs_get_option('wlq-contrdm');
                                            if ($remcont != ""):
                                                ?>
                                                <div class="readmore-wlq" style="display: none;">
                                                    <?php echo wpautop(cs_get_option('wlq-contrdm')); ?>
                                                </div>
                                                <div class="colse-open">
                                                    <button id="hide">Close </button>
                                                    <button id="show">Read More </button> 
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-12 p-0">
                                        <img class="align-self-center" src="<?php echo get_template_directory_uri() ?>/img/welcome.png" alt="<?php echo cs_get_option('keyword'); ?> Welcome Image">
                                    </div>
                                </div>
                            </div>

                        <?php } elseif (cs_get_option('wlqstyle') == 'opt2') { ?>
                            <div class="col-sm-12 wlqopt1"> 

                                <h2 class="wlq-sec-titel"><?php
                                    $words = explode(' ', cs_get_option('wlqtitle', '', false));
                                    $words[0] = $words[0];
                                    $words[2] = '<span>' . $words[2];
                                    $words[3] = $words[3] . '</span>';
                                    $title = implode(' ', $words);
                                    echo $title;
                                    ?>
                                </h2>
                                <?php
                                $remcont = cs_get_option('scorlhight');
                                if ($remcont != "") {
                                    ?>
                                    <div class="wlqcont col-12 pl-0 d-none d-lg-block">
                                        <?php echo wpautop(cs_get_option('wlq-cont')); ?>
                                        <?php echo wpautop(cs_get_option('wlq-contrdm')); ?>
                                    </div>
                                    <div class="mobile-wlq d-lg-none d-md-block">
                                        <div class="wlqcontrdm col-12 pl-0 ">
                                            <?php echo wpautop(cs_get_option('wlq-cont')); ?>
                                        </div>
                                        <div class="readmore-wlq" style="display: none;">
                                            <?php echo wpautop(cs_get_option('wlq-contrdm')); ?>
                                        </div>
                                        <div class="colse-open">
                                            <button id="hide">Close <i class="fa fa-times" aria-hidden="true"></i></button>
                                            <button id="show">Read More <i class="fa fa-plus" aria-hidden="true"></i></button> 
                                        </div>
                                    </div>
                                <?php } else { ?>
                                    <div class="wlqcontrdm col-12 pl-0 ">
                                        <?php echo wpautop(cs_get_option('wlq-cont')); ?>
                                    </div>
                                    <div class="readmore-wlq" style="display: none;">
                                        <?php echo wpautop(cs_get_option('wlq-contrdm')); ?>
                                    </div>
                                    <div class="colse-open">
                                        <button id="hide">Close </button>
                                        <button id="show">Read More ...</button> 
                                    </div>
                                <?php } ?>
                            </div>

                            <?php
                        } else {
                            
                        };
                        ?>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> 


<style>
    .wlqcont h1 { font-size: 25px;}
    .wlqcont h2 { font-size: 22px;}
    .wlqcont h3 { font-size: 19px;}

    .wlqcont {height: <?php
              $scorlhight = cs_get_option('scorlhight');
              echo $scorlhight;
              ?>px;  overflow-y: scroll;}
</style>


