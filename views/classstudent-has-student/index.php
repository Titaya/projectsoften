<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ClassstudentHasStudentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Classstudent Has Students';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="classstudent-has-student-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Classstudent Has Student', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'classstudent_cStuId',
            'classstudent_subject_cId',
            'student_stuId',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
