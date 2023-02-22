<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\CutterCompresion $model */

$this->title = 'Create Cutter Compresion';
$this->params['breadcrumbs'][] = ['label' => 'Cutter Compresions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cutter-compresion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
