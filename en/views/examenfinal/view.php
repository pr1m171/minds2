<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Examenfinal */

$this->title = "Examen:" . $model->nombre;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Examenfinals'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="examenfinal-view">


    <p>
        <?= Html::a(Yii::t('app', 'Actualizar'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <a class="btn btn-danger eliminar" href="/web/index.php?r=examenfinal/delete&id=<?php echo $model->id; ?>">Eliminar</a>
    </p>
    <div class="row">
        <div class="col-md-8"><?php echo $model->contenido; ?></div>
    </div>
    <div class="clearfix"><br></div>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'nombre',
            'p1',
            'p1r1',
            'p1r2',
            'p1r3',
            'p1r4',
            'p1r5',
            'p2',
            'p2r1',
            'p2r2',
            'p2r3',
            'p2r4',
            'p2r5',
            'p3',
            'p3r1',
            'p3r2',
            'p3r3',
            'p3r4',
            'p3r5',
            'p4',
            'p4r1',
            'p4r2',
            'p4r3',
            'p4r4',
            'p4r5',
            'p5',
            'p5r1',
            'p5r2',
            'p5r3',
            'p5r4',
            'p5r5',
        ],
    ]) ?>

</div>
