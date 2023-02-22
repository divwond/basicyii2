<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\CutterCorner $model */

$this->title = 'Create Cutter Corner';
$this->params['breadcrumbs'][] = ['label' => 'Cutter Corners', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cutter-corner-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
