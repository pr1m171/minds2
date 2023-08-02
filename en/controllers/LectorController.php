<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\LoginForm;
use app\models\Usuarios;

class LectorController extends Controller
{
    public $layout = "lector";

    public function actionIndex($modulo, $sus, $user)
    {

        return $this->render("index",[
            'modulo'=> $modulo,
            'usu '=> $sus,
            'user' =>$user,
        ]);

    }



}