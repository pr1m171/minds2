<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ABMModulo */
/* @var $form yii\widgets\ActiveForm */
?>
<?php
$suscripcion = \yii\helpers\ArrayHelper::map(\app\models\ABMSuscripciones::find()->all(), 'id', 'nombre');
?>
<div class="abmmodulo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descripcion')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'idsuscripcion')->dropDownList($suscripcion, ['prompt' => 'Seleccionar Suscripción' ]); ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Guardar'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
<br><br>
</div>
