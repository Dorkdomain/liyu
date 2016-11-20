<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\DormitoryMaterialsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dormitory-materials-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'dormitory_id') ?>

    <?= $form->field($model, 'dormitory_material_id') ?>

    <?= $form->field($model, 'dormitory_material_name') ?>

    <?= $form->field($model, 'dormitory_material_amount') ?>

    <?= $form->field($model, 'dormitory_material_surplus') ?>

    <?php // echo $form->field($model, 'dormitory_staff_id_name') ?>

    <?php // echo $form->field($model, 'dormitory_staff_material_amount') ?>

    <?php // echo $form->field($model, 'dormitory_note') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
