<?php

/* @var $this yii\web\View */
use app\models\Usuarios;

$this->title = 'Minds2 - Platafroma de lectura rapida';
?>

<main>
    <section id="hero_in" class="cart_section">
        <div class="wrapper">
            <div class="container">
                <div class="bs-wizard clearfix">
                    <div class="bs-wizard-step">
                        <div class="text-center bs-wizard-stepnum">Su orden</div>
                        <div class="progress">
                            <div class="progress-bar"></div>
                        </div>
                        <a href="index.php?r=site/carrito" class="bs-wizard-dot"></a>
                    </div>

                    <div class="bs-wizard-step active">
                        <div class="text-center bs-wizard-stepnum">Pago</div>
                        <div class="progress">
                            <div class="progress-bar"></div>
                        </div>
                        <a href="#" class="bs-wizard-dot"></a>
                    </div>

                    <div class="bs-wizard-step active">
                        <div class="text-center bs-wizard-stepnum">Listo!</div>
                        <div class="progress">
                            <div class="progress-bar"></div>
                        </div>
                        <a href="#" class="bs-wizard-dot"></a>
                    </div>
                </div>
                <!-- End bs-wizard -->
                <div id="confirm">
                <h4>¡Éxito en la compra!</h4>
            </div>
            </div>
        </div>
    </section>
    <!--/hero_in-->
</main>
<!--/main-->

