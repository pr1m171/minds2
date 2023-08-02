<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Examenfinal */

$this->title = Yii::t('app', 'Actualizar examen: {name}', [
    'name' => "",
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Examenfinals'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="examenfinal-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
