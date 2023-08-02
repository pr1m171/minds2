<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
/* @var $this yii\web\View */
/* @var $model app\models\Usuarios */
/* @var $form ActiveForm */
$this->title = 'User profile';
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

        <div class="row">
            <ul class="nav nav-material responsive-tab" id="v-pills-tab" role="tablist">
                <li>
                    <a class="nav-link active" id="v-pills-tab1-tab" data-toggle="pill" href="#v-pills-tab1" role="tab" aria-controls="v-pills-tab1">
                        <i class="icon icon-home2"></i>Resume
                    </a>
                </li>

                <li>
                    <a class="nav-link" id="preferencias-tab" data-toggle="pill" href="#preferencias" role="tab" aria-controls="preferencias" aria-selected="false"><i class="icon icon-cog"></i>Edit Profile</a>
                </li>
            </ul>
        </div>

    </div>
</header>

<div class="container-fluid animatedParent animateOnce my-3">
    <div class="animated fadeInUpShort">
        <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-tab1" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card ">

                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><i class="icon icon-mobile text-primary"></i><strong class="s-12">Phone</strong> <span class="float-right s-12"><?php echo $model['tel']; ?></span></li>
                                <li class="list-group-item"><i class="icon icon-mail text-success"></i><strong class="s-12">Email</strong> <span class="float-right s-12"><?php echo $model['email']; ?></span></li>
                                <li class="list-group-item"><i class="icon icon-address-card-o text-warning"></i><strong class="s-12">Address</strong> <span class="float-right s-12"><?php echo $model['direccion']; ?></span></li>
                                <li class="list-group-item"><i class="icon icon-web text-danger"></i> <strong class="s-12">Occupation</strong> <span class="float-right s-12"><?php echo $model['ocupacion']; ?></span></li>
                            </ul>
                        </div>

                        <div class="clearfix"></div>
                        <div style="margin-top:25px;"></div>
                        <div class="clearfix"></div>


                        <div class="card ">

                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><i class="icon icon-class text-primary"></i><strong class="s-12">Level:</strong> <span class="float-right s-12">Básico</span></li>
                                <li class="list-group-item"><i class="icon icon-gold text-success"></i><strong class="s-12">Progress</strong> <span class="float-right s-12">Módulo 1</span></li>
                                <li class="list-group-item"><i class="icon icon-av_timer text-warning"></i><strong class="s-12">Hours</strong> <span class="float-right s-12">1:45</span></li>
                                <li class="list-group-item"><i class="icon icon-clock-o text-danger"></i> <strong class="s-12">Next exercise</strong> <span class="float-right s-12">3 Horas</span></li>
                            </ul>
                        </div>

                    </div>

                    




                </div>
            </div>


            <div class="tab-pane fade" id="preferencias" role="tabpanel" aria-labelledby="preferencias-tab">


                <div class="row">


                <div class="col-md-10">
                <?php $form = ActiveForm::begin(['action' => ['admin/updateprofile'],'options' => ['method' => 'post']]); ?>


                    <div class="row">
                        <div class="col-md-6">
                        <?= $form->field($model, 'nombre') ?>
                        <?= $form->field($model, 'apellido') ?>
                        <?= $form->field($model, 'dni') ?>
                        <?= $form->field($model, 'email') ?>
                        <?= $form->field($model, 'fnac') ?>
                        </div>
                        <div class="col-md-6">
                        <?= $form->field($model, 'tel') ?>
                        <?= $form->field($model, 'pais') ?>
                        <?= $form->field($model, 'ciudad') ?>
                        <?= $form->field($model, 'direccion') ?>
                        <?= $form->field($model, 'ocupacion') ?>
                        </div>
                    </div>

                        <div class="form-group float-right">
                            <?= Html::submitButton('Guardar', ['class' => 'btn btn-primary']) ?>
                        </div>


                    <?php ActiveForm::end(); ?>
                </div>
                </div>

            </div>
        </div>
    </div>
</div>
