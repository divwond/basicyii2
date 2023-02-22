<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\PlateCorner $model */

$this->title = 'Create Plate Corner';
$this->params['breadcrumbs'][] = ['label' => 'Plate Corners', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="plate-corner-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
