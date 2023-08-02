<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
unset($this->assetBundles['yii\bootstrap\BootstrapAsset']);
unset($this->assetBundles['yii\web\JqueryAsset']);
unset($this->assetBundles['yii\web\YiiAsset']);
unset($this->assetBundles['kartik\widgets\Select2Asset']);
unset($this->assetBundles['kartik\widgets\WidgetAsset']);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" type="image/png" href="favicon.png">
        <meta name="description" content="Plataforma de lectura rapida">
        <meta name="author" content="Gustavo Salvo - Gen Kreativo">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>

        <link rel="stylesheet" href="assets/css/app.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.20.0/ui/trumbowyg.min.css">

    </head>
    <body class="light sidebar-mini sidebar-collapse">
    <?php $this->beginBody() ?>

    <!-- Pre loader -->
    <div id="loader" class="loader">
        <div class="plane-container">
            <div class="preloader-wrapper small active">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                        <div class="circle"></div>
                    </div><div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                        <div class="circle"></div>
                    </div><div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                        <div class="circle"></div>
                    </div><div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                        <div class="circle"></div>
                    </div><div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="app">
        <aside class="main-sidebar fixed offcanvas b-r sidebar-tabs" data-toggle='offcanvas'>
            <div class="sidebar">
                <div class="d-flex hv-100 align-items-stretch">
                    <div class="indigo text-white">
                        <div class="nav mt-5 pt-5 flex-column nav-pills" id="v-pills-tab" role="tablist"
                             aria-orientation="vertical" style="width: 59px;">



                            <a class="nav-link" href="index.php?r=abmresponsive"><i class="icon-search"></i></a>

                        </div>
                    </div>
                    <div class="tab-content flex-grow-1" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                             aria-labelledby="v-pills-home-tab">
                            <div class="relative brand-wrapper sticky b-b">
                                <div class="d-flex justify-content-between align-items-center p-3">
                                    <div class="text-xs-center">
                                        <span class="font-weight-lighter s-18">Menu</span>
                                    </div>
                                    <div class="badge badge-danger r-0"></div>
                                </div>
                            </div>
                            <ul class="sidebar-menu">
                                <li class="treeview"><a href="index.php?r=abmresponsive"><i class="icon icon-users s-24"></i><span>Resoluciones</span></a></li>


                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </aside>

        <div class="has-sidebar-left">
            <div class="pos-f-t">
                <div class="collapse" id="navbarToggleExternalContent">
                    <div class="bg-dark pt-2 pb-2 pl-4 pr-2">
                        <div class="search-bar">
                            <input class="transparent s-24 text-white b-0 font-weight-lighter w-128 height-50" type="text"
                                   placeholder="start typing...">
                        </div>
                        <a href="#" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-expanded="false"
                           aria-label="Toggle navigation" class="paper-nav-toggle paper-nav-white active "><i></i></a>
                    </div>
                </div>
            </div>
        </div>
        <a href="#" data-toggle="push-menu" class="paper-nav-toggle left ml-2 fixed">
            <i></i>
        </a>
        <div class="has-sidebar-left has-sidebar-tabs">
            <header class="white pt-3 relative shadow">

                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <div class="s-24">
                                <div style="width: 250px;display: inline;"><?php echo $this->title; ?></div>
                                <div class="paginaActual right float-right"></div>
                                </h1>
                            </div>
                        </div>
                    </div>


                    <?= $content ?>


                </div>


                <!-- Add the sidebar's background. This div must be placed
                         immediately after the control sidebar -->
                <div class="control-sidebar-bg shadow white fixed"></div>
        </div>
        <!--/#app -->


        <script src="assets/js/app.js"></script>
        <script src="assets/js/yii.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.20.0/trumbowyg.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.20.0/langs/es.min.js"></script>
        <?php $this->endBody() ?>








        <script type="text/javascript">
            $( document ).ready(function() {
                $('.eliminar').on('click', function () {
                    return confirm('¿Está seguro de eleminar este registro?');
                });
                $('textarea').trumbowyg({
                    lang: 'es'
                });
            });
        </script>
    </body>
    </html>
<?php $this->endPage() ?>