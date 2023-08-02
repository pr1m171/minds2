<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ABMVentas */
/* @var $form yii\widgets\ActiveForm */
?>
<?php
$suscripciones = \yii\helpers\ArrayHelper::map(\app\models\ABMSuscripciones::find()->all(), 'id', 'nombre');
$usuarios = \yii\helpers\ArrayHelper::map(\app\models\ABMUsuarios::find()->all(), 'id', 'nombre');
?>
<div class="abmventas-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'idsuscripcion')->dropDownList($suscripciones, ['prompt' => 'Seleccionar suscripción' ]) ?>


    <?= $form->field($model, 'idusuario')->dropDownList($usuarios, ['prompt' => 'Seleccionar usuario' ]) ?>

    <?= $form->field($model, 'fecha')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hora')->textInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'estado')->dropDownList(['Pendiente de pago' => 'Pendiente de pago', 'Procesando' => 'Procesando', 'Activo' => 'Activo', 'Cancelado' => 'Cancelado'], ['options'=>['Completado'=>['Selected'=>true]]])?>

    <?= $form->field($model, 'notas')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Guardar'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
