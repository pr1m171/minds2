<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Examenfinal */
/* @var $form yii\bootstrap\ActiveForm */
?>
<?php
$modulo = \yii\helpers\ArrayHelper::map(\app\models\ABMModulo::find()->all(), 'id', 'nombre');
?>

<style>
    .control-label{
        font-weight: 600;
        font-size: 16px;
    }
    .checkbox label{
        font-weight: 400;
        font-size: 16px;
    }
</style>


    <div class="row">


        <div class="col-md-10">

    <?php $form = ActiveForm::begin([
        'layout' => 'horizontal',

    ]); ?>

<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-4"><?= $form->field($model, 'modulo')->dropDownList($modulo, ['prompt' => 'Seleccionar Modulo' ]) ?></div>

            <div class="col-md-8"></div>
            <div class="clearfix"></div>
            <div class="col-md-8"><?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?></div>

            <div class="col-md-8"></div>
            <div class="clearfix"></div>
            <div class="col-md-8"><?= $form->field($model, 'contenido')->textarea(['rows' => 6]) ?></div>

            <div class="col-md-8"></div>
            <div class="clearfix"></div>
            <div class="col-md-8"><?= $form->field($model, 'p1')->textInput(['maxlength' => true]) ?></div>
        </div>

    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-12"><?= $form->field($model, 'p1r1')->textInput(['maxlength' => true]) ?></div>
            <div class="col-md-12 text-xs-center"><?= $form->field($model, 'p1r1v')->checkbox() ?> </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-12"><?= $form->field($model, 'p1r2')->textInput(['maxlength' => true]) ?></div>
            <div class="col-md-12"><?= $form->field($model, 'p1r2v')->checkbox() ?></div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-12"><?= $form->field($model, 'p1r3')->textInput(['maxlength' => true]) ?></div>
            <div class="col-md-12"><?= $form->field($model, 'p1r3v')->checkbox() ?></div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-12"><?= $form->field($model, 'p1r4')->textInput(['maxlength' => true]) ?></div>
            <div class="col-md-12"><?= $form->field($model, 'p1r4v')->checkbox() ?></div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-12"><?= $form->field($model, 'p1r5')->textInput(['maxlength' => true]) ?></div>
            <div class="col-md-12"><?= $form->field($model, 'p1r5v')->checkbox() ?></div>
        </div>
    </div>
</div>



<div class="row">
    <div class="col-md-12">
        <hr>
        <div class="row">

            <div class="col-md-8"><?= $form->field($model, 'p2')->textInput(['maxlength' => true]) ?></div>
        </div>

    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-12"><?= $form->field($model, 'p2r1')->textInput(['maxlength' => true]) ?></div>
            <div class="col-md-12 text-xs-center"><?= $form->field($model, 'p2r1v')->checkbox() ?> </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-12"><?= $form->field($model, 'p2r2')->textInput(['maxlength' => true]) ?></div>
            <div class="col-md-12"><?= $form->field($model, 'p2r2v')->checkbox() ?></div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-12"><?= $form->field($model, 'p2r3')->textInput(['maxlength' => true]) ?></div>
            <div class="col-md-12 text-xs-center"><?= $form->field($model, 'p2r3v')->checkbox() ?> </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-12"><?= $form->field($model, 'p2r4')->textInput(['maxlength' => true]) ?></div>
            <div class="col-md-12"><?= $form->field($model, 'p2r4v')->checkbox() ?></div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-12"><?= $form->field($model, 'p2r5')->textInput(['maxlength' => true]) ?></div>
            <div class="col-md-12 text-xs-center"><?= $form->field($model, 'p2r5v')->checkbox() ?> </div>
        </div>
    </div>
</div>



<!-- ------------------------------------------------------------------------------------------------------------------ -->


            <div class="row">
                <div class="col-md-12">
                    <hr>
                    <div class="row">

                        <div class="col-md-8"><?= $form->field($model, 'p3')->textInput(['maxlength' => true]) ?></div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12"><?= $form->field($model, 'p3r1')->textInput(['maxlength' => true]) ?></div>
                        <div class="col-md-12 text-xs-center"><?= $form->field($model, 'p3r1v')->checkbox() ?> </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12"><?= $form->field($model, 'p3r2')->textInput(['maxlength' => true]) ?></div>
                        <div class="col-md-12"><?= $form->field($model, 'p3r2v')->checkbox() ?></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12"><?= $form->field($model, 'p3r3')->textInput(['maxlength' => true]) ?></div>
                        <div class="col-md-12 text-xs-center"><?= $form->field($model, 'p3r3v')->checkbox() ?> </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12"><?= $form->field($model, 'p3r4')->textInput(['maxlength' => true]) ?></div>
                        <div class="col-md-12"><?= $form->field($model, 'p3r4v')->checkbox() ?></div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12"><?= $form->field($model, 'p3r5')->textInput(['maxlength' => true]) ?></div>
                        <div class="col-md-12 text-xs-center"><?= $form->field($model, 'p3r5v')->checkbox() ?></div>
                    </div>
                </div>
            </div>






            <!-- ------------------------------------------------------------------------------------------------------------------ -->


            <div class="row">
                <div class="col-md-12">
                    <hr>
                    <div class="row">

                        <div class="col-md-8"><?= $form->field($model, 'p4')->textInput(['maxlength' => true]) ?></div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12"><?= $form->field($model, 'p4r1')->textInput(['maxlength' => true]) ?></div>
                        <div class="col-md-12 text-xs-center"><?= $form->field($model, 'p4r1v')->checkbox() ?> </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12"><?= $form->field($model, 'p4r2')->textInput(['maxlength' => true]) ?></div>
                        <div class="col-md-12"><?= $form->field($model, 'p4r2v')->checkbox() ?></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12"><?= $form->field($model, 'p4r3')->textInput(['maxlength' => true]) ?></div>
                        <div class="col-md-12 text-xs-center"><?= $form->field($model, 'p4r3v')->checkbox() ?> </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12"><?= $form->field($model, 'p4r4')->textInput(['maxlength' => true]) ?></div>
                        <div class="col-md-12"><?= $form->field($model, 'p4r4v')->checkbox() ?></div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12"><?= $form->field($model, 'p4r5')->textInput(['maxlength' => true]) ?></div>
                        <div class="col-md-12 text-xs-center"><?= $form->field($model, 'p3r5v')->checkbox() ?></div>
                    </div>
                </div>
            </div>




            <!-- ------------------------------------------------------------------------------------------------------------------ -->


            <div class="row">
                <div class="col-md-12">
                    <hr>
                    <div class="row">

                        <div class="col-md-8"><?= $form->field($model, 'p5')->textInput(['maxlength' => true]) ?></div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12"><?= $form->field($model, 'p5r1')->textInput(['maxlength' => true]) ?></div>
                        <div class="col-md-12 text-xs-center"><?= $form->field($model, 'p5r1v')->checkbox() ?> </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12"><?= $form->field($model, 'p5r2')->textInput(['maxlength' => true]) ?></div>
                        <div class="col-md-12"><?= $form->field($model, 'p5r2v')->checkbox() ?></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12"><?= $form->field($model, 'p5r3')->textInput(['maxlength' => true]) ?></div>
                        <div class="col-md-12 text-xs-center"><?= $form->field($model, 'p5r3v')->checkbox() ?> </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12"><?= $form->field($model, 'p5r4')->textInput(['maxlength' => true]) ?></div>
                        <div class="col-md-12"><?= $form->field($model, 'p5r4v')->checkbox() ?></div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12"><?= $form->field($model, 'p5r5')->textInput(['maxlength' => true]) ?></div>
                        <div class="col-md-12 text-xs-center"><?= $form->field($model, 'p3r5v')->checkbox() ?></div>
                    </div>
                </div>
            </div>


            <hr>

            <div class="row">
                <div class="col-md-2">
                    <div class="row">
                        <div class="col-md-12"><?= $form->field($model, 'np')->textInput(['maxlength' => true]) ?></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row">
                        <div class="col-md-12"><?= $form->field($model, 'constante')->textInput(['maxlength' => true]) ?></div>
                    </div>
                </div>
            </div>

            <hr>



    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Guardar'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

        </div>
    </div>