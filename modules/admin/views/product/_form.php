<?php

use app\models\Category;
use kartik\select2\Select2;
use kartik\touchspin\TouchSpin;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'category_id')->widget(Select2::class, [
        'name' => 'category_id',
        'data' => $categories,
        'options' => [
            'placeholder' => 'Please select product category'
        ]
    ]) ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'old_price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ware_quantity')->widget(TouchSpin::class, [
        'name' => 'ware_quantity',
        'pluginOptions' => [
            'initval' => 1,
        ]
    ]) ?>

    <?= $form->field($model, 'quantity')->widget(TouchSpin::class, [
        'name' => 'quantity',
        'pluginOptions' => [
            'initval' => 1,
        ]
    ]) ?>

  <div class="form-group">
      <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
  </div>

    <?php ActiveForm::end(); ?>

</div>
