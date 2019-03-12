<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ClassstudentHasStudentSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="classstudent-has-student-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'classstudent_cStuId') ?>

    <?= $form->field($model, 'classstudent_subject_cId') ?>

    <?= $form->field($model, 'student_stuId') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
