<?php

namespace app\controllers;

use Yii;
use app\models\Coordena;
use app\models\CoordenaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CoordenaController implements the CRUD actions for Coordena model.
 */
class CoordenaController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Coordena models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CoordenaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Coordena model.
     * @param integer $USUARIO_ID
     * @param integer $CURSO_ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($USUARIO_ID, $CURSO_ID)
    {
        return $this->render('view', [
            'model' => $this->findModel($USUARIO_ID, $CURSO_ID),
        ]);
    }

    /**
     * Creates a new Coordena model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Coordena();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'USUARIO_ID' => $model->USUARIO_ID, 'CURSO_ID' => $model->CURSO_ID]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Coordena model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $USUARIO_ID
     * @param integer $CURSO_ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($USUARIO_ID, $CURSO_ID)
    {
        $model = $this->findModel($USUARIO_ID, $CURSO_ID);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'USUARIO_ID' => $model->USUARIO_ID, 'CURSO_ID' => $model->CURSO_ID]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Coordena model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $USUARIO_ID
     * @param integer $CURSO_ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($USUARIO_ID, $CURSO_ID)
    {
        $this->findModel($USUARIO_ID, $CURSO_ID)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Coordena model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $USUARIO_ID
     * @param integer $CURSO_ID
     * @return Coordena the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($USUARIO_ID, $CURSO_ID)
    {
        if (($model = Coordena::findOne(['USUARIO_ID' => $USUARIO_ID, 'CURSO_ID' => $CURSO_ID])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
