<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ABMSuscripciones */

$this->title = Yii::t('app', 'Crear Suscripción');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Abm Suscripciones'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<hr>
<div class="abmsuscripciones-create">

<div class="row">
    <div class="col-md-8">
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>
</div>



</div>
