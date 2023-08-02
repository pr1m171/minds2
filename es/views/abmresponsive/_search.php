<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\ABMResponsive */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="abmresponsive-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'modulo') ?>

    <?= $form->field($model, 'ejercicio') ?>

    <?= $form->field($model, 'bit') ?>

    <?= $form->field($model, 'alto') ?>

    <?php // echo $form->field($model, 'pos1') ?>

    <?php // echo $form->field($model, 'pos2') ?>

    <?php // echo $form->field($model, 'pos3') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
