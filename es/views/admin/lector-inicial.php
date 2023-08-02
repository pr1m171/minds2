<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
/* @var $this yii\web\View */
/* @var $model app\models\Usuarios */
/* @var $form ActiveForm */
$this->title = '';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container-fluid">
    <div class="row p-t-b-10 ">
        <div class="col">
            <div class="pb-3">
                Minds2 - Control panel
            </div>
        </div>
    </div>

    <div class="row">

    </div>

</div>
</header>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/blitzer/jquery-ui.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.0.489/pdf.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.0.489/pdf.worker.js"></script>




<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>



<style>
    header{
        margin-left: -29px !important;
    }
    html,body {
        overflow-x: hidden;
        width: 100vw;
    }
    #app{
        width: 100%;
    }
    /* Removes the default 20px margin and creates some padding space for the indicators and controls */
    .carousel {
        margin-bottom: 0;
        padding: 0 40px 30px 40px;
    }
    /* Reposition the controls slightly */
    .carousel-control {
        left: -12px;
    }
    .carousel-control.right {
        right: -12px;
    }
    /* Changes the position of the indicators */
    .carousel-indicators {
        top: auto;
        bottom: 0px;
        margin-right: -19px;
    }
    .carousel-indicators{

    }
    .well{
        background: none;
        border: none;
    }
    .carousel-control {
        position: absolute;
        top: 40%;
        left:-5px;
        width: 40px;
        height: 40px;
        margin-top: -20px;
        font-size: 40px;
        font-weight: 100;
        line-height: 26px;
        color: #ffffff;
        text-align: center;
        background: #222222;
        border: 3px solid #ffffff;
        -webkit-border-radius: 23px;
        -moz-border-radius: 23px;
        border-radius: 23px;
        opacity: 0.5;
        filter: alpha(opacity=50);
    }
    /* Changes the colour of the indicators */
    .carousel-indicators li {
        background: #c0c0c0;
    }
    .carousel-indicators .active {
        background: #333333;
    }
</style>

<div class="container animatedParent animateOnce my-3">
    <div class="animated fadeInUpShort">

        <iframe width="100%" height="600px" id="reproyoutube" style="width: 100%; height: 600px;" src="https://www.youtube.com/embed/WWrE3cT1hTE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


        <div class="container">
            <div class="row">
                <div class="span12">
                    <div class="well">
                        <div id="myCarousel" class="carousel slide">

                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                            </ol>

                            <!-- Carousel items -->
                            <div class="carousel-inner">

                                <div class="item active">
                                    <div class="row-fluid">
                                        <div class="span3"><a href="#x" class="thumbnail"><img class="img-responsive" id="video1" width="100%" style="width:100%; cursor:pointer;" src="https://mindstothe2.com/pdf/portada/Portada-1.jpg" alt=""></a></div>
                                        <div class="span3"><a href="#x" class="thumbnail"><img class="img-responsive" id="video2" width="100%" style="width:100%; cursor:pointer;" src="https://mindstothe2.com/pdf/portada/Portada-2.jpg" alt=""></a></div>
                                        <div class="span3"><a href="#x" class="thumbnail"><img class="img-responsive" id="video3" width="100%" style="width:100%; cursor:pointer;" src="https://mindstothe2.com/pdf/portada/Portada-3.jpg" alt=""></a></div>
                                        <div class="span3"><a href="#x" class="thumbnail"><img class="img-responsive" id="video4" width="100%" style="width:100%; cursor:pointer;" src="https://mindstothe2.com/pdf/portada/Portada-4.jpg" alt=""></a></div>
                                    </div><!--/row-fluid-->
                                </div><!--/item-->

                                <div class="item">
                                    <div class="row-fluid">
                                        <div class="span3"><a href="#x" class="thumbnail"><img class="img-responsive" id="video5" width="100%" style="width:100%; cursor:pointer;" src="https://mindstothe2.com/pdf/portada/Portada-5.jpg" alt=""></a></div>
                                        <div class="span3"><a href="#x" class="thumbnail"><img class="img-responsive" id="video6" width="100%" style="width:100%; cursor:pointer;" src="https://mindstothe2.com/pdf/portada/Portada-6.jpg" alt=""></a></div>
                                        <div class="span3"><a href="#x" class="thumbnail"><img class="img-responsive" id="video7" width="100%" style="width:100%; cursor:pointer;" src="https://mindstothe2.com/pdf/portada/Portada-7.jpg" alt=""></a></div>
                                        <div class="span3"><a href="#x" class="thumbnail"><img class="img-responsive" id="video8" width="100%" style="width:100%; cursor:pointer;" src="https://mindstothe2.com/pdf/portada/Portada-8.jpg" alt=""></a></div>
                                    </div><!--/row-fluid-->
                                </div><!--/item-->

                                <div class="item">
                                    <div class="row-fluid">
                                        <div class="span3"><a href="#x" class="thumbnail"><img class="img-responsive" id="video9" width="100%" style="width:100%; cursor:pointer;" src="https://mindstothe2.com/pdf/portada/Portada-9.jpg" alt=""></a></div>
                                    </div><!--/row-fluid-->
                                </div><!--/item-->

                            </div><!--/carousel-inner-->

                            <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
                            <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
                        </div><!--/myCarousel-->

                    </div><!--/well-->
                </div>
            </div>
        </div>

        <br><br>
        <div class="clearfix">

        </div>
        <div class="row">
            <div class="col-md-9" id="contenidoLector">
                <object style="width: 100%; height: 750px;" data="https://mindstothe2.com/pdf/instructivo_en.pdf#toolbar=0&navpanes=0" type="application/pdf">
                    <iframe style="width: 100%; height: 750px;" src="https://mindstothe2.com/pdf/instructivo_en.pdf#toolbar=0&navpanes=0"></iframe>
                </object>
            </div>
            <div class="col-md-3">
                <img class="img-responsive" id="cover1" width="100%" style="width:100%; cursor:pointer;" src="https://mindstothe2.com/pdf/cover1_en.png" alt="">
                <br><br>
                <img class="img-responsive" id="cover2" width="100%" style="width:100%; cursor:pointer;" src="https://mindstothe2.com/pdf/cover2_en.png" alt="">
            </div>

        </div>



    </div>

</div>