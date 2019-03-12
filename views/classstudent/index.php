<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ClassstudentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Classstudents';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="classstudent-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Classstudent', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'cStuId',
            'subject_cId',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
