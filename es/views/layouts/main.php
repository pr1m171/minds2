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
    <?php $this->head() ?>
    <script src="js/modernizr.js"></script>
</head>
<body>

<?php /*if($_GET['maintenance'] != 'true'){ ?>
    <div style="position: absolute; width: 100%; height: 100%; padding-top: 15%; overflow: hidden; background: #194bc4 !important;">
        <div style="margin: 0 auto; width: 40%; text-align: center; color: #fff;">
            <img src="https://mindstothe2.com/img/logominds2.png" style="width: 100%;" data-retina="true" align="center" alt=""><br><br><br>
            <style>
                @media screen and (max-width: 1000px) {
                    body{
                        width: 100vw;
                        height: 100vh;
                        overflow: hidden;
                        padding: 0px;
                        margin: 0px;
                    }
                    h1{
                        font-size: 1rem;
                    }
                }
            </style>
            <h1 style="color:#fff !important;">COMING SOON</h1>
        </div>
    </div>

<?php }else{ */?>

<?php $this->beginBody() ?>

<div id="page">


    <header class="header menu_2">
        <div id="preloader"><div data-loader="circle-side"></div></div><!-- /Preload -->
        <div id="logo">
            <a href="index.php"><img src="img/logo.png" width="149" height="42" data-retina="true" alt=""></a>
        </div>
        <ul id="top_menu">
            <li><a href="#0" class="search-overlay-menu-btn">Search</a></li>
            <li class="hidden_tablet"><a href="index.php?r=admin/registro" class="btn_1 rounded">Register</a></li>
        </ul>
        <!-- /top_menu -->
        <a href="#menu" class="btn_mobile">
            <div class="hamburger hamburger--spin" id="hamburger">
                <div class="hamburger-box">
                    <div class="hamburger-inner"></div>
                </div>
            </div>
        </a>
        <nav id="menu" class="main-menu">
            <ul>
                <li><span><a href="https://mindstothe2.com/en/web/index.php?maintenance=true">Home</a></span></li>
                <li><span><a href="https://mindstothe2.com/en/web/index.php?r=site/nosotros&maintenance=true">About us</a></span>
                    <!--<ul>
                        <li><a href="#">subitem</a></li>
                    </ul>-->
                </li>
                <li><span><a href="https://mindstothe2.com/en/web/index.php?r=site/curso&maintenance=true">Our course</a></span></li>
                <li><span><a href="https://mindstothe2.com/en/web/index.php?r=site/blog&maintenance=true">Blog</a></span></li>
                <li><span><a href="https://mindstothe2.com/en/web/index.php?r=site/contacto&maintenance=true">Contact</a></span></li>
                <li><span><a href="index.php?r=admin/index">Login</a></span></li>
            </ul>
        </nav>
        <!-- Search Menu -->
        <div class="search-overlay-menu">
            <span class="search-overlay-close"><span class="closebt"><i class="ti-close"></i></span></span>
            <form role="search" id="searchform" method="get">
                <input value="" name="q" type="search" placeholder="Search..." />
                <button type="submit"><i class="icon_search"></i>
                </button>
            </form>
        </div><!-- End Search Menu -->
    </header>
    <!-- /header -->




        <?= $content ?>



<footer>
    <div class="container margin_120_95">
        <div class="row">
            <div class="col-lg-5 col-md-12 p-r-5">
                <p><img src="img/logo.png" width="149" height="42" data-retina="true" alt=""></p>
                <p style="text-align: justify;">
                    Minds to the 2 is a virtual education platform that is based on educational self sufficiency educative and offers courses and self training programs that are designed to improve the lifestyle of our members and users, we based on the idea that knowledge acquisition fundamental basis can be improved through rapid reading comprehension.
                </p>
                <div class="follow_us">
                    <ul>
                        <li style="text-align: justify;">FOLLOW US</li>
                        <li><a href="#0"><i class="ti-facebook"></i></a></li>
                        <li><a href="#0"><i class="ti-twitter-alt"></i></a></li>
                        <li><a href="#0"><i class="ti-google"></i></a></li>
                        <li><a href="#0"><i class="ti-pinterest"></i></a></li>
                        <li><a href="#0"><i class="ti-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 ml-lg-auto">
                <h5 style="text-align: justify;">LINKS OF INTEREST</h5>
                <ul class="links">
                    <li><a href="https://mindstothe2.com/en/web/index.php?r=site/nosotros">About us</a></li>
                    <li><a href="https://mindstothe2.com/en/web/index.php?r=site/curso">Synaptic Reading</a></li>
                    <li><a href="https://mindstothe2.com/en/web/index.php?r=site/blog">News</a></li>

                    <li><a href="https://mindstothe2.com/en/web/index.php#noticias">PQRS</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 style="text-align: justify;">CONTACT</h5>
                <ul class="contacts">
                    <li><a href="#"><i class="ti-map-alt"></i>Calle 113 # 7 - 45 Torre B</a></li>
                    <li><a href="#"><i class="ti-map-alt"></i>Oficina 1210 - Teleport Business Park</a></li>
                    <li><a href="tel://5717053172"><i class="ti-mobile"></i>(571) 7053172</a></li>
                    <li><a href="mailto:info@mindstothe2.com"><i class="ti-email"></i>info@mindstothe2.com</a></li>
                </ul>
                <div id="newsletter">
                    <h6>Newsletter</h6>
                    <div id="message-newsletter"></div>
                    <form method="post" action="assets/newsletter.php" name="newsletter_form" id="newsletter_form">
                        <div class="form-group">
                            <input type="email" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="Your email">
                            <input type="submit" value="Send" id="submit-newsletter">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--/row-->
        <hr>
        <div class="row">
            <div class="col-md-8">
                <ul id="additional_links">
                    <li><a href="#0">Terms and Conditions</a></li>
                    <li><a href="#0">Privacy policies</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <div id="copy">© 2020 MINDS2</div>
            </div>
        </div>
    </div>
</footer>
</div>
<?php $this->endBody() ?>

<?php //} ?>

<!-- COMMON SCRIPTS -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/common_scripts.js"></script>
<script src="js/main.js"></script>
<script src="assets/validate.js"></script>

<!-- SPECIFIC SCRIPTS -->
<script src="js/video_header.js"></script>
<script>
    HeaderVideo.init({
        container: $('.header-video'),
        header: $('.header-video--media'),
        videoTrigger: $("#video-trigger"),
        autoPlayVideo: true
    });
</script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyANQCwvuHI8RGZfwVPl9yS6DhEDL02ngww"></script>
<script type="text/javascript" src="js/mapmarker.jquery.js"></script>
<script type="text/javascript" src="js/mapmarker_func.jquery.js"></script>
<script>
    $('.btn_1').click(function () {
        // do something you want ...

        $('form').submit();
    });
</script>

<?php
if($_GET['r'] == "site/examen"){
?>

    <script type="application/javascript" async="defer">
        $(document).ready(function() {
            var modulo = <?php echo $_GET['modulo']; ?>;
            var usuario = 0;
            var timer2 = "0:05";
            var mili = 0;
            var tiempo = 0;
            var tiempotomado = 0;


            var tlectura = "5:00";
            var texamen = "3:29";

            comenzarLectura();

            function comenzarLectura() {

                var minutes1 = 0;
                var seconds2 = 0;

                var interval = setInterval(function() {

                    tiempo++;

                    var timerl = tlectura.split(':');
                    //by parsing integer, I avoid all extra string processing
                    minutes1 = parseInt(timerl[0], 10);
                    seconds2 = parseInt(timerl[1], 10);
                    --seconds2;
                    minutes1 = (seconds2 < 0) ? --minutes1 : minutes1;
                    if (minutes1 < 0) clearInterval(interval);
                    seconds2 = (seconds2 < 0) ? 59 : seconds2;
                    seconds2 = (seconds2 < 10) ? '0' + seconds2 : seconds2;
                    //minutes1 = (minutes1 < 10) ?  minutes1 : minutes1;

                    if(minutes1 == 0 && seconds2 == 0){
                        //codigo del final
                        $(".contenido").addClass("is-hidden");
                        $(".pregunta1").removeClass("is-hidden");
                        $(".csiguiente").removeClass("is-hidden");

                        comenzarExamen();

                        clearInterval(interval);
                    }else{

                    }
                    tlectura = minutes1 + ':' + seconds2;
                }, 1000);
            }



            function comenzarExamen() {

                var minutes2 = 0;
                var seconds3 = 0;

                var interval = setInterval(function() {


                    var timer22 = texamen.split(':');
                    //by parsing integer, I avoid all extra string processing
                    minutes2 = parseInt(timer22[0], 10);
                    seconds3 = parseInt(timer22[1], 10);
                    --seconds3;
                    minutes2 = (seconds3 < 0) ? --minutes2 : minutes2;
                    if (minutes2 < 0) clearInterval(interval);
                    seconds3 = (seconds3 < 0) ? 59 : seconds3;
                    seconds3 = (seconds3 < 10) ? '0' + seconds3 : seconds3;
                    //minutes2 = (minutes2 < 10) ?  minutes2 : minutes2;

                    if(minutes2 == 0 && seconds3 == 0){
                        //codigo del final
                        $(".pregunta1").addClass("is-hidden");
                        resultadosExamen();

                        clearInterval(interval);
                    }else{

                    }
                    texamen = minutes2 + ':' + seconds3;
                }, 1000);
            }


            $(".contenido").addClass("is-hidden");
            $(".titulo").addClass("is-hidden");

            $("#cerrarAlerta").click(function(e){
                $(".alerta").addClass("is-hidden");
                $(".contenido").removeClass("is-hidden");
                $(".titulo").removeClass("is-hidden");
            });

            $("#comenzar").click(function(e){

                animarTop();

                $(".contenido").addClass("is-hidden");
                $(".pregunta1").removeClass("is-hidden");
                $(".csiguiente").removeClass("is-hidden");
                tiempotomado = tiempo;

                comenzarExamen();

            });

            var total = $("#ptotal").val();
            var i = 1;


            //// FINAL DEL EXAMEN
            $(".siguiente").click(function(e){

                if( $('input[name=p1m11]').is(':checked') && $('input[name=p1m21]').is(':checked') && $('input[name=p1m31]').is(':checked') && $('input[name=p1m41]').is(':checked') && $('input[name=p1m51]').is(':checked') ) {
                    $(".pregunta1").addClass("is-hidden");
                    resultadosExamen();
                }else{
                    $(".error").removeClass("is-hidden");
                }


            });

            function animarTop(){
                $([document.documentElement, document.body]).animate({
                    scrollTop: $("#hero_in").offset().top
                }, 1000);
            }



            function resultadosExamen(){

                animarTop();



                $(".pregunta"+i).addClass("is-hidden");
                $(".csiguiente").addClass("is-hidden");


                var np = 557;
                var nc = 33420;
                var c = 0;

                var pr1 = $("input[name=p1m11]:checked").val();
                var pr2 = $("input[name=p1m21]:checked").val();
                var pr3 = $("input[name=p1m31]:checked").val();
                var pr4 = $("input[name=p1m41]:checked").val();
                var pr5 = $("input[name=p1m51]:checked").val();

                if(pr1 == 1){ c = c + 20; }
                if(pr2 == 1){ c = c + 20; }
                if(pr3 == 1){ c = c + 20; }
                if(pr4 == 1){ c = c + 20; }
                if(pr5 == 1){ c = c + 20; }


                var v = nc / tiempotomado;
                var r = ( v * c ) / 100;
                var porcentaje = Math.round( ( r * 100 ) / np );




                $(".resultadofinal").html("" +
                    "<h4>Time in seconds: " + tiempotomado + " seconds.</h4>"+
                    "<h4>Speed: " + Math.round(v) + " words per minute.</h4>"+
                    "<h4 style='display: none;'>Your current performance is: " + Math.round(r) + "</h4>"+
                    "<h4>Percentage of successes: " + Math.round(c) + "%</h4>"+
                    "<a href='https://mindstothe2.com/en/web/index.php?r=site/carrito&maintenance=true' style='margin-left:93px; margin-top:15px;' class='btn btn-primary'>START NOW!</a>");



                var url = "https://mindstothe2.com/index.php?r=admin/addexamen&data=" + Math.round(tiempotomado) + "," +
                    Math.round(v) + "," +
                    Math.round(c) + "," +
                    Math.round(r) + "," +
                    modulo + "," + usuario;


                $.get(url, function(data, status){});



            }

        });
    </script>
<?php
}
?>


</body>
</html>
<?php $this->endPage() ?>
