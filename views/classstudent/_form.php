<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Classstudent */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="classstudent-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'subject_cId')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
