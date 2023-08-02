<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\ABMVentas */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Ventas');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="abmventas-index">



    <p>
        <?= Html::a(Yii::t('app', 'Asignar suscripción'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                    [
                        'attribute' => 'idusuario',
                        'format' => 'html',
                        'value'     => function ($data) {
                            return Html::a($data->relation_table->nombre,'index.php?r=abmusuarios/view&id='.$data->relation_table->id);
                        },
                    ],
                    'fecha',
                    'estado',
                    //'notas:ntext',

                    [

                        'class' => 'yii\grid\ActionColumn',

                        'template' => '{view} {update} ',

                        'buttons' => [

                            'update' => function ($url,$model) {

                                return Html::a(

                                    '<span class="icon-pencil"></span>',

                                    $url);

                            }
                        ],

                    ],
                ],
            ]); ?>
        </div>
        <div class="col-md-6">




            <div class="height-300">
                <canvas
                        data-chart="bar"
                        data-dataset="[[0,0,0,0,1,0,0,0,0,0,0,0]]"
                        data-labels="['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre']"
                        data-dataset-options="[
                                            { label:'Ventas', borderColor:  'rgba(25,75,196,1)', backgroundColor: 'rgba(25, 78, 190, 0.3)'}]"
                        data-options="{
                                                maintainAspectRatio: false,
                                                legend: {
                                                    display: true
                                                },
                                                scales: {
                                                    xAxes: [{
                                                        display: true,
                                                        gridLines: {
                                                            zeroLineColor: '#eee',
                                                            color: '#eee',

                                                            borderDash: [5, 5],
                                                        }
                                                    }],
                                                    yAxes: [{
                                                        display: true,
                                                        gridLines: {
                                                            zeroLineColor: '#eee',
                                                            color: '#eee',
                                                            borderDash: [5, 5],
                                                        }
                                                    }]

                                                },
                                                elements: {
                                                    line: {

                                                        tension: 0.4,
                                                        borderWidth: 1
                                                    },
                                                    point: {
                                                        radius: 2,
                                                        hitRadius: 10,
                                                        hoverRadius: 6,
                                                        borderWidth: 4
                                                    }
                                                }
                                            }">
                </canvas>
            </div>






        </div>
    </div>
</div>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>




</div>
