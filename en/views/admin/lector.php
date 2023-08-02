<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Módulo 1 Ejercicio 1';
$this->params['breadcrumbs'][] = $this->title;
?>
</header>
<style>
    body{
        overflow: hidden !important;
    }

</style>
<div class="container-fluid animatedParent animateOnce my-3">
    <div class="animated fadeInUpShort text-center">

        <div class="row" style="z-index:0;">

            <div class="col-md-4"></div>
            <div class="col-md-6 lector">
                <div id="drag"></div>
                <img id="pagina1" class="pagina" src="assets/img/ejercicios/sinaptico/mod1/11.jpg" alt="">
                <img id="pagina2" class="pagina is-hidden" src="assets/img/ejercicios/sinaptico/mod1/12.jpg" alt="">
                <img id="pagina3" class="pagina is-hidden" src="assets/img/ejercicios/sinaptico/mod1/13.jpg" alt="">
                <img id="pagina4" class="pagina is-hidden" src="assets/img/ejercicios/sinaptico/mod1/14.jpg" alt="">


            </div>




        </div>


    </div>
</div>
<div class="rightPanel">
    <h3 style="top: 15px; left: 10%">Instrucciones: </h3>
    <div class="instrucciones">
        Tome su BIT 1 y páselo por el Ejercicio 1. Recuerde que la forma y velocidad en que debe pasar el BIT está explicada en el Módulo Instructivo General.
    </div>
    <h3 style="bottom: 333px;width: 100%;text-align: center;">Selector de BIT</h3>
    <div class="sbit">
        <div class="sbit1"><img src="/web/img/bit/iconbit1.png" alt=""><br><span>1</span></div>
        <div class="sbit2"><img src="/web/img/bit/iconbit1.png" alt=""><br><span>2</span></div>
        <div class="sbit3"><img src="/web/img/bit/iconbit1.png" alt=""><br><span>3</span></div>
        <div class="sbit4"><img src="/web/img/bit/iconbit1.png" alt=""><br><span>4</span></div>
        <div class="sbit5"><img src="/web/img/bit/iconbit1.png" alt=""><br><span>5</span></div>
        <div class="sbit6"><img src="/web/img/bit/iconbit1.png" alt=""><br><span>6</span></div>
        <div class="sbit7"><img src="/web/img/bit/iconbit1.png" alt=""><br><span>7</span></div>
        <div class="sbit8"><img src="/web/img/bit/iconbit1.png" alt=""><br><span>8</span></div>
    </div>

    
    
    <h3 style="bottom: 150px;width: 100%;text-align: center;">Repeticiones</h3>
    <div class="repeticiones">0</div>
    <h3 style="bottom: 50px;width: 100%;text-align: center;">Tiempo restante</h3>
    <div class="countdown"></div>
</div>

<div class="controles">
    <button type="button" class="btn btn-primary" id="cfirst"><i class="icon-skip_previous"></i></button>
    <button type="button" class="btn btn-primary" id="cbefore"><i class="icon-navigate_before"></i></button>
    <button type="button" class="btn btn-primary" id="cnext"><i class="icon-navigate_next"></i></button>
    <button type="button" class="btn btn-primary" id="clast"><i class="icon-skip_next"></i></button>
</div>

