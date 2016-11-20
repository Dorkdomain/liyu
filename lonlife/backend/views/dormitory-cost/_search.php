<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\DormitoryCostSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dormitory-cost-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'dormitory_id') ?>

    <?= $form->field($model, 'dormitory_water_number') ?>

    <?= $form->field($model, 'dormitory_water_name') ?>

    <?= $form->field($model, 'dormitory_water_price') ?>

    <?= $form->field($model, 'dormitory_electric_number') ?>

    <?php // echo $form->field($model, 'dormitory_electric_name') ?>

    <?php // echo $form->field($model, 'dormitory_electric_price') ?>

    <?php // echo $form->field($model, 'dormitory_gas_number') ?>

    <?php // echo $form->field($model, 'dormitory_gas_name') ?>

    <?php // echo $form->field($model, 'dormitory_gas_price') ?>

    <?php // echo $form->field($model, 'dormitory_estate_number') ?>

    <?php // echo $form->field($model, 'dormitory_estate_name') ?>

    <?php // echo $form->field($model, 'dormitory_estate_price') ?>

    <?php // echo $form->field($model, 'dormitory_note') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
