<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\ActiveForm;
use app\models\Examenfinal;
/* @var $this yii\web\View */
/* @var $searchModel app\models\search\ResultadosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $model app\models\Resultados */
/* @var $form ActiveForm */
$this->title = 'Minds2 - Examen';
$this->params['breadcrumbs'][] = $this->title;
?>
<script src="assets/js/app.js"></script>
<div class="container-fluid">
    <div class="row p-t-b-10 ">
        <div class="col">
            <div class="pb-3">
                <div class="image mr-3  float-left">
                    <img class="user_avatar no-b no-p" src="assets/img/dummy/u6.png" alt="User Image">
                </div>
                <div>
                    <h6 class="p-t-10"><?php echo $model['nombre']; ?> <?php echo $model['apellido']; ?></h6>
                    <?php echo $model['email']; ?>
                </div>
            </div>
        </div>
    </div>



</div>
</header>
<style>
    header{
        display: none !important;
    }
</style>
<div class="container-fluid bg-white">

    <div class="col-md-12" style="margin-top:25px;"></div>

    <?php

    $modulo = Examenfinal::find()->where('id='.$modulo)->orderBy('id')->all();
    $i = 0;
    foreach ($modulo as $row) {
        $i++;
        $contenido[$i] = $row->contenido;
        $idmodulo = $row->modulo;
    ?>
        <input type="hidden" id="npalabras" value="<?php echo $row->np; ?>">
        <input type="hidden" id="nconstante" value="<?php echo $row->constante; ?>">
        <div class="pregunta<?php echo $i; ?> is-hidden">
        <h4><?php echo $row->nombre; ?></h4>
<div class="row">
    <div class="col-md-4">
        <br><h6>1. <?php echo $row->p1 ?></h6><br>
        <input type="radio" id="p1r1m<?php echo $row->id; ?>" name="p1m1<?php echo $i; ?>" value="<?php echo $row->p1r1v; ?>"><label for="p1r1m<?php echo $row->id; ?>">A) <?php echo $row->p1r1; ?></label><br>
        <input type="radio" id="p1r2m<?php echo $row->id; ?>" name="p1m1<?php echo $i; ?>" value="<?php echo $row->p1r2v; ?>"><label for="p1r2m<?php echo $row->id; ?>">B) <?php echo $row->p1r2; ?></label><br>
        <input type="radio" id="p1r3m<?php echo $row->id; ?>" name="p1m1<?php echo $i; ?>" value="<?php echo $row->p1r3v; ?>"><label for="p1r3m<?php echo $row->id; ?>">C) <?php echo $row->p1r3; ?></label><br>
        <input type="radio" id="p1r4m<?php echo $row->id; ?>" name="p1m1<?php echo $i; ?>" value="<?php echo $row->p1r4v; ?>"><label for="p1r4m<?php echo $row->id; ?>">D) <?php echo $row->p1r4; ?></label><br>
        <input type="radio" id="p1r5m<?php echo $row->id; ?>" name="p1m1<?php echo $i; ?>" value="<?php echo $row->p1r5v; ?>"><label for="p1r5m<?php echo $row->id; ?>">E) <?php echo $row->p1r5; ?></label><br>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <br><h6>2. <?php echo $row->p2 ?></h6><br>
        <input type="radio" id="p2r1m<?php echo $row->id; ?>" name="p1m2<?php echo $i; ?>" value="<?php echo $row->p2r1v; ?>"><label for="p2r1m<?php echo $row->id; ?>">A) <?php echo $row->p2r1; ?></label><br>
        <input type="radio" id="p2r2m<?php echo $row->id; ?>" name="p1m2<?php echo $i; ?>" value="<?php echo $row->p2r2v; ?>"><label for="p2r2m<?php echo $row->id; ?>">B) <?php echo $row->p2r2; ?></label><br>
        <input type="radio" id="p2r3m<?php echo $row->id; ?>" name="p1m2<?php echo $i; ?>" value="<?php echo $row->p2r3v; ?>"><label for="p2r3m<?php echo $row->id; ?>">C) <?php echo $row->p2r3; ?></label><br>
        <input type="radio" id="p2r4m<?php echo $row->id; ?>" name="p1m2<?php echo $i; ?>" value="<?php echo $row->p2r4v; ?>"><label for="p2r4m<?php echo $row->id; ?>">D) <?php echo $row->p2r4; ?></label><br>
        <input type="radio" id="p2r5m<?php echo $row->id; ?>" name="p1m2<?php echo $i; ?>" value="<?php echo $row->p2r5v; ?>"><label for="p2r5m<?php echo $row->id; ?>">E) <?php echo $row->p2r5; ?></label><br>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <br><h6>3. <?php echo $row->p3 ?></h6><br>
        <input type="radio" id="p3r1m<?php echo $row->id; ?>" name="p1m3<?php echo $i; ?>" value="<?php echo $row->p3r1v; ?>"><label for="p3r1m<?php echo $row->id; ?>">A) <?php echo $row->p3r1; ?></label><br>
        <input type="radio" id="p3r2m<?php echo $row->id; ?>" name="p1m3<?php echo $i; ?>" value="<?php echo $row->p3r2v; ?>"><label for="p3r2m<?php echo $row->id; ?>">B) <?php echo $row->p3r2; ?></label><br>
        <input type="radio" id="p3r3m<?php echo $row->id; ?>" name="p1m3<?php echo $i; ?>" value="<?php echo $row->p3r3v; ?>"><label for="p3r3m<?php echo $row->id; ?>">C) <?php echo $row->p3r3; ?></label><br>
        <input type="radio" id="p3r4m<?php echo $row->id; ?>" name="p1m3<?php echo $i; ?>" value="<?php echo $row->p3r4v; ?>"><label for="p3r4m<?php echo $row->id; ?>">D) <?php echo $row->p3r4; ?></label><br>
        <input type="radio" id="p3r5m<?php echo $row->id; ?>" name="p1m3<?php echo $i; ?>" value="<?php echo $row->p3r5v; ?>"><label for="p3r5m<?php echo $row->id; ?>">E) <?php echo $row->p3r5; ?></label><br>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <br><h6>4. <?php echo $row->p4 ?></h6><br>
        <input type="radio" id="p4r1m<?php echo $row->id; ?>" name="p1m4<?php echo $i; ?>" value="<?php echo $row->p4r1v; ?>"><label for="p4r1m<?php echo $row->id; ?>">A) <?php echo $row->p4r1; ?></label><br>
        <input type="radio" id="p4r2m<?php echo $row->id; ?>" name="p1m4<?php echo $i; ?>" value="<?php echo $row->p4r2v; ?>"><label for="p4r2m<?php echo $row->id; ?>">B) <?php echo $row->p4r2; ?></label><br>
        <input type="radio" id="p4r3m<?php echo $row->id; ?>" name="p1m4<?php echo $i; ?>" value="<?php echo $row->p4r3v; ?>"><label for="p4r3m<?php echo $row->id; ?>">C) <?php echo $row->p4r3; ?></label><br>
        <input type="radio" id="p4r4m<?php echo $row->id; ?>" name="p1m4<?php echo $i; ?>" value="<?php echo $row->p4r4v; ?>"><label for="p4r4m<?php echo $row->id; ?>">D) <?php echo $row->p4r4; ?></label><br>
        <input type="radio" id="p4r5m<?php echo $row->id; ?>" name="p1m4<?php echo $i; ?>" value="<?php echo $row->p4r5v; ?>"><label for="p4r5m<?php echo $row->id; ?>">E) <?php echo $row->p4r5; ?></label><br>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <br><h6>5. <?php echo $row->p5 ?></h6><br>
        <input type="radio" id="p5r1m<?php echo $row->id; ?>" name="p1m5<?php echo $i; ?>" value="<?php echo $row->p5r1v; ?>"><label for="p5r1m<?php echo $row->id; ?>">A) <?php echo $row->p5r1; ?></label><br>
        <input type="radio" id="p5r2m<?php echo $row->id; ?>" name="p1m5<?php echo $i; ?>" value="<?php echo $row->p5r2v; ?>"><label for="p5r2m<?php echo $row->id; ?>">B) <?php echo $row->p5r2; ?></label><br>
        <input type="radio" id="p5r3m<?php echo $row->id; ?>" name="p1m5<?php echo $i; ?>" value="<?php echo $row->p5r3v; ?>"><label for="p5r3m<?php echo $row->id; ?>">C) <?php echo $row->p5r3; ?></label><br>
        <input type="radio" id="p5r4m<?php echo $row->id; ?>" name="p1m5<?php echo $i; ?>" value="<?php echo $row->p5r4v; ?>"><label for="p5r4m<?php echo $row->id; ?>">D) <?php echo $row->p5r4; ?></label><br>
        <input type="radio" id="p5r5m<?php echo $row->id; ?>" name="p1m5<?php echo $i; ?>" value="<?php echo $row->p5r5v; ?>"><label for="p5r5m<?php echo $row->id; ?>">E) <?php echo $row->p5r5; ?></label><br>
    </div>
</div>
        </div>
    <?php
    }
    ?>
    <input id="ptotal" type="hidden" value="<?php echo $i; ?>" />

    <div class="comenzarExamen" style="
    text-align: center;
    position: relative;
    width: 475px;
    border-radius: 5px;
    border: 2px solid #65d5fa;
    padding: 20px;
    font-size: 16px;
    margin: 0 auto;
    top:10vh;
">
        You then have 1 minute to complete the concept development exercise.
        <div class="row" style="margin-top:20px;">

            <div class="col-md-4"></div>
            <div class="col-md-2"><button id="iniciarConceptual" class="btn btn-primary">Start</button></div>
            <div class="col-md-4"></div>
        </div>
    </div>



    <div class="conceptual is-hidden" style="position:relative; width: 100%; height: 100%;">
        <img src="https://mindstothe2.com/en/web/media/conceptual/<?php echo $idmodulo; ?>.png" style="display: block; margin: 0 auto; height:95vh;" alt="">
    </div>

    <div class="cantidadPalabras is-hidden">
        <p style="
        position: relative;
        width: 475px;
        padding: 20px;
        font-size: 16px;
        display: block;
        margin: 0 auto;
        ">Enter all words separated by commas:</p>
        <textarea id="comparador" style="
    height: 100px;
    position: relative;
    width: 475px;
    border-radius: 5px;
    border: 2px solid #65d5fa;
    padding: 20px;
    font-size: 16px;
    display: block;
    margin: 0 auto;
"></textarea>
        <div class="row" style="margin-top:20px;">

            <div class="col-md-8"></div>
            <div class="col-md-2"><button id="alExamen" class="btn btn-primary">Next</button></div>
            <div class="col-md-2"></div>
        </div>
    </div>

    <div class="contenido is-hidden">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-9 text-justify">
                <?php echo $contenido[1]; ?>
            </div>
            <div class="col-md-2"></div>
            <br><br>
            <div class="col-md-10"></div><div class="col-md-2"><button id="comenzar" class="btn btn-primary">Ready!</button></div>
        </div>
    </div>

    <div class="resultado">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-9 resultadofinal">

            </div>
            <div class="col-md-2"></div>
        </div>
    </div>

    <div class="is-hidden csiguiente"><div class="col-md-2"></div>
        <div class="row">
        <br><br>
            <div class="col-md-10"></div>
            <div class="col-md-2">
                <button class="siguiente btn btn-primary">Finish</button>
                <p class="error is-hidden" style="color:red;position: relative;">Complete all questions</p>
            </div>
        </div>
    </div>

    <br>
    <br>
    <br>

</div>

<script type="application/javascript" async="defer">
    $(document).ready(function() {
        var modulo = <?php echo $idmodulo; ?>;
        var usuario = <?php echo $model['id']; ?>;
        var timer2 = "0:59";
        var mili = 0;
        var tiempo = 0;
        var tiempotomado = 0;


        var tlectura = "0:00";
        var texamen = "3:29";

        if(modulo => 1 && modulo <= 4){
            tlectura = "4:59";
        }else if(modulo => 5 && modulo <= 8){
            tlectura = "3:59";
        }else if(modulo => 9 && modulo <= 12){
            tlectura = "2:59";
        }else if(modulo => 13 && modulo <= 16){
            tlectura = "1:59";
        }else if(modulo => 17 && modulo <= 24){
            tlectura = "0:59";
        }


        function comenzarLectura() {

            var minutes1 = 0;
            var seconds2 = 0;

            var interval = setInterval(function() {


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
                    tiempotomado = tiempo;
                    comenzarExamen();

                    clearInterval(interval);
                }else{

                }
                tlectura = minutes1 + ':' + seconds2;
            }, 1000);
        }

        function comenzarConceptual() {

            var minutes = 0;
            var seconds = 0;

            var interval = setInterval(function() {


                var timer = timer2.split(':');
                //by parsing integer, I avoid all extra string processing
                minutes = parseInt(timer[0], 10);
                seconds = parseInt(timer[1], 10);
                --seconds;
                minutes = (seconds < 0) ? --minutes : minutes;
                if (minutes < 0) clearInterval(interval);
                seconds = (seconds < 0) ? 59 : seconds;
                seconds = (seconds < 10) ? '0' + seconds : seconds;
                //minutes = (minutes < 10) ?  minutes : minutes;

                if(minutes == 0 && seconds == 0){
                    //codigo del final
                    $(".conceptual").addClass("is-hidden");
                    $(".cantidadPalabras").removeClass("is-hidden");

                    clearInterval(interval);
                }else{

                }
                timer2 = minutes + ':' + seconds;
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



        $("#iniciarConceptual").click(function(e){
            $(".comenzarExamen").addClass("is-hidden");
            $(".conceptual").removeClass("is-hidden");
            comenzarConceptual();
        });

        $("#alExamen").click(function(e){
            $(".cantidadPalabras").addClass("is-hidden");
            $(".contenido").removeClass("is-hidden");
            comenzarLectura();
            setInterval(function () {
                tiempo++;
                console.log(tiempo);
            }, 1000);
        });


        $("#comenzar").click(function(e){
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



        function resultadosExamen(){

                $(".pregunta"+i).addClass("is-hidden");
                $(".csiguiente").addClass("is-hidden");


                var np = <?php echo $row->np; ?>;
                var nc = <?php echo $row->constante; ?>;
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
                    "<h4>Time in seconds: " + Math.round(tiempotomado) + " seconds.</h4>"+
                    "<h4>Speed: " + Math.round(v) + " words per minute.</h4>"+
                    "<h4 style='display: none;'>Your current performance is: " + Math.round(r) + "</h4>"+
                    "<h4>Percentage of hits: " + Math.round(c) + "%</h4>"+
                    "");

                var url = "https://mindstothe2.com/index.php?r=admin/addexamen&data=" + Math.round(tiempotomado) + "," +
                    Math.round(v) + "," +
                    Math.round(c) + "," +
                    Math.round(r) + "," +
                    modulo + "," + usuario;


                $.get(url, function(data, status){});



        }

    });
</script>


<style>
    body{
        background: #FFF !important;
    }
</style>