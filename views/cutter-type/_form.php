<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\CutterType $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="cutter-type-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ru_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'en_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ua_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ru_description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'en_description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ua_description')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
