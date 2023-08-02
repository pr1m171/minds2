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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />


    <link rel="stylesheet" href="assets/css/app.css">

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
                        <a class="nav-link" id="v-pills-home-tab" href="index.php?r=admin" ><i class="icon-home"></i></a>

                        <a class="nav-link" id="v-pills-recurssos-tab" href="index.php?r=admin/profile" ><i class="icon icon-account_box"></i></a>


                        <a class="nav-link" id="v-pills-recurssos-tab" href="index.php?r=admin/lectorinicial" ><i class="fas fa-photo-video"></i></a>

                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab"
                           aria-controls="v-pills-profile" aria-selected="false"><i class="icon-bell-o"></i></a>
                        <a class="nav-link  skin_handle"  href="#"><i class="icon-brightness_4"></i></a>

                        <a class="nav-link" href="index.php?r=admin/logout"><i class="icon-exit_to_app"></i></a>

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
                            <li class="treeview"><a href="index.php?r=admin/index"><i class="icon icon-home s-24"></i> <span>Home</span></a></li>
                            <li class="treeview"><a href="index.php?r=admin/profile"><i class="icon icon-account_box s-24"></i>Profile</a></li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <div class="relative brand-wrapper sticky b-b p-3">
                            <form>
                                <div class="form-group input-group-sm has-right-icon">
                                    <input class="form-control form-control-sm light r-30" placeholder="Search" type="text">
                                    <i class="icon-search"></i>
                                </div>
                            </form>
                        </div>
                        <div class="sticky slimScroll">

                            <div class="p-2">
                                <ul class="list-unstyled">

                                    <!-- Single contact
                                    <li class="my-1">
                                        <div class="card no-b p-3">
                                            <div class="">

                                                <div class="image mr-3  float-left">
                                                    <img class="w-40px" src="assets/img/dummy/logos/v4.png" alt="User Image">
                                                </div>
                                                <div>
                                                    <div>
                                                        <strong>¡Ya puedes continuar!</strong>
                                                    </div>
                                                    <small>Sigue avanzando</small>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
 -->

                                </ul>


                            </div>
                        </div>
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
                    <div class="col-md-10">
                        <div class="s-24">
                            <div style="width: 250px;display: inline;"><?php echo $this->title; ?></div>
                            <div class="paginaActual right float-right"></div>
                        </h1>
                    </div>
                </div>
                    <div class="col-md-2">
                        <!-- ARROW BACK -->
                    </div>
            </div>


            <?= $content ?>


    </div>


    <!-- Add the sidebar's background. This div must be placed
             immediately after the control sidebar -->
    <div class="control-sidebar-bg shadow white fixed"></div>
</div>
<!--/#app -->




<?php $this->endBody() ?>


<script src="assets/js/app.js"></script>
    <script src="assets/js/custom.js"></script>

    <script>
        $( document ).ready(function() {
            $("#cover1").click(function(e){
                $("#contenidoLector").html("<object style=\"width: 100%; height: 750px;\" data=\"https://mindstothe2.com/pdf/instructivo_en.pdf#toolbar=0&navpanes=0\" type=\"application/pdf\">\n" +
                    "                        <iframe style=\"width: 100%; height: 750px;\" src=\"https://mindstothe2.com/pdf/instructivo_en.pdf#toolbar=0&navpanes=0\"></iframe>\n" +
                    "                    </object>");
            });

            $("#cover2").click(function(e){
                $("#contenidoLector").html("<object style=\"width: 100%; height: 750px;\" data=\"https://mindstothe2.com/pdf/scientific.pdf#toolbar=0&navpanes=0\" type=\"application/pdf\">\n" +
                    "                        <iframe style=\"width: 100%; height: 750px;\" src=\"https://mindstothe2.com/pdf/scientific.pdf#toolbar=0&navpanes=0\"></iframe>\n" +
                    "                    </object>");
            });

            //#reproyoutube

            $("#video1").click(function(e){ $("#reproyoutube").attr("src","https://www.youtube.com/embed/WWrE3cT1hTE"); });
            $("#video2").click(function(e){ $("#reproyoutube").attr("src","https://www.youtube.com/embed/hL6x0q16r1Y"); });
            $("#video3").click(function(e){ $("#reproyoutube").attr("src","https://www.youtube.com/embed/pR-H9GwxJog"); });
            $("#video4").click(function(e){ $("#reproyoutube").attr("src","https://www.youtube.com/embed/LEvHhlOFjAE"); });
            $("#video5").click(function(e){ $("#reproyoutube").attr("src","https://www.youtube.com/embed/fiPcL2yFbvg"); });
            $("#video6").click(function(e){ $("#reproyoutube").attr("src","https://www.youtube.com/embed/hKSSAcq9zTs"); });
            $("#video7").click(function(e){ $("#reproyoutube").attr("src","https://www.youtube.com/embed/YzW5Prw9pMA"); });
            $("#video8").click(function(e){ $("#reproyoutube").attr("src","https://www.youtube.com/embed/IdpQOAydplE"); });
            $("#video9").click(function(e){ $("#reproyoutube").attr("src","https://www.youtube.com/embed/dRGqa37rkWU"); });



        });
        $(document).ready(function() {
            $('#myCarousel').carousel({
                interval: 10000
            })
        });
    </script>


</body>
</html>
<?php $this->endPage() ?>