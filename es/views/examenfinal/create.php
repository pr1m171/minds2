<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Examenfinal */

$this->title = Yii::t('app', 'Crear examen');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Examenfinals'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container-fluid animatedParent animateOnce my-3">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
