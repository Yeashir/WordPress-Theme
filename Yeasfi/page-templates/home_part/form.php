<?php
$layout = cs_get_option('selectlayout');
if ($layout == "2part") {
    ?>
    <section class="form-section" id="home-form">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-lg-6 form-cont d-none d-lg-block text-center">   
                    <div class="row justify-content-center">
                        <div class="col-10  ddsf dublepart  jumbotron">
                            Call us on <a  href="tel:<?php echo cs_get_option('phone'); ?>">   <?php echo cs_get_option('phone'); ?>  </a> or contact us
                            using the form below
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-6 form-cont d-md-block d-lg-none">
                    If you want honest, accurate and expert loan advice,</br>
                    <?php if (cs_get_option('mobile_number') != ""): ?>                   
                        <a class="tap-t-cl" href="tel:<?php echo cs_get_option('mobile_number'); ?>">  Call (Mobile)  </a> or
                    <?php endif; ?> 
                    <?php if (cs_get_option('phone') != ""): ?>
                        <a class="tap-t-cl" href="tel:<?php echo cs_get_option('phone'); ?>"> Call </a>  or contact us
                        using the form below
                    <?php endif; ?>
                </div>

                <div class="col-md-12 col-lg-6 formsec frm-home">
                    <?php echo FrmFormsController::get_form_shortcode(array('id' => 2, 'title' => false, 'description' => false)); ?>
                </div>

            </div>
        </div>
    </section>

    <?php
} elseif ($layout == "1part") {
    ?>
    <section class="form-section singlepart" id="home-form">
        <div class="container">
            <div class="row">
                <div class="col-md-12  form-cta d-none d-lg-block text-center"> 
                    <?php
                    $words = explode(' ', cs_get_option('formtitle', '', false));
                    $words[0] = $words[0];
                    $words[2] = $words[2];
                    $words[3] = '<a href="tel:' . cs_get_option("phone") . '"> ' . cs_get_option("phone") . '</a>' . $words[3];
                    $words[4] = $words[4];
                    $title = implode(' ', $words);
                    echo $title;
                    ?>

                </div>
                <div class="col-md-12 col-lg-6 form-cont d-md-block d-lg-none">  

                    <?php if (cs_get_option('mobile_number') != ""): ?>
                        <a class="tap-t-cl" href="tel:<?php echo cs_get_option('mobile_number'); ?>">  Call (Mobile)  </a> or
                    <?php endif; ?> 
                    <?php if (cs_get_option('phone') != ""): ?>
                        <a class="tap-t-cl" href="tel:<?php echo cs_get_option('phone'); ?>"> Call </a> or contact us  using the form below
                    <?php endif; ?>
                </div>

                <div class="col-md-12  formsec frm-home">
                    <?php echo FrmFormsController::get_form_shortcode(array('id' => 3, 'title' => false, 'description' => false)); ?>
                </div>

            </div>
        </div>
    </section>
    <?php
} else {
    
};
?>

