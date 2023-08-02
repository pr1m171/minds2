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
<style>
    .is-hidden{
        display: none;
    }
</style>
<main>
    <section id="hero_in" class="general">
        <div class="wrapper">
            <div class="container">
                <h1 class="fadeInUp"><span></span>READING ASSESSMENT</h1>
            </div>
        </div>
    </section>

<div class="container">

    <div class="col-md-12" style="margin-top:25px;"></div>

    <?php

    $modulo = Examenfinal::find()->where('modulo='.$modulo)->orderBy('id')->all();
    $i = 0;
    foreach ($modulo as $row) {
        $i++;
        $contenido[$i] = $row->contenido;
        ?>
        <input type="hidden" id="npalabras" value="<?php echo $row->np; ?>">
        <input type="hidden" id="nconstante" value="<?php echo $row->constante; ?>">
        <div class="col-md-12 text-center titulo"><h4><br><?php echo $row->nombre; ?><br></h4></div>
        <div id="preguntas" class="pregunta<?php echo $i; ?> is-hidden">

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

    <div class="alerta">
        <div class="row">
            <div class="col-md-12 text-center">
                <strong style="font-size: 1.4em">
                    You must read the following text and when you finish press "Done".<br>
                    At the end we will ask you five questions (multiple choice) that you must answer to know<br>
                    what your speed and understanding are in reading.
                    <br><br></strong>
                <button id="cerrarAlerta" class="btn btn-primary">Start</button>
            </div>
        </div>
    </div>


    <div class="contenido">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-9 text-justify">
                <?php echo $contenido[1]; ?>
            </div>
            <div class="col-md-2"></div>
            <br><br>
            <div class="col-md-10"></div><div class="col-md-2"><button id="comenzar" class="btn btn-primary">Done!</button></div>
        </div>
    </div>

    <div class="resultado">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-8 resultadofinal">

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
                <p class="error is-hidden" style="color:red;position: relative;"><br>You must complete the questionnaire</p>
            </div>
        </div>
    </div>

    <br>
    <br>
    <br>

</div>






</main>