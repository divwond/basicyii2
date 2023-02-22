<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\PlateSize $model */

$this->title = 'Create Plate Size';
$this->params['breadcrumbs'][] = ['label' => 'Plate Sizes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="plate-size-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
