<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\ActiveForm;
use app\models\Resultados;
/* @var $this yii\web\View */
/* @var $searchModel app\models\search\ResultadosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $model app\models\Resultados */
/* @var $form ActiveForm */
$this->title = 'Minds2 - Control panel';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container-fluid">
    <div class="row p-t-b-10 ">
        <div class="col">
            <div class="pb-3">
                <div class="image mr-3  float-left">
                    <img class="user_avatar no-b no-p" src="assets/img/dummy/u6.png" alt="User Image">
                </div>
                <div>
                    <h6 class="p-t-10"><?php echo $model['nombre']; ?> <?php echo $model['apellido']; ?></h6>
                    <?php echo $model['email']; ?>
                </div>
            </div>
        </div>
    </div>



</div>
</header>

<div class="container-fluid bg-white">
    <br><br>
    <div class="col-md12">
        <h3>Module performance report: <?php echo $_GET['modulo']; ?></h3>
    </div>
    <br><br>
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-3">
                <h3>Bit use:</h3>
                <hr><br>
                <?php
                $mod = $_GET['modulo'];
                $modulo = Resultados::find()
                    ->where('idModulo='.$mod)
                    ->andWhere('idUsuario='.$model['id'])
                    ->orderBy('fecha')->all();
                $total = 0;
                foreach ($modulo as $row) {
                    $total++;
                    $bit1 = $row->b1 + $bit1;
                    $bit2 = $row->b2 + $bit2;
                    $bit3 = $row->b3 + $bit3;
                    $bit4 = $row->b4 + $bit4;
                    $bit5 = $row->b5 + $bit5;
                    $bit6 = $row->b6 + $bit6;
                    $bit7 = $row->b7 + $bit7;
                    $bit8 = $row->b8 + $bit8;

                }

                ?>

                <canvas id="myChart" width="500" height="320" class="chartjs-render-monitor"></canvas>
                <script>
                    var x = {
                        type: 'line',
                        data: {
                            labels: ['Bit 1', 'Bit 2', 'Bit 3', 'Bit 4', 'Bit 5', 'Bit 6', 'Bit 7', 'Bit 8'],
                            datasets: [{
                                label: 'Bit uses',
                                data: [<?php echo $bit1; ?>, <?php echo $bit2; ?>, <?php echo $bit3; ?>, <?php echo $bit4; ?>, <?php echo $bit5; ?>, <?php echo $bit6; ?>, <?php echo $bit7; ?>, <?php echo $bit8; ?>],
                                borderWidth: 1,
                                backgroundColor: "#8e5ea2",
                                pointBackgroundColor: "#55bae7",
                                pointBorderColor: "#55bae7",
                                pointHoverBackgroundColor: "#55bae7",
                                pointHoverBorderColor: "#55bae7",
                            }]
                        },

                        options: {
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        beginAtZero: true
                                    }
                                }]
                            }
                        }
                    };
                </script>
            </div>

            <?php
            $rendimiento = Yii::$app->db->createCommand('SELECT * FROM resultaexamen WHERE modulo='.$mod.' AND usuario='.$model['id'].' ORDER BY id DESC')
                ->queryOne();
            $racierto = $rendimiento['acierto'];
            $rdiff = 100 - $rendimiento['acierto'];
            ?>

            <div class="col-md-3">
                <h3>Performance:</h3>
                <hr>
                <div style="position:relative;">
                    <canvas id="doughnut-chart2" width="500" height="350">

                    </canvas>


                    <h5 style="
                                    position: absolute;
                                    top: 56%;
                                    text-align: center;
                                    margin: 0 auto;
                                    display: block;
                                    width: 100%;
                                    font-size: 25px;
                                    font-weight: 600;
                                    padding: 0px;"><?php echo $racierto;  ?>%</h5>




                </div>
                <br>
                <div class="text-center">
                    <b style="font-weight: 800;">Number of words read per minute: </b> <?php echo $rendimiento['palabras']; ?> <br>
                    <b style="font-weight: 800;">Time: </b> <?php echo $rendimiento['tiempo']; ?> seconds. - <b style="font-weight: 800;">Performance: </b> <?php echo $rendimiento['rendimiento']; ?><br>


                </div>




            </div>
            <div class="col-md-3">
                <h3>Number of times performed:</h3>
                <hr>
                <?php

                $falta = 21 - $total;

                ?>

                <div style="position:relative;">
                    <canvas id="doughnut-chart" width="500" height="350">

                    </canvas>


                    <h5 style="
    position: absolute;
    top: 50%;
    text-align: center;
    margin: 0 auto;
    display: block;
    width: 100%;
    font-size: 25px;
    font-weight: 600;
    padding: 0px;
    "><?php echo $total;  ?><em style="
    font-size: 9px;
    margin: 0px;
    padding: 0px;
    display: block;
    margin-top: -5px;
">completed</em></h5>




                </div>

                <script>
                    var c = {
                        type: 'doughnut',
                        data: {
                            labels: ["Times performed", "You are missing"],
                            datasets: [
                                {
                                    label: "",
                                    backgroundColor: ["#3e95cd", "#8e5ea2"],
                                    data: [<?php echo round($total, 0, PHP_ROUND_HALF_DOWN); ?>,<?php echo round($falta, 0, PHP_ROUND_HALF_DOWN); ?>]
                                }
                            ]
                        },
                        options: {
                            title: {
                                display: true,
                                text: ''
                            }
                        }
                    };

                    var d = {
                        type: 'doughnut',
                        data: {
                            labels: ["% of success", ""],
                            datasets: [
                                {
                                    label: "",
                                    backgroundColor: ["#3e95cd", "#8e5ea2"],
                                    data: [<?php echo $rendimiento['acierto']; ?>,<?php echo $rdiff; ?>]
                                }
                            ]
                        },
                        options: {
                            title: {
                                display: true,
                                text: ''
                            }
                        }
                    };
                </script>
            </div>
        </div>
    </div>

    <br>

    <div class="row">
        <div class="col-md-12">



        </div>
    </div>
</div>
