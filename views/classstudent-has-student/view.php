<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ClassstudentHasStudent */

$this->title = $model->classstudent_cStuId;
$this->params['breadcrumbs'][] = ['label' => 'Classstudent Has Students', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="classstudent-has-student-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'classstudent_cStuId' => $model->classstudent_cStuId, 'classstudent_subject_cId' => $model->classstudent_subject_cId, 'student_stuId' => $model->student_stuId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'classstudent_cStuId' => $model->classstudent_cStuId, 'classstudent_subject_cId' => $model->classstudent_subject_cId, 'student_stuId' => $model->student_stuId], [
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
            'classstudent_cStuId',
            'classstudent_subject_cId',
            'student_stuId',
        ],
    ]) ?>

</div>
