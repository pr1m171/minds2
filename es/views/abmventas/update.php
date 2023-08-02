<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ABMVentas */

$this->title = Yii::t('app', 'Actualizar', [
    'name' => $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Abm Ventas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="abmventas-update">



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
