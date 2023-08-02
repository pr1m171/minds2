<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Conceptual */

$this->title = "Desarrollo Conceptual: " . $model->nombre;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Conceptuals'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="conceptual-view">


    <p>
        <?= Html::a(Yii::t('app', 'Actualizar'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <a class="btn btn-danger eliminar" href="/web/index.php?r=conceptual/delete&id=<?php echo $model->id; ?>">Eliminar</a>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'nombre',
            [
                'attribute' => 'idModulo',
                'format' => 'html',
                'value'     => function ($data) {
                    return Html::a($data->relation_table->nombre,'index.php?r=abmmodulo/view&id='.$data->relation_table->id);
                },
            ],
            [
                'attribute' => 'url',
                'format' => 'html',
                'label' => 'Archivo',
                'value' => function ($data) {
                    return Html::img($data['url'],
                        ['width' => '48px']);
                },
            ],
            'palabras',
        ],
    ]) ?>

</div>
