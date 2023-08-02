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

                    <div class="bs-wizard-step disabled">
                        <div class="text-center bs-wizard-stepnum">Listo!</div>
                        <div class="progress">
                            <div class="progress-bar"></div>
                        </div>
                        <a href="#" class="bs-wizard-dot"></a>
                    </div>
                </div>
                <!-- End bs-wizard -->
            </div>
        </div>
    </section>
    <!--/hero_in-->

    <div class="bg_color_1">
        <div class="container margin_60_35">
            <div class="row">
                <div class="col-lg-8">
                    <div class="box_cart">
                        <?php



                        if(empty($model[0]['id'])){
                            echo '<div class="message">
                            <p>¿Ya tienes una cuenta? <a href="index.php?r=admin/login">Ingresar</a></p>
                        </div>';
                        }else{

                        }
                        ?>

                        <div class="form_title">
                            <h3><strong>1</strong>Datos de su cuenta</h3>
                            <p>
                                Ingrese sus datos personales.
                            </p>
                        </div>
                        <div class="step">
                            <div class="row">
                                <div class="col-sm-6">
									<span class="input">
										<input class="input_field" type="text" name="nombre" value="<?php echo $model[0]['nombre']; ?>">
										<label class="input_label">
											<span class="input__label-content">Nombre</span>
										</label>
									</span>
                                </div>
                                <div class="col-sm-6">
									<span class="input">
										<input class="input_field" type="text" name="apellido" value="<?php echo $model[0]['apellido']; ?>">
										<label class="input_label">
											<span class="input__label-content">Apellido</span>
										</label>
									</span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
									<span class="input">
										<input class="input_field" type="text" value="<?php echo $model[0]['ciudad']; ?>">
										<label class="input_label">
											<span class="input__label-content">Ciudad</span>
										</label>
									</span>
                                </div>
                                <div class="col-sm-4">
									<span class="input">
										<input class="input_field" type="text" value="<?php echo $model[0]['direccion']; ?>">
										<label class="input_label">
											<span class="input__label-content">Dirección</span>
										</label>
									</span>
                                </div>
                                <div class="col-sm-4">
									<span class="input">
										<input class="input_field" type="text" value="<?php echo $model[0]['pais']; ?>">
										<label class="input_label">
											<span class="input__label-content">País</span>
										</label>
									</span>
                                </div>
                            </div>



                            <?php
if(empty($model[0]['id'])){
    ?>


                            <div class="row">
                                <div class="col-sm-6">
									<span class="input">
										<input class="input_field" type="email" value="<?php echo $model[0]['email']; ?>">
										<label class="input_label">
											<span class="input__label-content">Email</span>
										</label>
									</span>
                                </div>
                                <div class="col-sm-6">
									<span class="input">
										<input class="input_field" type="email" value="<?php echo $model[0]['email']; ?>">
										<label class="input_label">
											<span class="input__label-content">Confirmar email</span>
										</label>
									</span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
									<span class="input">
										<input class="input_field" type="password">
										<label class="input_label">
											<span class="input__label-content">Contaseña</span>
										</label>
									</span>
                                </div>
                                <div class="col-sm-6">
									<span class="input">
										<input class="input_field" type="password">
										<label class="input_label">
											<span class="input__label-content">Confirmar contaseña</span>
										</label>
									</span>
                                </div>
                            </div>

                            <?php } ?>





                            <div class="row">
                                <div class="col-sm-3">
									<span class="input">
										<input class="input_field" type="text" value="<?php echo $model[0]['tel']; ?>">
										<label class="input_label">
											<span class="input__label-content">Teléfono</span>
										</label>
									</span>
                                </div>
                                <div class="col-sm-6">
									<span class="input">
										<input class="input_field" type="text" value="<?php echo $model[0]['fnac']; ?>">
										<label class="input_label">
											<span class="input__label-content">Fecha de nacimiento</span>
										</label>
									</span>
                                </div>
                                <div class="col-sm-3">
									<span class="input">
										<input class="input_field" type="text" value="<?php echo $model[0]['dni']; ?>">
										<label class="input_label">
											<span class="input__label-content">Cédula</span>
										</label>
									</span>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <!--End step -->


                    </div>
                </div>
                <!-- /col -->

                <aside class="col-lg-4" id="sidebar">
                    <div class="box_detail">
                        <div id="total_cart">
                            Total <span class="float-right">$99.000.000</span>
                        </div>
                        <hr>
                        <a href="index.php?r=site/checkout" class="btn_1 full-width">Pagar</a>
                    </div>
                </aside>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /bg_color_1 -->
</main>


<?php

$ApiKey = "OHdEBn3Y3jBfagNk1UAvvdK0Tx";

$amount = '99000000';
$currency = 'COP';
$nombre =  "Gustavo Salvo";
$merchantId = "850586";
$today = date('YmdHi');
$startDate = date('YmdHi', strtotime('2012-03-14 09:06:00'));
$range = $today - $startDate;
$rand = rand(0, $range);
$referencia = $startDate + $rand;
$referenceCode = $referencia;

$md5 = md5($ApiKey . "~" . $merchantId . "~" . $referenceCode . "~" . $amount . "~" . $currency);



?>

<form style='display: none;' id='pagosonline' action='https://gateway.pagosonline.net/apps/gateway/index.html' method='post' name='pagosonline' target="_blank">
    <input name='usuarioId' type='hidden' value='<?php echo $merchantId; ?>'/><br/>
    <input name='firma' type='hidden' value='<?php echo $md5; ?>'/><br/>
    <input name='descripcion' type='hidden' value='Fundación Formar Integral'/><br/>
    <input name='valor' type='hidden' value='<?php echo $amount; ?>'/><br/>
    <input name='refVenta' type='hidden' value='<?php echo $referenceCode; ?>'/><br/>
    <input name='moneda' type='hidden' value='COP'/><br/>
    <input name='iva' type='hidden' value=''/><br/>
    <input name='baseDevolucionIva' type='hidden' value=''/><br/>
    <input name='urlAprobada' type='hidden' value='https://mindstothe2.com/index.php?r=site/checkout'/><br/>
    <input name='urlEnValidacion' type='hidden' value=''/><br/>
    <input name='urlRechazada' type='hidden' value=''/>

    <input name='buyerFullName' type='hidden' value='Gustavo Salvo'/>
    <input name='payerFullName' type='hidden' value='Gustavo Salvo'/>
    <input name='buyerEmail' type='hidden' value='gsalvo@genkreativo.com.ar'/>
    <input name='payerEmail' type='hidden' value='gsalvo@genkreativo.com.ar'/>
    <input name='payerPhone' type='hidden' value='155078647'/>
    <input name='payerDocument' type='hidden' value='35986615'/>

    </p>
</form>


