<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ClassstudentHasStudent */

$this->title = 'Create Classstudent Has Student';
$this->params['breadcrumbs'][] = ['label' => 'Classstudent Has Students', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="classstudent-has-student-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
