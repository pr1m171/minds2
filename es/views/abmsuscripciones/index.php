<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\ABMSuscripciones */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Suscripciones');
$this->params['breadcrumbs'][] = $this->title;
?>
<hr>
<div class="abmsuscripciones-index">



    <p>
        <?= Html::a(Yii::t('app', 'Crear'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nombre',
            'precio',

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
