<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\ExamenfinalSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="examenfinal-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'modulo') ?>

    <?= $form->field($model, 'p1') ?>

    <?= $form->field($model, 'p1r1') ?>

    <?= $form->field($model, 'p1r2') ?>

    <?php // echo $form->field($model, 'p1r3') ?>

    <?php // echo $form->field($model, 'p1r4') ?>

    <?php // echo $form->field($model, 'p1r5') ?>

    <?php // echo $form->field($model, 'p1r1v') ?>

    <?php // echo $form->field($model, 'p1r2v') ?>

    <?php // echo $form->field($model, 'p1r3v') ?>

    <?php // echo $form->field($model, 'p1r4v') ?>

    <?php // echo $form->field($model, 'p1r5v') ?>

    <?php // echo $form->field($model, 'p2') ?>

    <?php // echo $form->field($model, 'p2r1') ?>

    <?php // echo $form->field($model, 'p2r2') ?>

    <?php // echo $form->field($model, 'p2r3') ?>

    <?php // echo $form->field($model, 'p2r4') ?>

    <?php // echo $form->field($model, 'p2r5') ?>

    <?php // echo $form->field($model, 'p2r1v') ?>

    <?php // echo $form->field($model, 'p2r2v') ?>

    <?php // echo $form->field($model, 'p2r3v') ?>

    <?php // echo $form->field($model, 'p2r4v') ?>

    <?php // echo $form->field($model, 'p2r5v') ?>

    <?php // echo $form->field($model, 'p3') ?>

    <?php // echo $form->field($model, 'p3r1') ?>

    <?php // echo $form->field($model, 'p3r2') ?>

    <?php // echo $form->field($model, 'p3r3') ?>

    <?php // echo $form->field($model, 'p3r4') ?>

    <?php // echo $form->field($model, 'p3r5') ?>

    <?php // echo $form->field($model, 'p3r1v') ?>

    <?php // echo $form->field($model, 'p3r2v') ?>

    <?php // echo $form->field($model, 'p3r3v') ?>

    <?php // echo $form->field($model, 'p3r4v') ?>

    <?php // echo $form->field($model, 'p3r5v') ?>

    <?php // echo $form->field($model, 'p4') ?>

    <?php // echo $form->field($model, 'p4r1') ?>

    <?php // echo $form->field($model, 'p4r2') ?>

    <?php // echo $form->field($model, 'p4r3') ?>

    <?php // echo $form->field($model, 'p4r4') ?>

    <?php // echo $form->field($model, 'p4r5') ?>

    <?php // echo $form->field($model, 'p4r1v') ?>

    <?php // echo $form->field($model, 'p4r2v') ?>

    <?php // echo $form->field($model, 'p4r3v') ?>

    <?php // echo $form->field($model, 'p4r4v') ?>

    <?php // echo $form->field($model, 'p4r5v') ?>

    <?php // echo $form->field($model, 'p5') ?>

    <?php // echo $form->field($model, 'p5r1') ?>

    <?php // echo $form->field($model, 'p5r2') ?>

    <?php // echo $form->field($model, 'p5r3') ?>

    <?php // echo $form->field($model, 'p5r4') ?>

    <?php // echo $form->field($model, 'p5r5') ?>

    <?php // echo $form->field($model, 'p5r1v') ?>

    <?php // echo $form->field($model, 'p5r2v') ?>

    <?php // echo $form->field($model, 'p5r3v') ?>

    <?php // echo $form->field($model, 'p5r4v') ?>

    <?php // echo $form->field($model, 'p5r5v') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
