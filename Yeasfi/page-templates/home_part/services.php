

                    <?php
                    $srvlayout = cs_get_option('srvsorter')['enabled'];
                    if ($srvlayout): foreach ($srvlayout as $key => $value) {
                            switch ($key) {
                                case 'lefticonrighttext': get_template_part('page-templates/home_part/service/lefticonrighttext', 'page');
                                    break;
                                case 'blogstyle': get_template_part('page-templates/home_part/service/blogstyle', 'page');
                                    break;
                                case 'roundicon': get_template_part('page-templates/home_part/service/roundicon', 'page');
                                    break;
                            }
                        }
                    endif;
                    ?>
                