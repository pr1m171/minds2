<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Conceptual */

$this->title = Yii::t('app', 'Desarrollo Conceptual');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Conceptuals'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="conceptual-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
