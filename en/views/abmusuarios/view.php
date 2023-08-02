<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ABMUsuarios */

$this->title = $model->nombre . " " . $model->apellido;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Usuarios'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<hr>

<div class="abmusuarios-view">



    <p>
        <?= Html::a(Yii::t('app', 'Actualizar'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>

        <a class="btn btn-danger eliminar" href="https://mindstothe2.com/en/web/index.php?r=abmusuarios/delete&id=<?php echo $model->id; ?>">Eliminar</a>


    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nombre',
            'apellido',
            'dni',
            'email:email',
            'fnac',
            'tel',
            'pais',
            'ciudad',
            'direccion',
            'ocupacion',
            'idioma',
            'rango',
        ],
    ]) ?>

</div>
