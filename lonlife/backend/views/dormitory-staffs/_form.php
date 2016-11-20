<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\DormitoryStaffs */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dormitory-staffs-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'dormitory_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dormitory_bed_amount')->textInput() ?>

    <?= $form->field($model, 'dormitory_staff_amount')->textInput() ?>

    <?= $form->field($model, 'dormitory_room_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dormitory_staff_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dormitory_bed_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dormitory_check_in_date')->textInput() ?>

    <?= $form->field($model, 'dormitory_check_out_date')->textInput() ?>

    <?= $form->field($model, 'dormitory_note')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? yii::t('common','Create') : yii::t('common','Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
