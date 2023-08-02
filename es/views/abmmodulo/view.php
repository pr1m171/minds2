<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ABMModulo */

$this->title = "Módulo: " . $model->nombre;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Abm Modulos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<hr>
<div class="abmmodulo-view">



    <p>
        <?= Html::a(Yii::t('app', 'Actualizar'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <a class="btn btn-danger eliminar" href="/web/index.php?r=abmmodulo/delete&id=<?php echo $model->id; ?>">Eliminar</a>
    </p>
<div class="row">
    <div class="col-md-4">
        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                'nombre',
                [
                    'attribute' => 'idsuscripcion',
                    'value'     => function ($data) {
                        return $data->relation_table->nombre;
                    },
                ],
            ],
        ]) ?>
    </div>
</div>


    <div class="row">
        <div class="col-md-8">
            <?= $model->descripcion; ?>
        </div>
    </div>

</div>
