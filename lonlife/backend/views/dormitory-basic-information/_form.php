<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\DormitoryBasicInformation */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dormitory-basic-information-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'dormitory_id')->textInput(['maxlength' => true, 'style' => 'width:20%']) ?>

    <?= $form->field($model, 'dormitory_name')->textInput(['maxlength' => true,'style' => 'width:20%']) ?>

    <?= $form->field($model, 'dormitory_site')->textInput(['maxlength' => true,'style' => 'width:20%']) ?>

    <?= $form->field($model, 'dormitory_rent')->textInput(['maxlength' => true,'style' => 'width:20%']) ?>

    <?= $form->field($model, 'dormitory_mode_of_payment')->textInput(['maxlength' => true,'style' => 'width:20%']) ?>

    <?= $form->field($model, 'dormitory_note_of_rent')->textarea(['rows' => 6,'style' => 'width:20%']) ?>

    <?= $form->field($model, 'dormitory_warn_of_rent')->textInput(['maxlength' => true,'style' => 'width:20%']) ?>

    <?= $form->field($model, 'dormitory_accounts_of_rent')->textInput(['maxlength' => true,'style' => 'width:20%']) ?>

    <?= $form->field($model, 'dormitory_name_of_accounts')->textInput(['maxlength' => true,'style' => 'width:20%']) ?>

    <?= $form->field($model, 'dormitory_name_of_landlord')->textInput(['maxlength' => true,'style' => 'width:20%']) ?>

    <?= $form->field($model, 'dormitory_number_of_landlord')->textInput(['maxlength' => true,'style' => 'width:20%']) ?>

    <?= $form->field($model, 'dormitory_note_of_landlord')->textarea(['rows' => 6,'style' => 'width:20%']) ?>

    <?= $form->field($model, 'dormitory_leader_name')->textInput(['maxlength' => true,'style' => 'width:20%']) ?>

    <?= $form->field($model, 'dormitory_leader_number')->textInput(['maxlength' => true,'style' => 'width:20%']) ?>

    <?= $form->field($model, 'dormitory_estate_number')->textInput(['maxlength' => true,'style' => 'width:20%']) ?>

    <?= $form->field($model, 'dormitory_note')->textarea(['rows' => 6,'style' => 'width:20%']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? yii::t('common','Submit') : yii::t('common','SubmitUpdate') , ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
