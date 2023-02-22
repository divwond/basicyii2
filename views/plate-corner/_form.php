<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\PlateCorner $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="plate-corner-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'plate_corner')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
