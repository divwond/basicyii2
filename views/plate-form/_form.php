<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\PlateForm $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="plate-form-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'plate_form')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
