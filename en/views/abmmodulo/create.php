<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ABMModulo */

$this->title = Yii::t('app', 'Crear Módulo');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Abm Modulos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<hr>
<div class="abmmodulo-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
