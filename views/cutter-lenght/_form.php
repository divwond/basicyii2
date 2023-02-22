<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\CutterLenght $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="cutter-lenght-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'lenght')->textInput() ?>

    <?= $form->field($model, 'title_lenght')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
