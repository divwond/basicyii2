<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\cutterwidth $model */

$this->title = 'Create Cutterwidth';
$this->params['breadcrumbs'][] = ['label' => 'Cutterwidths', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cutterwidth-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
