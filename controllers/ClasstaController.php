<?php

namespace app\controllers;

use Yii;
use app\models\Classta;
use app\models\ClasstaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ClasstaController implements the CRUD actions for Classta model.
 */
class ClasstaController extends Controller
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
     * Lists all Classta models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ClasstaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Classta model.
     * @param integer $cTaId
     * @param integer $subject_cId
     * @param string $ta_taId
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($cTaId, $subject_cId, $ta_taId)
    {
        return $this->render('view', [
            'model' => $this->findModel($cTaId, $subject_cId, $ta_taId),
        ]);
    }

    /**
     * Creates a new Classta model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Classta();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'cTaId' => $model->cTaId, 'subject_cId' => $model->subject_cId, 'ta_taId' => $model->ta_taId]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Classta model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $cTaId
     * @param integer $subject_cId
     * @param string $ta_taId
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($cTaId, $subject_cId, $ta_taId)
    {
        $model = $this->findModel($cTaId, $subject_cId, $ta_taId);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'cTaId' => $model->cTaId, 'subject_cId' => $model->subject_cId, 'ta_taId' => $model->ta_taId]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Classta model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $cTaId
     * @param integer $subject_cId
     * @param string $ta_taId
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($cTaId, $subject_cId, $ta_taId)
    {
        $this->findModel($cTaId, $subject_cId, $ta_taId)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Classta model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $cTaId
     * @param integer $subject_cId
     * @param string $ta_taId
     * @return Classta the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($cTaId, $subject_cId, $ta_taId)
    {
        if (($model = Classta::findOne(['cTaId' => $cTaId, 'subject_cId' => $subject_cId, 'ta_taId' => $ta_taId])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
