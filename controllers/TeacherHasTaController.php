<?php

namespace app\controllers;

use Yii;
use app\models\TeacherHasTa;
use app\models\TeacherHasTaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TeacherHasTaController implements the CRUD actions for TeacherHasTa model.
 */
class TeacherHasTaController extends Controller
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
     * Lists all TeacherHasTa models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TeacherHasTaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TeacherHasTa model.
     * @param integer $teacher_tId
     * @param string $ta_taId
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($teacher_tId, $ta_taId)
    {
        return $this->render('view', [
            'model' => $this->findModel($teacher_tId, $ta_taId),
        ]);
    }

    /**
     * Creates a new TeacherHasTa model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new TeacherHasTa();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'teacher_tId' => $model->teacher_tId, 'ta_taId' => $model->ta_taId]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing TeacherHasTa model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $teacher_tId
     * @param string $ta_taId
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($teacher_tId, $ta_taId)
    {
        $model = $this->findModel($teacher_tId, $ta_taId);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'teacher_tId' => $model->teacher_tId, 'ta_taId' => $model->ta_taId]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing TeacherHasTa model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $teacher_tId
     * @param string $ta_taId
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($teacher_tId, $ta_taId)
    {
        $this->findModel($teacher_tId, $ta_taId)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TeacherHasTa model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $teacher_tId
     * @param string $ta_taId
     * @return TeacherHasTa the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($teacher_tId, $ta_taId)
    {
        if (($model = TeacherHasTa::findOne(['teacher_tId' => $teacher_tId, 'ta_taId' => $ta_taId])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
