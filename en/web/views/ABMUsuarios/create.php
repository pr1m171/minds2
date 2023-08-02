<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ABMSuscripciones */

$this->title = Yii::t('app', 'Create Abm Suscripciones');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Abm Suscripciones'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="abmsuscripciones-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
