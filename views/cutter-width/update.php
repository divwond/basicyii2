<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\cutterwidth $model */

$this->title = 'Update Cutterwidth: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Cutterwidths', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cutterwidth-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
