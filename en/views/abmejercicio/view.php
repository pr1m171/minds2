<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ABMEjercicio */

$this->title = "Detalle: " . $model->Nombre . " Posición: " . $model->posicion;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Abm Ejercicios'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<hr>
<div class="abmejercicio-view">


    <p>
        <?= Html::a(Yii::t('app', 'Actualizar'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>

        <a class="btn btn-danger eliminar" href="/web/index.php?r=abmejercicio/delete&id=<?php echo $model->id; ?>">Eliminar</a>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'Nombre',
            'idModulo',
            [
                'attribute' => 'url',
                'format' => 'html',
                'label' => 'Archivo',
                'value' => function ($data) {
                    return Html::img($data['url'],
                        ['width' => '250']);
                },
            ],
            'posicion',
        ],
    ]) ?>

</div>
