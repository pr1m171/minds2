<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ABMNoticias */

$this->title = "Noticia: " . $model->titulo;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Abm Noticias'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<hr>
<div class="abmnoticias-view">


    <p>
        <?= Html::a(Yii::t('app', 'Actualizar'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>

        <a class="btn btn-danger eliminar" href="/web/index.php?r=abmnoticias/delete&id=<?php echo $model->id; ?>">Eliminar</a>

    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [

            'titulo',
            'fecha',
            'tags',
        ],
    ]) ?>

</div>

<div class="row">
    <div class="col-md-8">
        <?php echo $model->contenido; ?>
    </div>
</div>