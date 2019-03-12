<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Classstudent */

$this->title = $model->cStuId;
$this->params['breadcrumbs'][] = ['label' => 'Classstudents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="classstudent-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'cStuId' => $model->cStuId, 'subject_cId' => $model->subject_cId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'cStuId' => $model->cStuId, 'subject_cId' => $model->subject_cId], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'cStuId',
            'subject_cId',
        ],
    ]) ?>

</div>
