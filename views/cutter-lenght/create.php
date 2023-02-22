<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\CutterLenght $model */

$this->title = 'Create Cutter Lenght';
$this->params['breadcrumbs'][] = ['label' => 'Cutter Lenghts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cutter-lenght-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
