<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Classstudent */

$this->title = 'Update Classstudent: ' . $model->cStuId;
$this->params['breadcrumbs'][] = ['label' => 'Classstudents', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->cStuId, 'url' => ['view', 'cStuId' => $model->cStuId, 'subject_cId' => $model->subject_cId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="classstudent-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
