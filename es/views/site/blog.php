<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'NOTICIAS Y EVENTOS';
$this->params['breadcrumbs'][] = $this->title;
$noticia = $_GET['id'];
function IsNullOrEmptyString($str){
    return (!isset($str) || trim($str) === '');
}

if(IsNullOrEmptyString($noticia) == 1){


?>


<main>
    <section id="hero_in" class="general">
        <div class="wrapper">
            <div class="container">
                <h1 class="fadeInUp"><span></span>NEWS</h1>
            </div>
        </div>
    </section>
    <!--/hero_in-->




    <div class="container margin_120_95" id="noticias">
        <div class="main_title_2">
            <span><em></em></span>
            <h2>Events and news</h2>
            <h5>News, figures and information that supports the importance of reading ability.</h5>
        </div>
        <div class="row">


            <?php
            $noticias = Yii::$app->db->createCommand('SELECT * FROM noticiasen ORDER BY id DESC')
                ->queryAll();
            foreach ($noticias as $row) {

                $mes = explode("/", $row['fecha']);

                if($mes[1] == "01"){ $mess = "ENE"; }
                if($mes[1] == "02"){ $mess = "FEB"; }
                if($mes[1] == "03"){ $mess = "MAR"; }
                if($mes[1] == "04"){ $mess = "ABR"; }
                if($mes[1] == "05"){ $mess = "MAY"; }
                if($mes[1] == "06"){ $mess = "JUN"; }
                if($mes[1] == "07"){ $mess = "JUL"; }
                if($mes[1] == "08"){ $mess = "AGO"; }
                if($mes[1] == "09"){ $mess = "SEP"; }
                if($mes[1] == "10"){ $mess = "OCT"; }
                if($mes[1] == "11"){ $mess = "NOV"; }
                if($mes[1] == "12"){ $mess = "DIC"; }

                ?>
                <div class="col-lg-6">
                    <a class="box_news" href="https://mindstothe2.com/en/web/index.php?r=site/blog&id=<?php echo $row['id']; ?>&maintenance=true">
                        <figure><img src="<?php echo $row['url']; ?>" alt="">
                            <figcaption><strong><?php echo $mes[0]; ?></strong><?php echo $mess; ?></figcaption>
                        </figure>
                        <ul>
                            <li><?php echo $row['fecha']; ?></li>
                        </ul>
                        <h4><?php echo $row['titulo']; ?></h4>
                        <p><?php echo $row['resumen']; ?></p>
                    </a>
                </div>

                <?php
            }
            ?>





        </div>
        <!-- /row -->

    </div>


<?php
}else{
    $sql = 'SELECT * FROM noticiasen WHERE id='.$noticia;

    $noti = Yii::$app->db->createCommand($sql)
        ->queryOne();
?>

    <style>
        #hero_in.general:before{
            background: url("<?php echo $noti['url']; ?>") no-repeat;
            background-size: cover !important;
            background-position: center center;
        }
        .contenido{
            text-align: justify !important;
        }
        .contenido img{
            width: 100% !important;
        }
    </style>

    <section id="hero_in" class="general">
        <div class="wrapper">
            <div class="container">
                <h1 class="fadeInUp"><span></span><?php echo $noti['titulo']; ?></h1>
            </div>
        </div>
    </section>
    <!--/hero_in-->




    <div class="container margin_120_95" id="noticias">
        <div class="main_title_2">
            <span><em></em></span>
            <h5><?php echo $noti['resumen']; ?></h5>
        </div>
        <div class="row">

            <div class="col-md-12 contenido">
                <?php echo $noti['contenido']; ?>
            </div>

        </div>
    </div>

<?php
}

?>




</main>
<!--/main-->