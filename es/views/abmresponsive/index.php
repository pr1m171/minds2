<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\ABMResponsive */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Abm Responsives');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="abmresponsive-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Abm Responsive'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'modulo',
            'ejercicio',
            'bit',
            'alto',
            //'pos1',
            //'pos2',
            //'pos3',

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
