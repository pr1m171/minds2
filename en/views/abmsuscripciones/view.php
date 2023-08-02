<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ABMSuscripciones */

$this->title = "Detalle de Suscripción: " . $model->nombre;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Abm Suscripciones'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<hr>
<div class="abmsuscripciones-view">


    <p>
        <?= Html::a(Yii::t('app', 'Actualizar'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>

        <a class="btn btn-danger eliminar" href="/web/index.php?r=abmsuscripciones/delete&id=<?php echo $model->id; ?>">Eliminar</a>
    </p>
    <div class="row">
        <div class="col-md-4">
            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'nombre',
                    'precio',
                ],
            ]) ?>
        </div>
        <div class="clearfix"></div>
        <div class="col-md-12"></div>
        <div class="clearfix"></div>

        <div class="clearfix"></div>
        <div class="col-md-8">
            <?php echo $model->descripcion; ?>
        </div>
        <dic class="col-md-4"></dic>
        <div class="clearfix"></div>

        <div class="clearfix"></div>
        <div class="col-md-12"></div>
        <div class="clearfix"></div>


    </div>


</div>
