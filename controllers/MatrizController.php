<?php

namespace app\controllers;

use Yii;
use app\models\Matriz;
use app\models\Curso;
use app\models\MatrizSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MatrizController implements the CRUD actions for Matriz model.
 */
class MatrizController extends Controller
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
     * Lists all Matriz models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MatrizSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Matriz model.
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
     * Creates a new Matriz model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Matriz();
        $session = Yii::$app->session;
        $curso = Curso::findOne($session['curso_id']);
        $model->CURSO_ID = $curso->id;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['curso/view', 'id' => $curso->id]);
        }

        return $this->render('create', [
            'model' => $model,
            'curso' => $curso,
        ]);
    }

    /**
     * Updates an existing Matriz model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $session = Yii::$app->session;
        $curso = Curso::findOne($session['curso_id']);
        

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['curso/view', 'id' => $curso->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Matriz model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        $session = Yii::$app->session;
        $curso = Curso::findOne($session['curso_id']);

        return $this->redirect(['curso/view','id'=>$curso->id]);
    }

    /**
     * Finds the Matriz model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Matriz the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Matriz::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
