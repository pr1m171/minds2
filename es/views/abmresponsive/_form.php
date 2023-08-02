<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ABMResponsive */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="abmresponsive-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'modulo')->textInput() ?>

    <?= $form->field($model, 'ejercicio')->textInput() ?>

    <?= $form->field($model, 'bit')->textInput() ?>

    <?= $form->field($model, 'alto')->textInput() ?>

    <?= $form->field($model, 'pos1')->textInput() ?>

    <?= $form->field($model, 'pos2')->textInput() ?>

    <?= $form->field($model, 'pos3')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
