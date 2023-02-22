<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Cutter $model */

$this->title = Yii::t('app', 'Create Cutter');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Cutters'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cutter-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
