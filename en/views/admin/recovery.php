<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Recovery password';
$this->params['breadcrumbs'][] = $this->title;
?>






    <nav id="menu" class="fake_menu"></nav>

    <div id="preloader">
        <div data-loader="circle-side"></div>
    </div>
    <!-- End Preload -->

    <div id="login">
        <aside>
            <figure>
                <a href="index.php"><img src="img/logo.png" width="149" height="42" data-retina="true" alt=""></a>
            </figure>


            <?php $form = ActiveForm::begin([
                'id' => 'login-form',
                'layout' => 'horizontal',
                'fieldConfig' => [
                    'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
                    'labelOptions' => ['class' => 'col-lg-1 control-label'],
                ],
            ]); ?>

            <div class="form-group">
					<span class="input">
					<input class="input_field" type="email" name="username" id="username">
						<label class="input_label">
						<span class="input__label-content">Email</span>
					</label>
					</span>


            </div>
            <input type="submit" class="btn_1 rounded full-width add_top_60" name="login-button" value="Recovery">
            <div class="text-center add_top_10">Send data in your inbox email.</div>


            <?php ActiveForm::end(); ?>





            <div class="copy">© 2020 MINDS2</div>
        </aside>
    </div>

<?php
