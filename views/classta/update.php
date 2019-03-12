<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Classta */

$this->title = 'Update Classta: ' . $model->cTaId;
$this->params['breadcrumbs'][] = ['label' => 'Classtas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->cTaId, 'url' => ['view', 'cTaId' => $model->cTaId, 'subject_cId' => $model->subject_cId, 'ta_taId' => $model->ta_taId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="classta-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
