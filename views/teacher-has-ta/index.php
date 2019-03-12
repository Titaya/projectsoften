<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TeacherHasTaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Teacher Has Tas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="teacher-has-ta-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Teacher Has Ta', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'teacher_tId',
            'ta_taId',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
