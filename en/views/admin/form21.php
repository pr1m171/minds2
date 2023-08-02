<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
/* @var $this yii\web\View */
/* @var $model app\models\Usuarios */
/* @var $form ActiveForm */
$this->title = '';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container-fluid">
    <div class="row p-t-b-10 ">
        <div class="col">
            <div class="pb-3">
                Minds2 - Control panel
            </div>
        </div>
    </div>



</div>
</header>

<style>
    .txtCruci{
        position: absolute;
        width: 28px;
        height: 27px;
        z-index: 3;
        text-align: center;
        font-size: 16px;
        font-weight: 600;
    }
    textarea{
        position: absolute;
        z-index: 99;

        text-align: center;
        border-radius: 5px;
        border: 1px solid #a8aaff;
        color: #13bc5c;
        font-weight: 300;
        font-size: 12px;
    }
    html, body{
        background: #fff;
    }
</style>

<div class="container-fluid animatedParent animateOnce my-3" style="background: #fff;">
    <div class="animated fadeInUpShort">

        <div class="crucigrama" style="width: 1320px; height: 755px; background: #fff;">
            <div class="imagen" style="position: relative; width: 1320px; height: 755px;">
                <img src="img/pasatiempo21.jpg" alt="" style="position: absolute; top: 0px; left: 0px; z-index: 1;">
                <textarea name="txt1" style="top: 657px; left: 320px; width: 275px; height: 83px;" id="txt1" cols="30" rows="10"></textarea>
                <textarea name="txt2" style="top: 91px; left: 993px; width: 300px; height: 236px;" id="txt2" cols="30" rows="10"></textarea>
                <textarea name="txt3" style="top: 499px; left: 992px; width: 300px; height: 236px;" id="txt3" cols="30" rows="10"></textarea>

            </div>


        </div>

    </div>

</div>
