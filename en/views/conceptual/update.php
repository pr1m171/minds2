<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Conceptual */

$this->title = Yii::t('app', 'Desarrollo Conceptual', [
    'name' => $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Conceptuals'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="conceptual-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
