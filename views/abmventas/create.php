<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ABMVentas */

$this->title = Yii::t('app', 'Create Abm Ventas');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Abm Ventas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="abmventas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
