<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Classta */

$this->title = 'Create Classta';
$this->params['breadcrumbs'][] = ['label' => 'Classtas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="classta-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
