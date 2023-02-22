<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\CutterHeight $model */

$this->title = 'Create Cutter Height';
$this->params['breadcrumbs'][] = ['label' => 'Cutter Heights', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cutter-height-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
