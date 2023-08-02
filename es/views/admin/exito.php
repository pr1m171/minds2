<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Minds2 - Registro';
$this->params['breadcrumbs'][] = $this->title;
?>






<nav id="menu" class="fake_menu"></nav>

<div id="preloader">
    <div data-loader="circle-side"></div>
</div>
<!-- End Preload -->



<div id="form_container" class="clearfix">
    <figure>
        <a href="index.html"><img src="img/logo.png" width="149" height="42" data-retina="true" alt=""></a>
    </figure>
    <div id="wizard_container">
        <div id="top-wizard">
            <div id="progressbar"></div>
        </div>
        <!-- /top-wizard -->
       <center><h5>Usuario creado exitosamente!</h5>
        <a href="index.php?r=admin/login">Iniciar sesion</a></center>
    </div>
    <!-- /Wizard container -->
</div>
<!-- /Form_container -->
