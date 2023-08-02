<?php

namespace app\controllers;

use app\models\Resultados;
use Yii;
use yii\web\Controller;
use app\models\LoginForm;
use app\models\Usuarios;
use app\models\search\ResultadosSearch;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class AdminController extends Controller
{
    public $layout = "admin";
    public $session;

    public function actionIndex()
    {
        if (empty($this->getSesion())) {
            return $this->redirect('index.php?r=admin/login');
        }else{
            return $this->render("index", [
                'model' => $this->findModel($this->getSesion()),
            ]);
        }

    }

    public function actionRecovery($email){

        $model = new Usuarios();
        $models = $model->findAll(['email' => $email]);
        if($models[0]['email'] == $email) {
            $user = $models[0]['email'];
            $pass = $models[0]['password'];
        }

        $para = $email;
        $titulo = 'Recuperar acceso a minds2';

        $mensaje = '<html>'.
            '<head><title>Recuperar datos de ingreso</title></head>'.
            '<body>
                <h1>Estos son sus datos de acceso:</h1><br>
                <hr><br>
                <b>Usuario: </b> '.$user.' <br>
                <b>Contraseña: </b> '.$pass.'
                <hr>
             '.

            '</body>'.
            '</html>';
        $cabeceras = 'MIME-Version: 1.0' . "\r\n";
        $cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $cabeceras .= 'From: no-reply@mindstothe2.com';
        $enviado = mail($para, $titulo, $mensaje, $cabeceras);

        if ($enviado)
            return $this->redirect('index.php?r=admin/login');
        else
            return $this->redirect('index.php?r=admin/error');
    }
    public function actionCrucigrama()
    {
        return $this->render("crucigrama");
    }

    public function actionForm21()
    {
        return $this->render("form21");
    }

    public function actionExamen($modulo)
    {
        if (empty($this->getSesion())) {
            return $this->redirect('index.php?r=admin/login');
        }else{
            return $this->render("examen", [
                'model' => $this->findModel($this->getSesion()),
                'modulo' => $modulo,
            ]);
        }
    }

    public function actionLector()
    {
        return $this->render("lector");
    }

    public function actionLectorinicial()
    {
        return $this->render("lector-inicial");
    }

    public function actionAddreportfinish($b1,$b2,$b3,$b4,$b5,$b6,$b7,$b8,$tt,$tl,$id,$modulo){
        date_default_timezone_set('America/Bogota');
        $fecha = date("m-d-Y");
        $hora = date("H:i");

        $resultado = new Resultados;
        $resultado->fecha = $fecha;
        $resultado->hora = $hora;
        $resultado->b1 = $b1;
        $resultado->b2 = $b2;
        $resultado->b3 = $b3;
        $resultado->b4 = $b4;
        $resultado->b5 = $b5;
        $resultado->b6 = $b6;
        $resultado->b7 = $b7;
        $resultado->b8 = $b8;
        $resultado->tt = $tt;
        $resultado->tl = $tl;
        $resultado->idUsuario = $id;
        $resultado->idModulo = $modulo;
        $resultado->save();

        \Yii::$app->response->format = 'json';
        return $resultado;
    }

    public function actionReporte(){
        if (empty($this->getSesion())) {
            return $this->redirect('index.php?r=admin/login');
        }else{

            $searchModel = new ResultadosSearch();
            $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

            $modelo = $this->findModel($this->getSesion());

            return $this->render('reporte', [
                'model' => $modelo,
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
            ]);


        }
    }

    public function actionProfile()
    {

        //$searchModel = new Usuarios();

        if (empty($this->getSesion())) {
            return $this->redirect('index.php?r=admin/login');
        }else{
            return $this->render('profile', [
                'model' => $this->findModel($this->getSesion()),
            ]);
        }



    }

    public function actionUpdateprofile(){
        $request = Yii::$app->request;
        if ($request->isPost) {
            $model = $this->findModel($this->getSesion());

            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect('index.php?r=admin/profile');
            }



        }
    }


    /* Fuctions Login and Register Users */

    public function actionRegistro()
    {
        $request = Yii::$app->request;
        if ($request->isPost) {
            $model = new Usuarios();

            $models = $model->findAll(['email' => $request->post('email')]);

            if($models[0]['email'] == $request->post('email')){
                $this->layout = "registro";
                return $this->render("registro",['error' => 'Este email se encuentra en uso.']);
            }else{

                $interes = $request->post('intereses') . '';
                $model->intereses = $interes;
                $model->dni = '';
                $model->ocupacion = '';
                $model->idioma = 'es';

                $model->nombre = $request->post('nombre');
                $model->apellido = $request->post('apellido');
                $model->email = $request->post('email');
                $model->password = $request->post('password');
                $model->tel = $request->post('tel');
                $model->fnac = $request->post('fnac');
                $model->direccion = $request->post('direccion');
                $model->ciudad = $request->post('ciudad');
                $model->pais = $request->post('pais');


                $model->save();
                $this->layout = "registro";
                return $this->redirect('index.php?r=admin/exito');
            }




        }else{
            $this->layout = "registro";
            return $this->render("registro");
        }

    }
    public function actionExito()
    {
        $this->layout = "registro";
        return $this->render("exito");
    }

    public function actionRecuperar(){
        $request = Yii::$app->request;
        if ($request->isPost) {

            $email = $request->post('username');
            $model = new Usuarios();
            $models = $model->findAll(['email' => $email]);
            if($models[0]['email'] == $email) {
                $user = $models[0]['email'];
                $pass = $models[0]['password'];
            }

            $para = $email;
            $titulo = 'Recuperar acceso a minds2';

            $mensaje = '<html>'.
                '<head><title>Recuperar datos de ingreso</title></head>'.
                '<body>
                <h1>Estos son sus datos de acceso:</h1><br>
                <hr><br>
                <b>Usuario: </b> '.$user.' <br>
                <b>Contraseña: </b> '.$pass.'
                <hr>
             '.

                '</body>'.
                '</html>';
            $cabeceras = 'MIME-Version: 1.0' . "\r\n";
            $cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
            $cabeceras .= 'From: no-reply@mindstothe2.com';
            $enviado = mail($para, $titulo, $mensaje, $cabeceras);

            if ($enviado)
                return $this->redirect('index.php?r=admin/login');
            else
                return $this->redirect('index.php?r=admin/login');




        }else{
            if (empty($this->getSesion())){
                $this->layout = "login";
                return $this->render("recovery");
            }else{
                $this->actionIndex();
            }
        }
    }

    public function actionLogin()
    {


        $request = Yii::$app->request;
        if ($request->isPost) {
            //username
            //password
            $email = $request->post('username');
            $password = $request->post('password');
            $model = new Usuarios();
            $models = $model->findAll(['email' => $email]);
            if($models[0]['email'] == $email && $models[0]['password'] == $password ) {
                $this->setSesion($models[0]['id']);
                if($models[0]['rango'] == 'admin'){
                    return $this->redirect('index.php?r=abmusuarios/index');
                }else{
                    return $this->redirect('index.php?r=admin/index');
                }

            }else{
                $this->layout = "login";
                return $this->render("login");
            }
        }else{
            if (empty($this->getSesion())){
                $this->layout = "login";
                return $this->render("login");
            }else{
                $this->actionIndex();
            }

        }


    }

    public function actionLogout()
    {
        $this->destroySesion();
        return $this->goHome();
    }

    public function getSesion(){
        $this->session = Yii::$app->session;
        $this->session->open(); // open a session
        $id = $this->session->get('user');
        return $id;
    }

    public function destroySesion(){
        $this->session = Yii::$app->session;
        $this->session->close();
        $this->session->removeAll();
    }

    public function setSesion($id){
        $this->session = Yii::$app->session;
        $this->session->open(); // open a session
        $this->session->set('user', $id);
    }


    public function actionAddexamen($data){
        $datos = explode(",",$data);
        Yii::$app->db->createCommand()->insert('resultaexamen', [
        'tiempo' => $datos[0],
        'palabras' => $datos[1],
        'acierto' => $datos[2],
        'rendimiento' => $datos[3],
        'modulo' => $datos[4],
        'usuario' => $datos[5],
        ])->execute();
        return "true";
    }

    protected function findModel($id)
    {
        if (($model = Usuarios::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }



}