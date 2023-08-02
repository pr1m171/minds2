<?php

/* @var $this yii\web\View */

$this->title = 'Minds2 - Platafroma de lectura rapida';
?>
<main>
    <section id="hero_in" class="cart_section">
        <div class="wrapper">
            <div class="container">
                <div class="bs-wizard clearfix">
                    <div class="bs-wizard-step active">
                        <div class="text-center bs-wizard-stepnum">Your order</div>
                        <div class="progress">
                            <div class="progress-bar"></div>
                        </div>
                        <a href="index.php?r=site/carrito" class="bs-wizard-dot"></a>
                    </div>

                    <div class="bs-wizard-step disabled">
                        <div class="text-center bs-wizard-stepnum">Payment</div>
                        <div class="progress">
                            <div class="progress-bar"></div>
                        </div>
                        <a href="#0" class="bs-wizard-dot"></a>
                    </div>

                    <div class="bs-wizard-step disabled">
                        <div class="text-center bs-wizard-stepnum">Ready!</div>
                        <div class="progress">
                            <div class="progress-bar"></div>
                        </div>
                        <a href="#0" class="bs-wizard-dot"></a>
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
                        <table class="table table-striped cart-list">
                            <thead>
                            <tr>
                                <th>
                                    Course
                                </th>
                                <th>
                                    Price
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <style>
                                        .thumb_cart img {
                                            width: 90px;
                                            height: auto;
                                        }
                                    </style>
                                    <div class="thumb_cart">
                                        <img src="https://mindstothe2.com/img/video.jpg" alt="Image">
                                    </div>
                                    <span class="item_cart">Fast and synaptic reading</span>
                                </td>
                                <td>

                                </td>
                                <td>
                                    <strong>$99.000.000</strong>
                                </td>
                            </tr>
                            </tbody>
                        </table>

                        <!-- /cart-options -->
                    </div>
                </div>
                <!-- /col -->

                <aside class="col-lg-4" id="sidebar">
                    <div class="box_detail">
                        <div id="total_cart">
                            Total <span class="float-right">$99.000.000</span>
                        </div>

                        <a href="index.php?r=site/payment" class="btn_1 full-width">Next</a>

                    </div>
                </aside>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /bg_color_1 -->
</main>
