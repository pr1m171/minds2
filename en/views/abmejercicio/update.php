<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ABMEjercicio */

$this->title = Yii::t('app', 'Actualizar: {name}', [
    'name' => $model->Nombre,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Abm Ejercicios'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<hr>
<div class="abmejercicio-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
