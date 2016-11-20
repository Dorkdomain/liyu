<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\DormitoryCost */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dormitory-cost-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'dormitory_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dormitory_water_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dormitory_water_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dormitory_water_price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dormitory_electric_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dormitory_electric_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dormitory_electric_price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dormitory_gas_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dormitory_gas_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dormitory_gas_price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dormitory_estate_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dormitory_estate_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dormitory_estate_price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dormitory_note')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? yii::t('common','Create') : yii::t('common','Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
