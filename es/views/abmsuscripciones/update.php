<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ABMSuscripciones */

$this->title = Yii::t('app', 'Actualizar: {name}', [
    'name' => $model->nombre,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Abm Suscripciones'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<hr>
<div class="abmsuscripciones-update">

<div class="row">
    <div class="col-md-8">
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>
</div>



</div>
