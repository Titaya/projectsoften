<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ta-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Ta', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'taId',
            'taName',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
