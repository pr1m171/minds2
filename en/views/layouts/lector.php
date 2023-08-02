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



    </head>
    <body>
    <?php $this->beginBody() ?>

    <!-- Pre loader -->



                    <?= $content ?>



        <?php $this->endBody() ?>

    <link href="assets/css/lector.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <!--<link rel="prefetch" as="style" onload="this.rel = 'stylesheet'" href="assets/css/lector.css">
    <link rel="prefetch" as="style" onload="this.rel = 'stylesheet'" href="https://fonts.googleapis.com/css?family=Roboto&display=swap">-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        var posYY = localStorage.getItem("top");
    </script>
    <link rel="preload" href="assets/js/mod<?php echo $_GET['modulo']; ?>/lector<?php echo $_GET['modulo']; ?>.js?v=<?php echo date("Ymdhms");?>" as="script">
    <!-- ... -->
    <script>
        $("html").width("100%");
        $("html").height("100%");

        //////////////////////////// TAMAÑO BIT POR MODULO //////////////////////////////////////////////////////

        var anchura = $(window).width();
        var altura = $(document).height();

        if(anchura >= 1310 && anchura <= 1399 && altura <= 780){
            inicioBit(-55);
            $("#drag").css({"width":"512px"});
            $("#drag").css({"height":"162px"});
            $("#drag").css({"top":posYY});
        }

        if(anchura >= 1360 && anchura <= 1370 && altura >= 790 && altura <= 900){
            inicioBit(-93);
            $("#drag").css({"width":"685px"});
            $("#drag").css({"height":"218px"});
            $("#drag").css({"top":posYY});
        }


        if(anchura == 1309 && altura == 800){
            inicioBit(-93);
            $("#drag").css({"width":"685px"});
            $("#drag").css({"height":"218px"});
            $("#drag").css({"top":posYY});
        }
        if(anchura >= 1400 && anchura <= 1499){
            inicioBit(-94);
            $("#drag").css({"width":"750px"});
            $("#drag").css({"height":"238px"});
            $("#drag").css({"top":posYY});
        }

        if(anchura >= 1500 && anchura <= 1599){
            inicioBit(-94);
            $("#drag").css({"width":"845px"});
            $("#drag").css({"height":"270px"});
            $("#drag").css({"top":posYY});
        }

        if(anchura >= 1600 && anchura <= 1699){
            inicioBit(-94);
            $("#drag").css({"width":"845px"});
            $("#drag").css({"height":"270px"});
            $("#drag").css({"top":posYY});
        }

        if(anchura >= 1700 && anchura <= 1799){
            inicioBit(-94);
            $("#drag").css({"width":"845px"});
            $("#drag").css({"height":"270px"});
            $("#drag").css({"top":posYY});
        }

        if(anchura == 1920){
            inicioBit(-100);
            $("#drag").css({"width":"840px"});
            $("#drag").css({"height":"267px"});
            $("#drag").css({"top":posYY});
        }


        var modulito = <?php echo $_GET['modulo']; ?>;
        if(modulito == 3){
            if(anchura == 1920 && altura == 1001){
                inicioBit(-100);
                $("#drag").css({"width":"900px"});
                $("#drag").css({"height":"300px"});
                $("#drag").css({"top":posYY});
            }
        }
        if(modulito == 5){
            if(anchura == 1920 && altura == 1001){
                inicioBit(-100);
                $("#drag").css({"width":"900px"});
                $("#drag").css({"height":"300px"});
                $("#drag").css({"top":posYY});
            }
        }
        if(modulito == 7){
            if(anchura == 1920 && altura == 1001){
                inicioBit(-100);
                $("#drag").css({"width":"900px"});
                $("#drag").css({"height":"300px"});
                $("#drag").css({"top":posYY});
            }
        }

        var ua = navigator.userAgent.toLowerCase();
        if (ua.indexOf('safari') != -1) {
            if (ua.indexOf('chrome') > -1) {


                //chrome para emular la prueba
                if($(document).width() > 1700){

                    $("#drag").css({"left":"463px"});
                    $(".pagina").css("height","900px");

                    $(".pagina").css("top","3px");
                    $(".lector").css("position","absolute");
                    $(".lector").css("width","1200px");
                    $(".lector").css("height","900px");
                }else{
                    $("#drag").css({"width":"637px"});
                    $("#drag").css({"height":"203px"});
                    $("#drag").css({"top":"-72px"});
                    $("#drag").css({"left":"463px"});
                    $(".pagina").css("height","700px");

                    $(".pagina").css("top","3px");
                    $(".lector").css("position","absolute");
                    $(".lector").css("width","1200px");
                    $(".lector").css("height","700px");
                }

            } else {

                ///ACA VA PARA SAFARI
                if($(document).width() > 1700){
                    alto = 756;
                }else{
                    $("#drag").css({"width":"637px"});
                    $("#drag").css({"height":"203px"});
                    $("#drag").css({"top":"-72px"});
                    $("#drag").css({"left":"463px"});
                    $(".pagina").css("height","700px");

                    $(".pagina").css("top","3px");
                    $(".lector").css("position","absolute");
                    $(".lector").css("width","1200px");
                    $(".lector").css("height","700px");
                }





            }
        }

        if(modulito == 15){
            if($(document).width() > 1700){
                $("#drag").css({"width": "900px"});
                $("#drag").css({"height": "286px"});
            }else{
                $("#drag").css({"width": "670px"});
                $("#drag").css({"height": "212px"});
            }
        }



        function inicioBit(top){
            console.log(top);
            localStorage.setItem("top",top);
            $("#drag").css({"top":top});
        }




        ///////////////////////////////////////////////////////////////////////////

        var porcentaje = 0;
    </script>


    <script src="assets/js/mod<?php echo $_GET['modulo']; ?>/lector<?php echo $_GET['modulo']; ?>.js?v=<?php echo date("Ymdhms"); ?>" type="application/javascript"></script>

    <script>

        $(window).on("load", function (e) {

            var total = $("#paginasTotal").val();
            var paginaActual = 1;


            porcentaje = (paginaActual * 100) / total;

            $(".bateria").css("width",porcentaje + "vw");


            $("#comenzarEjercicio").click(function(){
                $("video").trigger('pause');
            });

            $(".play").click(function(){
                $("video").trigger('play');
                $(".playbutton").css("display","none");
            });

            var video = document.getElementsByTagName('video')[0];

            function finalizado(){
                /*Do things here!*/
                $("video").css("display","none");
                $("video").hide();
                $(".popup").css("display","block");
            }

            /*video.onended = function(e) {

            };*/



        });



    </script>




    <script src="assets/js/lazyload.js"></script>
    </body>
    </html>
<?php $this->endPage() ?>