<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\ABMEjercicio */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="abmejercicio-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'Nombre') ?>

    <?= $form->field($model, 'idModulo') ?>

    <?= $form->field($model, 'url') ?>

    <?= $form->field($model, 'posicion') ?>

    <?php // echo $form->field($model, 'b1') ?>

    <?php // echo $form->field($model, 'b2') ?>

    <?php // echo $form->field($model, 'b3') ?>

    <?php // echo $form->field($model, 'b4') ?>

    <?php // echo $form->field($model, 'b5') ?>

    <?php // echo $form->field($model, 'b6') ?>

    <?php // echo $form->field($model, 'b7') ?>

    <?php // echo $form->field($model, 'b8') ?>

    <?php // echo $form->field($model, 'tl') ?>

    <?php // echo $form->field($model, 'tt') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
