<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ABMNoticias */

$this->title = Yii::t('app', 'Actualizar: {name}', [
    'name' => $model->titulo,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Abm Noticias'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<hr>
<div class="abmnoticias-update">


    <?= $this->render('_formupdate', [
        'model' => $model,
    ]) ?>

</div>
