<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\CutterHeight $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="cutter-height-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'height')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
