<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\PlateForm $model */

$this->title = 'Create Plate Form';
$this->params['breadcrumbs'][] = ['label' => 'Plate Forms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="plate-form-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
