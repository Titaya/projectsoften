<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TeacherHasTa */

$this->title = 'Update Teacher Has Ta: ' . $model->teacher_tId;
$this->params['breadcrumbs'][] = ['label' => 'Teacher Has Tas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->teacher_tId, 'url' => ['view', 'teacher_tId' => $model->teacher_tId, 'ta_taId' => $model->ta_taId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="teacher-has-ta-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
