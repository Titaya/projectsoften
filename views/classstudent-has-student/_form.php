<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ClassstudentHasStudent */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="classstudent-has-student-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'classstudent_cStuId')->textInput() ?>

    <?= $form->field($model, 'classstudent_subject_cId')->textInput() ?>

    <?= $form->field($model, 'student_stuId')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
