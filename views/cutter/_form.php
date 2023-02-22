<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Cutter $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="cutter-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'type')->textInput() ?>

    <?= $form->field($model, 'compresion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'plate_form')->textInput() ?>

    <?= $form->field($model, 'cutter_corner')->textInput() ?>

    <?= $form->field($model, 'plate_corner')->textInput() ?>

    <?= $form->field($model, 'direction')->textInput() ?>

    <?= $form->field($model, 'height')->textInput() ?>

    <?= $form->field($model, 'width')->textInput() ?>

    <?= $form->field($model, 'lenght')->textInput() ?>

    <?= $form->field($model, 'size_plate')->textInput() ?>

    <?= $form->field($model, 'category_id')->textInput() ?>

    <?= $form->field($model, 'img')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
