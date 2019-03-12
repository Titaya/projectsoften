<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ClassstudentHasStudent */

$this->title = 'Update Classstudent Has Student: ' . $model->classstudent_cStuId;
$this->params['breadcrumbs'][] = ['label' => 'Classstudent Has Students', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->classstudent_cStuId, 'url' => ['view', 'classstudent_cStuId' => $model->classstudent_cStuId, 'classstudent_subject_cId' => $model->classstudent_subject_cId, 'student_stuId' => $model->student_stuId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="classstudent-has-student-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
