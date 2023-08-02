<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ABMUsuarios */

$this->title = Yii::t('app', 'Crear Usuario');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Abm Usuarios'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<hr>
<div class="abmusuarios-create">


    <div class="row">

        <div class="col-md-8">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
        </div>
        <div class="col-md-2"></div>
    </div>

</div>
