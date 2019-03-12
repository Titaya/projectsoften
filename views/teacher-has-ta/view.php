<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TeacherHasTa */

$this->title = $model->teacher_tId;
$this->params['breadcrumbs'][] = ['label' => 'Teacher Has Tas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="teacher-has-ta-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'teacher_tId' => $model->teacher_tId, 'ta_taId' => $model->ta_taId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'teacher_tId' => $model->teacher_tId, 'ta_taId' => $model->ta_taId], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'teacher_tId',
            'ta_taId',
        ],
    ]) ?>

</div>
