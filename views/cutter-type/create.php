<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\CutterType $model */

$this->title = 'Create Cutter Type';
$this->params['breadcrumbs'][] = ['label' => 'Cutter Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cutter-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
