<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\ABMModulo */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Modulos');
$this->params['breadcrumbs'][] = $this->title;
?>
<hr>
<div class="abmmodulo-index">


    <p>
        <?= Html::a(Yii::t('app', 'Crear Modulo'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php
    // echo $this->render('_search', ['model' => $searchModel]);

    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nombre',

            [
                'attribute' => 'idsuscripcion',
                'format' => 'html',
                'value'     => function ($data) {
                    return Html::a($data->relation_table->nombre,'index.php?r=abmsuscripciones/view&id='.$data->relation_table->id);
                },
            ],
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
