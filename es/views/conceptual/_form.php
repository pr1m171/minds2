<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Conceptual */
/* @var $form yii\widgets\ActiveForm */
?>
<?php
$modulo = \yii\helpers\ArrayHelper::map(\app\models\ABMModulo::find()->all(), 'id', 'nombre');
?>

<div class="conceptual-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idModulo')->dropDownList($modulo, ['prompt' => 'Seleccionar Modulo' ]) ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'palabras')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Guardar'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
