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
    html, body{
        background: #fff;
    }
</style>

<div class="container-fluid animatedParent animateOnce my-3" style="background: #fff;">
    <div class="animated fadeInUpShort">

        <div class="crucigrama" style="width: 100%; height: 780px; background: #fff;">
            <div class="imagen" style="position: relative; width: 555px; height: 748px;">
                <img src="img/crucigrama.jpg" alt="" style="position: absolute; top: 0px; left: 0px; z-index: 1;">

                <input type="text" class="txtCruci" size="1" style="top:59px; left: 225px;" id="1" />
                <input type="text" class="txtCruci" size="1" style="top:59px; left: 252px;" id="2" />
                <input type="text" class="txtCruci" size="1" style="top:59px; left: 279px;" id="3" />
                <input type="text" class="txtCruci" size="1" style="top:59px; left: 306px;" id="4" />
                <input type="text" class="txtCruci" size="1" style="top:59px; left: 333px;" id="5" />
                <input type="text" class="txtCruci" size="1" style="top:59px; left: 387px;" id="6" />
                <input type="text" class="txtCruci" size="1" style="top:59px; left: 414px;" id="7" />
                <input type="text" class="txtCruci" size="1" style="top:59px; left: 441px;" id="8" />
                <input type="text" class="txtCruci" size="1" style="top:59px; left: 468px;" id="9" />
                <input type="text" class="txtCruci" size="1" style="top:59px; left: 522px;" id="10" />

                <input type="text" class="txtCruci" size="1" style="top:86px; left: 225px;" id="11" />
                <input type="text" class="txtCruci" size="1" style="top:86px; left: 468px;" id="12" />
                <input type="text" class="txtCruci" size="1" style="top:86px; left: 522px;" id="13" />

                <input type="text" class="txtCruci" size="1" style="top:113px; left: 171px;" id="14" />
                <input type="text" class="txtCruci" size="1" style="top:113px; left: 225px;" id="15" />
                <input type="text" class="txtCruci" size="1" style="top:113px; left: 333px;" id="16" />
                <input type="text" class="txtCruci" size="1" style="top:113px; left: 468px;" id="17" />
                <input type="text" class="txtCruci" size="1" style="top:113px; left: 522px;" id="18" />

                <input type="text" class="txtCruci" size="1" style="top:140px; left: 171px;" id="19" />
                <input type="text" class="txtCruci" size="1" style="top:140px; left: 225px;" id="20" />
                <input type="text" class="txtCruci" size="1" style="top:140px; left: 333px;" id="21" />
                <input type="text" class="txtCruci" size="1" style="top:140px; left: 468px;" id="22" />
                <input type="text" class="txtCruci" size="1" style="top:140px; left: 522px;" id="23" />

                <input type="text" class="txtCruci" size="1" style="top:167px; left: 118px;" id="24" />
                <input type="text" class="txtCruci" size="1" style="top:167px; left: 145px;" id="25" />
                <input type="text" class="txtCruci" size="1" style="top:167px; left: 172px;" id="26" />
                <input type="text" class="txtCruci" size="1" style="top:167px; left: 199px;" id="27" />
                <input type="text" class="txtCruci" size="1" style="top:167px; left: 226px;" id="28" />
                <input type="text" class="txtCruci" size="1" style="top:167px; left: 253px;" id="29" />
                <input type="text" class="txtCruci" size="1" style="top:167px; left: 334px;" id="30" />
                <input type="text" class="txtCruci" size="1" style="top:167px; left: 415px;" id="31" />
                <input type="text" class="txtCruci" size="1" style="top:167px; left: 442px;" id="32" />
                <input type="text" class="txtCruci" size="1" style="top:167px; left: 469px;" id="33" />
                <input type="text" class="txtCruci" size="1" style="top:167px; left: 496px;" id="34" />
                <input type="text" class="txtCruci" size="1" style="top:167px; left: 523px;" id="35" />

                <input type="text" class="txtCruci" size="1" style="top:194px; left: 118px;" id="36" />
                <input type="text" class="txtCruci" size="1" style="top:194px; left: 172px;" id="37" />
                <input type="text" class="txtCruci" size="1" style="top:194px; left: 253px;" id="38" />
                <input type="text" class="txtCruci" size="1" style="top:194px; left: 280px;" id="39" />
                <input type="text" class="txtCruci" size="1" style="top:194px; left: 307px;" id="40" />
                <input type="text" class="txtCruci" size="1" style="top:194px; left: 334px;" id="41" />
                <input type="text" class="txtCruci" size="1" style="top:194px; left: 361px;" id="42" />
                <input type="text" class="txtCruci" size="1" style="top:194px; left: 388px;" id="43" />
                <input type="text" class="txtCruci" size="1" style="top:194px; left: 415px;" id="44" />
                <input type="text" class="txtCruci" size="1" style="top:194px; left: 442px;" id="45" />
                <input type="text" class="txtCruci" size="1" style="top:194px; left: 469px;" id="46" />
                <input type="text" class="txtCruci" size="1" style="top:194px; left: 523px;" id="47" />

                <input type="text" class="txtCruci" size="1" style="top:221px; left: 118px;" id="48" />
                <input type="text" class="txtCruci" size="1" style="top:221px; left: 172px;" id="49" />
                <input type="text" class="txtCruci" size="1" style="top:221px; left: 226px;" id="50" />

                <input type="text" class="txtCruci" size="1" style="top:248px; left: 118px;" id="51" />
                <input type="text" class="txtCruci" size="1" style="top:248px; left: 226px;" id="52" />
                <input type="text" class="txtCruci" size="1" style="top:248px; left: 496px;" id="53" />
                <input type="text" class="txtCruci" size="1" style="top:248px; left: 523px;" id="54" />

                <input type="text" class="txtCruci" size="1" style="top:274px; left: 118px;" id="55" />
                <input type="text" class="txtCruci" size="1" style="top:274px; left: 226px;" id="56" />
                <input type="text" class="txtCruci" size="1" style="top:274px; left: 253px;" id="57" />
                <input type="text" class="txtCruci" size="1" style="top:274px; left: 280px;" id="58" />
                <input type="text" class="txtCruci" size="1" style="top:274px; left: 307px;" id="59" />
                <input type="text" class="txtCruci" size="1" style="top:274px; left: 334px;" id="60" />
                <input type="text" class="txtCruci" size="1" style="top:274px; left: 361px;" id="61" />
                <input type="text" class="txtCruci" size="1" style="top:274px; left: 496px;" id="62" />
                <input type="text" class="txtCruci" size="1" style="top:274px; left: 523px;" id="63" />

                <input type="text" class="txtCruci" size="1" style="top:301px; left: 118px;" id="64" />
                <input type="text" class="txtCruci" size="1" style="top:301px; left: 226px;" id="65" />
                <input type="text" class="txtCruci" size="1" style="top:301px; left: 388px;" id="66" />
                <input type="text" class="txtCruci" size="1" style="top:301px; left: 415px;" id="67" />
                <input type="text" class="txtCruci" size="1" style="top:301px; left: 442px;" id="68" />
                <input type="text" class="txtCruci" size="1" style="top:301px; left: 469px;" id="69" />
                <input type="text" class="txtCruci" size="1" style="top:301px; left: 496px;" id="70" />
                <input type="text" class="txtCruci" size="1" style="top:301px; left: 523px;" id="71" />

                <input type="text" class="txtCruci" size="1" style="top:328px; left: 64px;" id="72" />
                <input type="text" class="txtCruci" size="1" style="top:328px; left: 199px;" id="73" />
                <input type="text" class="txtCruci" size="1" style="top:328px; left: 496px;" id="74" />
                <input type="text" class="txtCruci" size="1" style="top:328px; left: 523px;" id="75" />

                <input type="text" class="txtCruci" size="1" style="top:355px; left: 64px;" id="76" />
                <input type="text" class="txtCruci" size="1" style="top:355px; left: 199px;" id="77" />
                <input type="text" class="txtCruci" size="1" style="top:355px; left: 334px;" id="78" />
                <input type="text" class="txtCruci" size="1" style="top:355px; left: 442px;" id="79" />
                <input type="text" class="txtCruci" size="1" style="top:355px; left: 469px;" id="80" />
                <input type="text" class="txtCruci" size="1" style="top:355px; left: 496px;" id="81" />
                <input type="text" class="txtCruci" size="1" style="top:355px; left: 523px;" id="82" />

                <input type="text" class="txtCruci" size="1" style="top:382px; left: 64px;" id="83" />
                <input type="text" class="txtCruci" size="1" style="top:382px; left: 199px;" id="84" />
                <input type="text" class="txtCruci" size="1" style="top:382px; left: 334px;" id="85" />
                <input type="text" class="txtCruci" size="1" style="top:382px; left: 496px;" id="86" />
                <input type="text" class="txtCruci" size="1" style="top:382px; left: 523px;" id="87" />

                <input type="text" class="txtCruci" size="1" style="top:409px; left: 64px;" id="88" />
                <input type="text" class="txtCruci" size="1" style="top:409px; left: 199px;" id="89" />
                <input type="text" class="txtCruci" size="1" style="top:409px; left: 334px;" id="90" />
                <input type="text" class="txtCruci" size="1" style="top:409px; left: 496px;" id="91" />
                <input type="text" class="txtCruci" size="1" style="top:409px; left: 523px;" id="92" />

                <input type="text" class="txtCruci" size="1" style="top:436px; left: 64px;" id="93" />
                <input type="text" class="txtCruci" size="1" style="top:436px; left: 118px;" id="94" />
                <input type="text" class="txtCruci" size="1" style="top:436px; left: 145px;" id="95" />
                <input type="text" class="txtCruci" size="1" style="top:436px; left: 172px;" id="96" />
                <input type="text" class="txtCruci" size="1" style="top:436px; left: 199px;" id="97" />
                <input type="text" class="txtCruci" size="1" style="top:436px; left: 334px;" id="98" />
                <input type="text" class="txtCruci" size="1" style="top:436px; left: 523px;" id="99" />

                <input type="text" class="txtCruci" size="1" style="top:463px; left: 37px;" id="100" />
                <input type="text" class="txtCruci" size="1" style="top:463px; left: 64px;" id="101" />
                <input type="text" class="txtCruci" size="1" style="top:463px; left: 91px;" id="102" />
                <input type="text" class="txtCruci" size="1" style="top:463px; left: 118px;" id="103" />
                <input type="text" class="txtCruci" size="1" style="top:463px; left: 145px;" id="104" />
                <input type="text" class="txtCruci" size="1" style="top:463px; left: 172px;" id="105" />
                <input type="text" class="txtCruci" size="1" style="top:463px; left: 199px;" id="106" />
                <input type="text" class="txtCruci" size="1" style="top:463px; left: 226px;" id="107" />
                <input type="text" class="txtCruci" size="1" style="top:463px; left: 253px;" id="108" />
                <input type="text" class="txtCruci" size="1" style="top:463px; left: 280px;" id="109" />
                <input type="text" class="txtCruci" size="1" style="top:463px; left: 334px;" id="110" />
                <input type="text" class="txtCruci" size="1" style="top:463px; left: 361px;" id="111" />
                <input type="text" class="txtCruci" size="1" style="top:463px; left: 388px;" id="112" />
                <input type="text" class="txtCruci" size="1" style="top:463px; left: 415px;" id="113" />
                <input type="text" class="txtCruci" size="1" style="top:463px; left: 442px;" id="114" />
                <input type="text" class="txtCruci" size="1" style="top:463px; left: 469px;" id="115" />
                <input type="text" class="" size="1" style="top:463px; left: 496px;" id="116" />

                <button class="btn-primary btn txtCruci" id="verRepuestas" style="display:none; top: 760px; width: 215px; height: 35px; left: 325px;">VERIFY!</button>


            </div>


        </div>

    </div>

</div>
