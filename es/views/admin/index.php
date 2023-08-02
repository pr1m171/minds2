<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use app\models\Resultados;
/* @var $this yii\web\View */
/* @var $model app\models\Usuarios */
/* @var $form ActiveForm */
$this->title = 'Minds2 - Control panel';
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
    .btn{
        white-space: normal !important;
        padding: .375rem 1px;
    }
    .btn1 {
        padding: 0.35rem .45rem !important;
    }
    .m6{
        padding: 0.35rem 1rem !important;
    }
    .bateria{
        height: 25px;
        width: 100%;
        color: #0a0a0a;
        background: #ffebeb;
        border-radius: 3px;
        position: relative;
    }
    .bateria .carga{
        height: 25px;
        width: 0%;
        background: #34a227;
        border-radius: 3px;
        position: absolute;
        top: 0px;
        left: 0px;
    }
    .bateria p{
        position: absolute;
        left: 0px;
        top: 0px;
        color: #000;
        width: 100%;
        height: 25px;
    }
    @media (max-width:1700px) {
        .m6 {
            padding: 1.1rem 1rem !important;
        }
    }
    @media (max-width:990px) {
        .m6 {
            padding: 0.35rem 1rem !important;
        }
    }
</style>
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

<div class="container-fluid animatedParent animateOnce my-3">
    <div class="row">
        <div class="col-lg-4">
            <div class="card r-3" style="min-height: 130px;">
                <div class="p-4">
                    <div class="float-right">
                        <span class="icon-award brown-text s-48"></span>
                    </div>
                    <div class="counter-title">Rank</div>
                    <h5 class="">Bronze</h5>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card r-3" style="min-height: 130px;">
                <div class="p-4">
                    <div class="float-right"><span class="icon-stop-watch3 blue-text s-48"></span>
                    </div>
                    <div class="counter-title ">Time left</div>
                    <h5 class="">15' until next lesson.</h5>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="white card" style="min-height: 130px;">
                <div class="p-4">
                    <div class="float-right"><span class="icon-orders s-48" style="color:#794f11;"></span>
                    </div>
                    <div class="counter-title">Modules Completed</div>
                    <h5 class="sc-counter mt-3">0</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>

    <div style="margin-top: 25px;"></div>


    <?php
    function contador($mod, $id){
        $modulo = Resultados::find()
            ->where('idModulo='.$mod)
            ->andWhere('idUsuario='.$id)
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

        return $total;
    }
    function porcentaje($tot){
        $ptot = ($tot * 100) / 21;
        if ($ptot > 100){
            $ptot = 100;
        }
        return $ptot;
    }


    ?>

    <div class="clearfix"></div>
    <div class="row">



        <div class="col-lg-4">
            <div class="card no-b p-3">
                <h2>BASIC LEVEL</h2>
                <div class="card no-b p-3" >
                    <div class="row">
                        <div class="col-md-12"><a href="index.php?r=lector/index&sus=1&modulo=1&user=<?php echo $model['id'] ?>" class="btn <?php if(contador(1,$model['id']) > 0){ echo "btn-primary"; }else{ echo "btn-secondary";} ?>" style="width: 100%;" target="_blank">Module 1</a></div>
                        <div class="col-md-12 text-center">
                            <div class="bateria">
                                <div class="carga" style="width:<?php echo porcentaje(contador(1,$model['id'])); ?>%;"></div>
                                <p><?php echo contador(1,$model['id']); ?>/21</p>
                            </div>
                        </div>
                        <br><br>
                        <div class="col-md-10"><a href="index.php?r=admin/examen&modulo=44" class="btn btn-secondary" style="width: 100%;">READING COMPREHENSION TEST AND RESULT</a></div>
                        <div class="col-md-2"><a href="index.php?r=admin/reporte&modulo=1" class="btn btn1 btn-secondary m6 float-right"><i class="far fa-chart-bar"></i></a></div>

                    </div>


                </div>

                <div class="card no-b p-3" >
                    <div class="row">
                        <div class="col-md-12"><a href="index.php?r=lector/index&sus=1&modulo=2&user=<?php echo $model['id'] ?>" class="btn <?php if(contador(2,$model['id']) > 0){ echo "btn-primary"; }else{ echo "btn-secondary";} ?>" style="width: 100%;" target="_blank">Module 2</a></div>
                        <div class="col-md-12 text-center">
                            <div class="bateria">
                                <div class="carga" style="width:<?php echo porcentaje(contador(2,$model['id'])); ?>%;"></div>
                                <p><?php echo contador(2,$model['id']); ?>/21</p>
                            </div>
                        </div>
                        <br><br>
                        <div class="col-md-10"><a href="index.php?r=admin/examen&modulo=46" class="btn btn-secondary" style="width: 100%;">READING COMPREHENSION TEST AND RESULT</a></div>
                        <div class="col-md-2"><a href="index.php?r=admin/reporte&modulo=2" class="btn btn1 btn-secondary m6 float-right"><i class="far fa-chart-bar"></i></a></div>

                    </div>


                </div>


                <div class="card no-b p-3" >
                    <div class="row">
                        <div class="col-md-12"><a href="index.php?r=lector/index&sus=1&modulo=3&user=<?php echo $model['id'] ?>" class="btn <?php if(contador(3,$model['id']) > 0){ echo "btn-primary"; }else{ echo "btn-secondary";} ?>" style="width: 100%;" target="_blank">Module 3</a></div>
                        <div class="col-md-12 text-center">
                            <div class="bateria">
                                <div class="carga" style="width:<?php echo porcentaje(contador(3,$model['id'])); ?>%;"></div>
                                <p><?php echo contador(3,$model['id']); ?>/21</p>
                            </div>
                        </div>
                        <br><br>
                        <div class="col-md-10"><a href="index.php?r=admin/examen&modulo=48" class="btn btn-secondary" style="width: 100%;">READING COMPREHENSION TEST AND RESULT</a></div>
                        <div class="col-md-2"><a href="index.php?r=admin/reporte&modulo=3" class="btn btn1 btn-secondary m6 float-right"><i class="far fa-chart-bar"></i></a></div>
                    </div>
                </div>

                <div class="card no-b p-3" >
                    <div class="row">
                        <div class="col-md-12"><a href="index.php?r=lector/index&sus=1&modulo=4&user=<?php echo $model['id'] ?>" class="btn <?php if(contador(4,$model['id']) > 0){ echo "btn-primary"; }else{ echo "btn-secondary";} ?>" style="width: 100%;" target="_blank">Module 4</a></div>
                        <div class="col-md-12 text-center">
                            <div class="bateria">
                                <div class="carga" style="width:<?php echo porcentaje(contador(4,$model['id'])); ?>%;"></div>
                                <p><?php echo contador(4,$model['id']); ?>/21</p>
                            </div>
                        </div>
                        <br><br>
                        <div class="col-md-10"><a href="index.php?r=admin/examen&modulo=50" class="btn btn-secondary" style="width: 100%;">READING COMPREHENSION TEST AND RESULT</a></div>
                        <div class="col-md-2"><a href="index.php?r=admin/reporte&modulo=4" class="btn btn1 btn-secondary m6 float-right"><i class="far fa-chart-bar"></i></a></div>
                    </div>
                </div>


                <div class="card no-b p-3" >
                    <div class="row">
                        <div class="col-md-12"><a href="index.php?r=lector/index&sus=1&modulo=5&user=<?php echo $model['id'] ?>" class="btn <?php if(contador(5,$model['id']) > 0){ echo "btn-primary"; }else{ echo "btn-secondary";} ?>" style="width: 100%;" target="_blank">Module 5</a></div>
                        <div class="col-md-12 text-center">
                            <div class="bateria">
                                <div class="carga" style="width:<?php echo porcentaje(contador(5,$model['id'])); ?>%;"></div>
                                <p><?php echo contador(5,$model['id']); ?>/21</p>
                            </div>
                        </div>
                        <br><br>
                        <div class="col-md-10"><a href="index.php?r=admin/examen&modulo=52" class="btn btn-secondary" style="width: 100%;">READING COMPREHENSION TEST AND RESULT</a></div>
                        <div class="col-md-2"><a href="index.php?r=admin/reporte&modulo=5" class="btn btn1 btn-secondary m6 float-right"><i class="far fa-chart-bar"></i></a></div>
                    </div>
                </div>

                <div class="card no-b p-3" >
                    <div class="row">
                        <div class="col-md-12"><a href="index.php?r=lector/index&sus=1&modulo=6&user=<?php echo $model['id'] ?>" class="btn <?php if(contador(6,$model['id']) > 0){ echo "btn-primary"; }else{ echo "btn-secondary";} ?>" style="width: 100%;" target="_blank">Module 6</a></div>
                        <div class="col-md-12 text-center">
                            <div class="bateria">
                                <div class="carga" style="width:<?php echo porcentaje(contador(6,$model['id'])); ?>%;"></div>
                                <p><?php echo contador(6,$model['id']); ?>/21</p>
                            </div>
                        </div>
                        <br><br>
                        <div class="col-md-10"><a href="index.php?r=admin/examen&modulo=54" class="btn btn-secondary" style="width: 100%;">READING COMPREHENSION TEST AND RESULT</a></div>
                        <div class="col-md-2"><a href="index.php?r=admin/reporte&modulo=6" class="btn btn1 btn-secondary m6 float-right"><i class="far fa-chart-bar"></i></a></div>
                    </div>
                </div>

                <div class="card no-b p-3" >
                    <div class="row">
                        <div class="col-md-12"><a href="index.php?r=lector/index&sus=1&modulo=7&user=<?php echo $model['id'] ?>" class="btn <?php if(contador(7,$model['id']) > 0){ echo "btn-primary"; }else{ echo "btn-secondary";} ?>" style="width: 100%;" target="_blank">Module 7</a></div>
                        <div class="col-md-12 text-center">
                            <div class="bateria">
                                <div class="carga" style="width:<?php echo porcentaje(contador(7,$model['id'])); ?>%;"></div>
                                <p><?php echo contador(7,$model['id']); ?>/21</p>
                            </div>
                        </div>
                        <br><br>
                        <div class="col-md-10"><a href="index.php?r=admin/examen&modulo=56" class="btn btn-secondary" style="width: 100%;">READING COMPREHENSION TEST AND RESULT</a></div>
                        <div class="col-md-2"><a href="index.php?r=admin/reporte&modulo=7" class="btn btn1 btn-secondary m6 float-right"><i class="far fa-chart-bar"></i></a></div>
                    </div>
                </div>

                <div class="card no-b p-3" >
                    <div class="row">
                        <div class="col-md-12"><a href="index.php?r=lector/index&sus=1&modulo=8&user=<?php echo $model['id'] ?>" class="btn <?php if(contador(8,$model['id']) > 0){ echo "btn-primary"; }else{ echo "btn-secondary";} ?>" style="width: 100%;" target="_blank">Module 8</a></div>
                        <div class="col-md-12 text-center">
                            <div class="bateria">
                                <div class="carga" style="width:<?php echo porcentaje(contador(8,$model['id'])); ?>%;"></div>
                                <p><?php echo contador(8,$model['id']); ?>/21</p>
                            </div>
                        </div>
                        <br><br>
                        <div class="col-md-10"><a href="index.php?r=admin/examen&modulo=58" class="btn btn-secondary" style="width: 100%;">READING COMPREHENSION TEST AND RESULT</a></div>
                        <div class="col-md-2"><a href="index.php?r=admin/reporte&modulo=8" class="btn btn1 btn-secondary m6 float-right"><i class="far fa-chart-bar"></i></a></div>
                    </div>
                </div>



            </div>

        </div>


        <div class="col-lg-4">
            <div class="card no-b p-3">
                <h2>MID LEVEL</h2>
                <div class="card no-b p-3" >
                    <div class="row">
                        <div class="col-md-12"><a href="index.php?r=lector/index&sus=1&modulo=9&user=<?php echo $model['id'] ?>" class="btn <?php if(contador(9,$model['id']) > 0){ echo "btn-primary"; }else{ echo "btn-secondary";} ?>" style="width: 100%;" target="_blank">Module 9</a></div>
                        <div class="col-md-12 text-center">
                            <div class="bateria">
                                <div class="carga" style="width:<?php echo porcentaje(contador(9,$model['id'])); ?>%;"></div>
                                <p><?php echo contador(9,$model['id']); ?>/21</p>
                            </div>
                        </div>
                        <br><br>
                        <div class="col-md-10"><a href="index.php?r=admin/examen&modulo=60" class="btn btn-secondary" style="width: 100%;">READING COMPREHENSION TEST AND RESULT</a></div>
                        <div class="col-md-2"><a href="index.php?r=admin/reporte&modulo=9" class="btn btn1 btn-secondary m6 float-right"><i class="far fa-chart-bar"></i></a></div>
                    </div>


                </div>

                <div class="card no-b p-3" >
                    <div class="row">
                        <div class="col-md-12"><a href="index.php?r=lector/index&sus=1&modulo=10&user=<?php echo $model['id'] ?>" class="btn <?php if(contador(10,$model['id']) > 0){ echo "btn-primary"; }else{ echo "btn-secondary";} ?>" style="width: 100%;" target="_blank">Module 10</a></div>
                        <div class="col-md-12 text-center">
                            <div class="bateria">
                                <div class="carga" style="width:<?php echo porcentaje(contador(10,$model['id'])); ?>%;"></div>
                                <p><?php echo contador(10,$model['id']); ?>/21</p>
                            </div>
                        </div>
                        <br><br>
                        <div class="col-md-10"><a href="index.php?r=admin/examen&modulo=62" class="btn btn-secondary" style="width: 100%;">READING COMPREHENSION TEST AND RESULT</a></div>
                        <div class="col-md-2"><a href="index.php?r=admin/reporte&modulo=10" class="btn btn1 btn-secondary m6 float-right"><i class="far fa-chart-bar"></i></a></div>
                    </div>


                </div>


                <div class="card no-b p-3" >
                    <div class="row">
                        <div class="col-md-12"><a href="index.php?r=lector/index&sus=1&modulo=11&user=<?php echo $model['id'] ?>" class="btn <?php if(contador(11,$model['id']) > 0){ echo "btn-primary"; }else{ echo "btn-secondary";} ?>" style="width: 100%;" target="_blank">Module 11</a></div>
                        <div class="col-md-12 text-center">
                            <div class="bateria">
                                <div class="carga" style="width:<?php echo porcentaje(contador(11,$model['id'])); ?>%;"></div>
                                <p><?php echo contador(11,$model['id']); ?>/21</p>
                            </div>
                        </div>
                        <br><br>
                        <div class="col-md-10"><a href="index.php?r=admin/examen&modulo=64" class="btn btn-secondary" style="width: 100%;">READING COMPREHENSION TEST AND RESULT</a></div>
                        <div class="col-md-2"><a href="index.php?r=admin/reporte&modulo=11" class="btn btn1 btn-secondary m6 float-right"><i class="far fa-chart-bar"></i></a></div>
                    </div>
                </div>

                <div class="card no-b p-3" >
                    <div class="row">
                        <div class="col-md-12"><a href="index.php?r=lector/index&sus=1&modulo=12&user=<?php echo $model['id'] ?>" class="btn <?php if(contador(12,$model['id']) > 0){ echo "btn-primary"; }else{ echo "btn-secondary";} ?>" style="width: 100%;" target="_blank">Module 12</a></div>
                        <div class="col-md-12 text-center">
                            <div class="bateria">
                                <div class="carga" style="width:<?php echo porcentaje(contador(12,$model['id'])); ?>%;"></div>
                                <p><?php echo contador(12,$model['id']); ?>/21</p>
                            </div>
                        </div>
                        <br><br>
                        <div class="col-md-10"><a href="index.php?r=admin/examen&modulo=66" class="btn btn-secondary" style="width: 100%;">READING COMPREHENSION TEST AND RESULT</a></div>
                        <div class="col-md-2"><a href="index.php?r=admin/reporte&modulo=12" class="btn btn1 btn-secondary m6 float-right"><i class="far fa-chart-bar"></i></a></div>
                    </div>
                </div>


                <div class="card no-b p-3" >
                    <div class="row">
                        <div class="col-md-12"><a href="index.php?r=lector/index&sus=1&modulo=13&user=<?php echo $model['id'] ?>" class="btn <?php if(contador(13,$model['id']) > 0){ echo "btn-primary"; }else{ echo "btn-secondary";} ?>" style="width: 100%;" target="_blank">Module 13</a></div>
                        <div class="col-md-12 text-center">
                            <div class="bateria">
                                <div class="carga" style="width:<?php echo porcentaje(contador(13,$model['id'])); ?>%;"></div>
                                <p><?php echo contador(13,$model['id']); ?>/21</p>
                            </div>
                        </div>
                        <br><br>
                        <div class="col-md-10"><a href="index.php?r=admin/examen&modulo=68" class="btn btn-secondary" style="width: 100%;">READING COMPREHENSION TEST AND RESULT</a></div>
                        <div class="col-md-2"><a href="index.php?r=admin/reporte&modulo=13" class="btn btn1 btn-secondary m6 float-right"><i class="far fa-chart-bar"></i></a></div>
                    </div>
                </div>

                <div class="card no-b p-3" >
                    <div class="row">
                        <div class="col-md-12"><a href="index.php?r=lector/index&sus=1&modulo=14&user=<?php echo $model['id'] ?>" class="btn <?php if(contador(14,$model['id']) > 0){ echo "btn-primary"; }else{ echo "btn-secondary";} ?>" style="width: 100%;" target="_blank">Module 14</a></div>
                        <div class="col-md-12 text-center">
                            <div class="bateria">
                                <div class="carga" style="width:<?php echo porcentaje(contador(14,$model['id'])); ?>%;"></div>
                                <p><?php echo contador(14,$model['id']); ?>/21</p>
                            </div>
                        </div>
                        <br><br>
                        <div class="col-md-10"><a href="index.php?r=admin/examen&modulo=70" class="btn btn-secondary" style="width: 100%;">READING COMPREHENSION TEST AND RESULT</a></div>
                        <div class="col-md-2"><a href="index.php?r=admin/reporte&modulo=14" class="btn btn1 btn-secondary m6 float-right"><i class="far fa-chart-bar"></i></a></div>
                    </div>
                </div>

                <div class="card no-b p-3" >
                    <div class="row">
                        <div class="col-md-12"><a href="index.php?r=lector/index&sus=1&modulo=15&user=<?php echo $model['id'] ?>" class="btn <?php if(contador(15,$model['id']) > 0){ echo "btn-primary"; }else{ echo "btn-secondary";} ?>" style="width: 100%;" target="_blank">Module 15</a></div>
                        <div class="col-md-12 text-center">
                            <div class="bateria">
                                <div class="carga" style="width:<?php echo porcentaje(contador(15,$model['id'])); ?>%;"></div>
                                <p><?php echo contador(15,$model['id']); ?>/21</p>
                            </div>
                        </div>
                        <br><br>
                        <div class="col-md-10"><a href="index.php?r=admin/examen&modulo=72" class="btn btn-secondary" style="width: 100%;">READING COMPREHENSION TEST AND RESULT</a></div>
                        <div class="col-md-2"><a href="index.php?r=admin/reporte&modulo=15" class="btn btn1 btn-secondary m6 float-right"><i class="far fa-chart-bar"></i></a></div>
                    </div>
                </div>

                <div class="card no-b p-3" >
                    <div class="row">
                        <div class="col-md-12"><a href="index.php?r=lector/index&sus=1&modulo=16&user=<?php echo $model['id'] ?>" class="btn <?php if(contador(16,$model['id']) > 0){ echo "btn-primary"; }else{ echo "btn-secondary";} ?>" style="width: 100%;" target="_blank">Module 16</a></div>
                        <div class="col-md-12 text-center">
                            <div class="bateria">
                                <div class="carga" style="width:<?php echo porcentaje(contador(16,$model['id'])); ?>%;"></div>
                                <p><?php echo contador(16,$model['id']); ?>/21</p>
                            </div>
                        </div>
                        <br><br>
                        <div class="col-md-10"><a href="index.php?r=admin/examen&modulo=74" class="btn btn-secondary" style="width: 100%;">READING COMPREHENSION TEST AND RESULT</a></div>
                        <div class="col-md-2"><a href="index.php?r=admin/reporte&modulo=16" class="btn btn1 btn-secondary m6 float-right"><i class="far fa-chart-bar"></i></a></div>
                    </div>
                </div>



            </div>

        </div>

        <div class="col-lg-4">
            <div class="card no-b p-3">
                <h2>ADVANCED LEVEL</h2>
                <div class="card no-b p-3" >
                    <div class="row">
                        <div class="col-md-12"><a href="index.php?r=lector/index&sus=1&modulo=17&user=<?php echo $model['id'] ?>" class="btn <?php if(contador(17,$model['id']) > 0){ echo "btn-primary"; }else{ echo "btn-secondary";} ?>" style="width: 100%;" target="_blank">Module 17</a></div>
                        <div class="col-md-12 text-center">
                            <div class="bateria">
                                <div class="carga" style="width:<?php echo porcentaje(contador(17,$model['id'])); ?>%;"></div>
                                <p><?php echo contador(17,$model['id']); ?>/21</p>
                            </div>
                        </div>
                        <br><br>
                        <div class="col-md-10"><a href="index.php?r=admin/examen&modulo=76" class="btn btn-secondary" style="width: 100%;">READING COMPREHENSION TEST AND RESULT</a></div>
                        <div class="col-md-2"><a href="index.php?r=admin/reporte&modulo=17" class="btn btn1 btn-secondary m6 float-right"><i class="far fa-chart-bar"></i></a></div>
                    </div>


                </div>

                <div class="card no-b p-3" >
                    <div class="row">
                        <div class="col-md-12"><a href="index.php?r=lector/index&sus=1&modulo=18&user=<?php echo $model['id'] ?>" class="btn <?php if(contador(18,$model['id']) > 0){ echo "btn-primary"; }else{ echo "btn-secondary";} ?>" style="width: 100%;" target="_blank">Module 18</a></div>
                        <div class="col-md-12 text-center">
                            <div class="bateria">
                                <div class="carga" style="width:<?php echo porcentaje(contador(18,$model['id'])); ?>%;"></div>
                                <p><?php echo contador(18,$model['id']); ?>/21</p>
                            </div>
                        </div>
                        <br><br>
                        <div class="col-md-10"><a href="index.php?r=admin/examen&modulo=78" class="btn btn-secondary" style="width: 100%;">READING COMPREHENSION TEST AND RESULT</a></div>
                        <div class="col-md-2"><a href="index.php?r=admin/reporte&modulo=18" class="btn btn1 btn-secondary m6 float-right"><i class="far fa-chart-bar"></i></a></div>
                    </div>


                </div>


                <div class="card no-b p-3" >
                    <div class="row">
                        <div class="col-md-12"><a href="index.php?r=lector/index&sus=1&modulo=19&user=<?php echo $model['id'] ?>" class="btn <?php if(contador(19,$model['id']) > 0){ echo "btn-primary"; }else{ echo "btn-secondary";} ?>" style="width: 100%;" target="_blank">Module 19</a></div>
                        <div class="col-md-12 text-center">
                            <div class="bateria">
                                <div class="carga" style="width:<?php echo porcentaje(contador(19,$model['id'])); ?>%;"></div>
                                <p><?php echo contador(19,$model['id']); ?>/21</p>
                            </div>
                        </div>
                        <br><br>
                        <div class="col-md-10"><a href="index.php?r=admin/examen&modulo=80" class="btn btn-secondary" style="width: 100%;">READING COMPREHENSION TEST AND RESULT</a></div>
                        <div class="col-md-2"><a href="index.php?r=admin/reporte&modulo=19" class="btn btn1 btn-secondary m6 float-right"><i class="far fa-chart-bar"></i></a></div>
                    </div>
                </div>

                <div class="card no-b p-3" >
                    <div class="row">
                        <div class="col-md-12"><a href="index.php?r=lector/index&sus=1&modulo=20&user=<?php echo $model['id'] ?>" class="btn <?php if(contador(20,$model['id']) > 0){ echo "btn-primary"; }else{ echo "btn-secondary";} ?>" style="width: 100%;" target="_blank">Module 20</a></div>
                        <div class="col-md-12 text-center">
                            <div class="bateria">
                                <div class="carga" style="width:<?php echo porcentaje(contador(20,$model['id'])); ?>%;"></div>
                                <p><?php echo contador(20,$model['id']); ?>/21</p>
                            </div>
                        </div>
                        <br><br>
                        <div class="col-md-10"><a href="index.php?r=admin/examen&modulo=82" class="btn btn-secondary" style="width: 100%;">READING COMPREHENSION TEST AND RESULT</a></div>
                        <div class="col-md-2"><a href="index.php?r=admin/reporte&modulo=20" class="btn btn1 btn-secondary m6 float-right"><i class="far fa-chart-bar"></i></a></div>
                    </div>
                </div>


                <hr>
                <br><br><br>
                <h2>PRACTICE MODULES:</h2>
                <br>
                <div class="card no-b p-3" >
                    <div class="row">
                        <div class="col-md-10"><a href="index.php?r=lector/index&sus=1&modulo=21&user=<?php echo $model['id'] ?>" class="btn <?php if(contador(21,$model['id']) > 0){ echo "btn-primary"; }else{ echo "btn-secondary";} ?>" style="width: 100%;" target="_blank">Module 21</a>
                            <br><br>
                            <a href="index.php?r=admin/form21" class="btn btn-primary" style="width: 100%;">PASTIME</a>
                        </div></div>
                </div>

                <div class="card no-b p-3" >
                    <div class="row">
                        <div class="col-md-10"><a href="index.php?r=lector/index&sus=1&modulo=22&user=<?php echo $model['id'] ?>" class="btn <?php if(contador(22,$model['id']) > 0){ echo "btn-primary"; }else{ echo "btn-secondary";} ?>" style="width: 100%;" target="_blank">Module 22</a>
                            <br><br>
                            <a href="index.php?r=admin/crucigrama" class="btn btn-primary" style="width: 100%;">PASTIME</a>
                        </div></div>
                </div>

                <div class="card no-b p-3" >
                    <div class="row">
                        <div class="col-md-10"><a href="index.php?r=lector/index&sus=1&modulo=23&user=<?php echo $model['id'] ?>" class="btn <?php if(contador(23,$model['id']) > 0){ echo "btn-primary"; }else{ echo "btn-secondary";} ?>" style="width: 100%;" target="_blank">Module 23</a></div></div>
                </div>

                <div class="card no-b p-3" >
                    <div class="row">
                        <div class="col-md-10"><a href="index.php?r=lector/index&sus=1&modulo=24&user=<?php echo $model['id'] ?>" class="btn <?php if(contador(24,$model['id']) > 0){ echo "btn-primary"; }else{ echo "btn-secondary";} ?>" style="width: 100%;" target="_blank">Module 24</a></div></div>
                </div>






            </div>

        </div>





    </div>
</div>
