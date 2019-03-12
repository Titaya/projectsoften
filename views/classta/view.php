<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Classta */

$this->title = $model->cTaId;
$this->params['breadcrumbs'][] = ['label' => 'Classtas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="classta-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'cTaId' => $model->cTaId, 'subject_cId' => $model->subject_cId, 'ta_taId' => $model->ta_taId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'cTaId' => $model->cTaId, 'subject_cId' => $model->subject_cId, 'ta_taId' => $model->ta_taId], [
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
            'cTaId',
            'subject_cId',
            'ta_taId',
        ],
    ]) ?>

</div>
