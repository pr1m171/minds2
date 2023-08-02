<?php

namespace app\controllers;

use app\models\Usuarios;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;

use app\models\ContactForm;

class SiteController extends Controller
{
    public $session;
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        
        return $this->render('index');
    }

    public function actionCurso()
    {
        return $this->render('detalle-curso');
    }

    public function actionNosotros()
    {
        return $this->render('about');
    }

    public function actionContacto()
    {
        return $this->render('contacto');
    }

    public function actionBlog()
    {
        return $this->render('blog');
    }

    public function actionMentesmillonarias()
    {
        return $this->render("mente-millonarias");
    }

    public function actionCasosexito()
    {
        return $this->render("casos-exito");
    }

    public function actionExamen($modulo)
    {
        return $this->render("examen", [
            'modulo' => $modulo,
        ]);
    }

    public function actionCarrito()
    {
        return $this->render('pago-1');
    }
    public function actionPayment()
    {
        $query = $this->getSesion();
        if(empty($query)) {
            return $this->render('pago-2');
        }else{

            $connection = Yii::$app->getDb();
            $command = $connection->createCommand("select * from usuarios where id=" . $query);
            $result = $command->queryAll();

            return $this->render('pago-2', [
                'model' => $result,
            ]);
        }

    }
    public function actionCheckout(){
        /*$query = $this->getSesion();
        $connection = Yii::$app->getDb();
        $command = $connection->createCommand("select * from usuarios where id=". $query );

        $result = $command->queryAll();
*/
        return $this->render('pago-3', [
            'model' => $result,
        ]);
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


}
