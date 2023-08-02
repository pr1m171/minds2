<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\Conceptual */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Desarrollo Conceptual');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="conceptual-index">

    <p>
        <?= Html::a(Yii::t('app', 'Crear'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

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
