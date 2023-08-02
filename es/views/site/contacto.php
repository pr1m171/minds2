<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Contacto';
$this->params['breadcrumbs'][] = $this->title;
?>



<main>
    <style>
        #hero_in.general:before{
            background: url(img/contacto.jpg) center center no-repeat;
        }
    </style>
    <section id="hero_in" class="general">
        <div class="wrapper">
            <div class="container">
                <h1 class="fadeInUp"><span></span>CONTACT US</h1>
            </div>
        </div>
    </section>
    <!--/hero_in-->

    <div class="contact_info">
        <div class="container">
            <ul class="clearfix">
                <li>
                    <i class="pe-7s-map-marker"></i>
                    <h4>Address</h4>
                    <span>Calle 113 # 7 - 45 Torre B - Oficina 1210<br>Teleport Business Park<br>Bogotá - Colombia.</span>
                </li>
                <li>
                    <i class="pe-7s-mail-open-file"></i>
                    <h4>Email</h4>
                    <span>info@mindstothe2.com</span>

                </li>
                <li>
                    <i class="pe-7s-phone"></i>
                    <h4>Telephone</h4>
                    <span>PBX (571) 7053172</span>
                </li>
            </ul>
        </div>
    </div>
    <!--/contact_info-->

    <div class="bg_color_1">
        <div class="container margin_120_95">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="map_contact">
                    </div>
                    <!-- /map -->
                </div>
                <div class="col-lg-6">
                    <h4>Send message</h4>
                    <p>Enter your query about a plan, topics or any questions about our courses.</p>
                    <div id="message-contact"></div>
                    <form method="post" action="assets/contact.php" id="contactform" autocomplete="off">
                        <div class="row">
                            <div class="col-md-6">
									<span class="input">
										<input class="input_field" type="text" id="name_contact" name="name_contact">
										<label class="input_label">
											<span class="input__label-content">Name</span>
										</label>
									</span>
                            </div>
                            <div class="col-md-6">
									<span class="input">
										<input class="input_field" type="text" id="lastname_contact" name="lastname_contact">
										<label class="input_label">
											<span class="input__label-content">Surname</span>
										</label>
									</span>
                            </div>
                        </div>
                        <!-- /row -->
                        <div class="row">
                            <div class="col-md-6">
									<span class="input">
										<input class="input_field" type="email" id="email_contact" name="email_contact">
										<label class="input_label">
											<span class="input__label-content">Email</span>
										</label>
									</span>
                            </div>
                            <div class="col-md-6">
									<span class="input">
										<input class="input_field" type="text" id="phone_contact" name="phone_contact">
										<label class="input_label">
											<span class="input__label-content">Telephone</span>
										</label>
									</span>
                            </div>
                        </div>
                        <!-- /row -->
                        <span class="input">
									<textarea class="input_field" id="message_contact" name="message_contact" style="height:150px;"></textarea>
									<label class="input_label">
										<span class="input__label-content">Message</span>
									</label>
							</span>

                        <p class="add_top_30"><input type="submit" value="Send" class="btn_1 rounded" id="submit-contact"></p>
                    </form>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /bg_color_1 -->
</main>
<!--/main-->
