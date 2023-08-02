<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\ABMUsuarios */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Usuarios');
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
    td a span{
        margin-left:5px;
    }
</style>
<hr>
<div class="abmusuarios-index">



    <p>
        <?= Html::a(Yii::t('app', 'Crear usuario'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,

        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],


            //'id',
            'nombre',
            'apellido',
            'email:email',
            //'password',
            //'fnac',
            //'tel',
            //'pais',
            //'ciudad',
            //'direccion',
            //'ocupacion',
            //'idioma',
            //'intereses',
            //'rango',


            [

                'class' => 'yii\grid\ActionColumn',

                'template' => '{view} {update} ',

                'buttons' => [

                    'update' => function ($url,$model) {

                        return Html::a(

                            '<span class="icon-pencil"></span>',

                            $url);

                    },
                    'view' => function ($url,$model) {

                        return Html::a(

                            '<span class="icon-eye"></span>',

                            $url);

                    }
                ],

            ],
        ],
    ]); ?>


</div>
