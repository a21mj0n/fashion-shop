<?php

use kartik\touchspin\TouchSpin;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Fashi | User Create';

?>
<h2 class="text-center mb-3">User Information</h2>
<div class="container">
    <?php
    $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput() ?>

    <?= $form->field($model, 'phone')->widget(TouchSpin::class, [
        'name' => 'quantity',
        'pluginOptions' => [
            'initval' => 1,
        ]
    ]) ?>
    <?= $form->field($model, 'address')->textarea() ?>

  <div class="form-group">
      <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
  </div>

    <?php ActiveForm::end(); ?>
</div>
