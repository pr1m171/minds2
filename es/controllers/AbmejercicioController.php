<?php

namespace app\controllers;

use Yii;
use app\models\ABMEjercicio;
use app\models\search\ABMEjercicio as ABMEjercicioSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * AbmejercicioController implements the CRUD actions for ABMEjercicio model.
 */
class AbmejercicioController extends Controller
{

    public $layout = "superadmin";
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
            ],
        ];
    }

    /**
     * Lists all ABMEjercicio models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ABMEjercicioSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ABMEjercicio model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new ABMEjercicio model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ABMEjercicio();



        if ($model->load(Yii::$app->request->post())) {

            $archivito = UploadedFile::getInstance($model,'url');
            $archivito->saveAs('/var/www/vhosts/mindstothe2.com/httpdocs/media/'.$model->idModulo.'/'.$archivito->baseName . '.' . $archivito->extension);

            $model->url = 'https://mindstothe2.com/media/'.$model->idModulo.'/'. $archivito->baseName . '.' . $archivito->extension;

            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
            
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing ABMEjercicio model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);



        if ($model->load(Yii::$app->request->post())) {

            $archivito = UploadedFile::getInstance($model,'url');
            $archivito->saveAs('/var/www/vhosts/mindstothe2.com/httpdocs/media/'.$model->idModulo.'/'.$archivito->baseName . '.' . $archivito->extension);

            $model->url = 'https://mindstothe2.com/media/'.$model->idModulo.'/'. $archivito->baseName . '.' . $archivito->extension;

            $model->save();

            return $this->redirect(['view', 'id' => $model->id]);

        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing ABMEjercicio model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ABMEjercicio model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return ABMEjercicio the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ABMEjercicio::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
