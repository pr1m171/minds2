<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ABMVentas */

$this->title = "Detalle de venta";
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Abm Ventas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="abmventas-view">

    <hr>

    <p>
        <?= Html::a(Yii::t('app', 'Actualizar'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>

        <a class="btn btn-danger eliminar" href="/index.php?r=abmventas/delete&id=<?php echo $model->id; ?>">Eliminar</a>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'idsuscripcion',
            'idusuario',
            'fecha',
            'hora',
            'estado',
            'notas:ntext',
        ],
    ]) ?>

</div>
