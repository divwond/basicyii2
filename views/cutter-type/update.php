<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\CutterType $model */

$this->title = 'Update Cutter Type: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Cutter Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cutter-type-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
