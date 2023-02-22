<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\CutterLenght $model */

$this->title = 'Update Cutter Lenght: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Cutter Lenghts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cutter-lenght-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
