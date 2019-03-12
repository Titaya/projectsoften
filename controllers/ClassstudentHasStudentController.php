<?php

namespace app\controllers;

use Yii;
use app\models\ClassstudentHasStudent;
use app\models\ClassstudentHasStudentSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ClassstudentHasStudentController implements the CRUD actions for ClassstudentHasStudent model.
 */
class ClassstudentHasStudentController extends Controller
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
     * Lists all ClassstudentHasStudent models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ClassstudentHasStudentSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ClassstudentHasStudent model.
     * @param integer $classstudent_cStuId
     * @param integer $classstudent_subject_cId
     * @param string $student_stuId
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($classstudent_cStuId, $classstudent_subject_cId, $student_stuId)
    {
        return $this->render('view', [
            'model' => $this->findModel($classstudent_cStuId, $classstudent_subject_cId, $student_stuId),
        ]);
    }

    /**
     * Creates a new ClassstudentHasStudent model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ClassstudentHasStudent();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'classstudent_cStuId' => $model->classstudent_cStuId, 'classstudent_subject_cId' => $model->classstudent_subject_cId, 'student_stuId' => $model->student_stuId]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing ClassstudentHasStudent model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $classstudent_cStuId
     * @param integer $classstudent_subject_cId
     * @param string $student_stuId
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($classstudent_cStuId, $classstudent_subject_cId, $student_stuId)
    {
        $model = $this->findModel($classstudent_cStuId, $classstudent_subject_cId, $student_stuId);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'classstudent_cStuId' => $model->classstudent_cStuId, 'classstudent_subject_cId' => $model->classstudent_subject_cId, 'student_stuId' => $model->student_stuId]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing ClassstudentHasStudent model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $classstudent_cStuId
     * @param integer $classstudent_subject_cId
     * @param string $student_stuId
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($classstudent_cStuId, $classstudent_subject_cId, $student_stuId)
    {
        $this->findModel($classstudent_cStuId, $classstudent_subject_cId, $student_stuId)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ClassstudentHasStudent model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $classstudent_cStuId
     * @param integer $classstudent_subject_cId
     * @param string $student_stuId
     * @return ClassstudentHasStudent the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($classstudent_cStuId, $classstudent_subject_cId, $student_stuId)
    {
        if (($model = ClassstudentHasStudent::findOne(['classstudent_cStuId' => $classstudent_cStuId, 'classstudent_subject_cId' => $classstudent_subject_cId, 'student_stuId' => $student_stuId])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
