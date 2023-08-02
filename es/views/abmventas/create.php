<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ABMVentas */

$this->title = Yii::t('app', 'Asignar suscripción');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Abm Ventas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="abmventas-create">



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
