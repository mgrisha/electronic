<?php defined("_JEXEC") or die?>
<?php
    //$template = JFactory::getApplication()->getTemplate(true)->params;
    $doc = JFactory::getDocument();

    //stylesheets
    $doc->addStyleSheet(JUri::base().'templates/'.$doc->template.'/css/style.css');
    $doc->addStyleSheet(JUri::base().'templates/'.$doc->template.'/css/bootstrap.min.css');
    $doc->addStyleSheet(JUri::base().'templates/'.$doc->template.'/css/font-awesome.min.css');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <jdoc:include type="head" />
    <script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/bootstrap.min.js"></script>
    <script type="text/javascript">jQuery.noConflict();</script>
</head>
<body>
    <div class="wrap_main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 dostavka">
                    <p>
                        <i class="fa fa-truck" aria-hidden="true"></i>
                        <span class="dost_text">Бесплатная доставка</span> 
                        при заказе свыше 
                        <span class="dost_price">5000 руб.</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="wrap_header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 logo">
                        <a href="/"><img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/logo.png" alt="picture"></a>
                    </div>
                    <div class="col-lg-7 col-md-8 col-sm-8 col-xs-12 phone_menu">
                        <p><i class="fa fa-phone" aria-hidden="true"></i>8 (800) 000-00-00</p>

                        <nav class="navbar navbar-default" role="navigation">
                            <div class="container-fluid">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                    <?php if ($doc->countModules('position-0')) :?>
                                        <jdoc:include type="modules" name="position-0" style="xhtml"/>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <div class="col-lg-2 hidden-md hidden-sm hidden-xs time">
                        <p><span>пн-пт: </span>10:00 - 18:00</p>
                        <p><span>сб: </span>10:00 - 16:00</p>
                        <p><span>вс: </span>выходной</p>
                    </div>

                    <div class="col-lg-3 col-md-4 hidden-sm hidden-xs s_seti_top">
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-vk" aria-hidden="true"></i></a>
                    </div>
                    <div class="col-lg-7 col-md-5 col-sm-8 col-xs-12 search">
                        <?php if ($doc->countModules('position-1')) :?>
                            <jdoc:include type="modules" name="position-1" style="xhtml"/>
                        <?php endif; ?>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 cart">
                        <?php if ($doc->countModules('position-2')) :?>
                            <jdoc:include type="modules" name="position-2" style="xhtml"/>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="wrap_content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4 hidden-sm hidden-xs left_block">
                        <?php if ($doc->countModules('position-3')) :?>
                            <jdoc:include type="modules" name="position-3" style="xhtml"/>
                        <?php endif; ?>
                    </div>
                    <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 main_block">
                        <?php if ($doc->countModules('position-4')) :?>
                            <jdoc:include type="modules" name="position-4" style="xhtml"/>
                        <?php endif; ?>
                        <div class="ban_content">
                            <jdoc:include type="component" />
                        </div>
                        <?php if (JUri::current() === JUri::base()): ?>
                            <div class="main_tabs">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Хиты продаж</a></li>
                                    <li role="presentation"><a href="#sales" aria-controls="profile" role="tab" data-toggle="tab">Скидки</a></li>
                                    <li role="presentation"><a href="#news" aria-controls="messages" role="tab" data-toggle="tab">Новинки</a></li>
                                </ul>

                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="home">
                                        <?php if ($doc->countModules('position-5')) :?>
                                            <jdoc:include type="modules" name="position-5" style="xhtml"/>
                                        <?php endif; ?>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="sales">
                                        <?php if ($doc->countModules('position-10')) :?>
                                            <jdoc:include type="modules" name="position-10" style="xhtml"/>
                                        <?php endif; ?>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="news">
                                        <?php if ($doc->countModules('position-11')) :?>
                                            <jdoc:include type="modules" name="position-11" style="xhtml"/>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrap_footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6 footer_menu">
                        <?php if ($doc->countModules('position-6')) :?>
                            <jdoc:include type="modules" name="position-6" style="xhtml"/>
                        <?php endif; ?>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-3 col-xs-6 footer_menu">
                        <?php if ($doc->countModules('position-7')) :?>
                            <jdoc:include type="modules" name="position-7" style="xhtml"/>
                        <?php endif; ?>
                    </div>
                    <div class="col-lg-3 hidden-md hidden-sm hidden-xs w_s_seti">
                        <?php if ($doc->countModules('position-8')) :?>
                            <jdoc:include type="modules" name="position-8" style="xhtml"/>
                        <?php endif; ?>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-5 col-xs-12 footer_contacts">
                        <?php if ($doc->countModules('position-9')) :?>
                            <jdoc:include type="modules" name="position-9" style="xhtml"/>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <p>&copy; 2018 electronic</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>