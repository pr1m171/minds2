<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ABMUsuarios */

$this->title = Yii::t('app', 'Editar usuario: {name}', [
    'name' => $model->nombre . " " . $model->apellido,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Usuarios'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<hr>
<div class="abmusuarios-update">
    <div class="row">

    <div class="col-md-8">
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>
    <div class="col-md-2"></div>
    </div>
</div>
