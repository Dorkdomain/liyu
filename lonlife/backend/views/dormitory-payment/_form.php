<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\DormitoryPayment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dormitory-payment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'dormitory_payment_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dormitory_payment_month')->textInput() ?>

    <?= $form->field($model, 'dormitory_payment_total')->textInput() ?>

    <?= $form->field($model, 'dormitory_payment_counts')->textInput() ?>

    <?= $form->field($model, 'dormitory_note')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? yii::t('common','Create') : yii::t('common','Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
