<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SubjectSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="subject-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'cId') ?>

    <?= $form->field($model, 'cNumber') ?>

    <?= $form->field($model, 'cName') ?>

    <?= $form->field($model, 'cYear') ?>

    <?= $form->field($model, 'cTerm') ?>

    <?php // echo $form->field($model, 'cSection') ?>

    <?php // echo $form->field($model, 'cPassword') ?>

    <?php // echo $form->field($model, 'cStatus') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
