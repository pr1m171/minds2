<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ABMEjercicio */
/* @var $form yii\widgets\ActiveForm */
?>
<?php
$modulo = \yii\helpers\ArrayHelper::map(\app\models\ABMModulo::find()->all(), 'id', 'nombre');
?>
<div class="abmejercicio-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idModulo')->dropDownList($modulo, ['prompt' => 'Seleccionar Modulo' ]) ?>

    <?= $form->field($model, 'url')->fileInput(['multiple' => false]) ?>

    <?= $form->field($model, 'posicion')->textInput(['maxlength' => true]) ?>
    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-1"><?= $form->field($model, 'b1')->checkbox() ?></div>
                <div class="col-md-1"><?= $form->field($model, 'b2')->checkbox() ?></div>
                <div class="col-md-1"><?= $form->field($model, 'b3')->checkbox() ?></div>
                <div class="col-md-1"><?= $form->field($model, 'b4')->checkbox() ?></div>
                <div class="col-md-1"><?= $form->field($model, 'b5')->checkbox() ?></div>
                <div class="col-md-1"><?= $form->field($model, 'b6')->checkbox() ?></div>
                <div class="col-md-1"><?= $form->field($model, 'b7')->checkbox() ?></div>
                <div class="col-md-1"><?= $form->field($model, 'b8')->checkbox() ?></div>
                <div class="col-md-1"><?= $form->field($model, 'tl')->checkbox() ?></div>
                <div class="col-md-1"><?= $form->field($model, 'tt')->checkbox() ?></div>
            </div>
        </div>

    </div>



    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Guardar'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    <br><br>

</div>
