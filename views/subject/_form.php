<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Subject */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="subject-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cNumber')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cYear')->textInput() ?>

    <?= $form->field($model, 'cTerm')->textInput() ?>

    <?= $form->field($model, 'cSection')->textInput() ?>

    <?= $form->field($model, 'cPassword')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cStatus')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
