<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\DormitoryStaffsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dormitory-staffs-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'dormitory_id') ?>

    <?= $form->field($model, 'dormitory_bed_amount') ?>

    <?= $form->field($model, 'dormitory_staff_amount') ?>

    <?= $form->field($model, 'dormitory_room_id') ?>

    <?= $form->field($model, 'dormitory_staff_id') ?>

    <?php // echo $form->field($model, 'dormitory_bed_id') ?>

    <?php // echo $form->field($model, 'dormitory_check_in_date') ?>

    <?php // echo $form->field($model, 'dormitory_check_out_date') ?>

    <?php // echo $form->field($model, 'dormitory_note') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
