<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ABMNoticias */

$this->title = Yii::t('app', 'Nueva Noticia');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Abm Noticias'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<hr>
<div class="abmnoticias-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
