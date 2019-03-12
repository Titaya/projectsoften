<?php

namespace app\controllers;

use Yii;
use app\models\Classstudent;
use app\models\ClassstudentSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ClassstudentController implements the CRUD actions for Classstudent model.
 */
class ClassstudentController extends Controller
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
     * Lists all Classstudent models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ClassstudentSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Classstudent model.
     * @param integer $cStuId
     * @param integer $subject_cId
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($cStuId, $subject_cId)
    {
        return $this->render('view', [
            'model' => $this->findModel($cStuId, $subject_cId),
        ]);
    }

    /**
     * Creates a new Classstudent model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Classstudent();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'cStuId' => $model->cStuId, 'subject_cId' => $model->subject_cId]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Classstudent model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $cStuId
     * @param integer $subject_cId
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($cStuId, $subject_cId)
    {
        $model = $this->findModel($cStuId, $subject_cId);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'cStuId' => $model->cStuId, 'subject_cId' => $model->subject_cId]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Classstudent model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $cStuId
     * @param integer $subject_cId
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($cStuId, $subject_cId)
    {
        $this->findModel($cStuId, $subject_cId)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Classstudent model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $cStuId
     * @param integer $subject_cId
     * @return Classstudent the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($cStuId, $subject_cId)
    {
        if (($model = Classstudent::findOne(['cStuId' => $cStuId, 'subject_cId' => $subject_cId])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
