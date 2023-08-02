<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ABMEjercicio */

$this->title = Yii::t('app', 'Nuevo Ejercicio');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Abm Ejercicios'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<hr>
<div class="abmejercicio-create">



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
