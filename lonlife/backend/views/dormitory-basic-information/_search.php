<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\DormitoryBasicInformationSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dormitory-basic-information-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'dormitory_id') ?>

    <?= $form->field($model, 'dormitory_name') ?>

    <?= $form->field($model, 'dormitory_site') ?>

    <?= $form->field($model, 'dormitory_rent') ?>

    <?= $form->field($model, 'dormitory_mode_of_payment') ?>

    <?php // echo $form->field($model, 'dormitory_note_of_rent') ?>

    <?php // echo $form->field($model, 'dormitory_warn_of_rent') ?>

    <?php // echo $form->field($model, 'dormitory_accounts_of_rent') ?>

    <?php // echo $form->field($model, 'dormitory_name_of_accounts') ?>

    <?php // echo $form->field($model, 'dormitory_name_of_landlord') ?>

    <?php // echo $form->field($model, 'dormitory_number_of_landlord') ?>

    <?php // echo $form->field($model, 'dormitory_note_of_landlord') ?>

    <?php // echo $form->field($model, 'dormitory_leader_name') ?>

    <?php // echo $form->field($model, 'dormitory_leader_number') ?>

    <?php // echo $form->field($model, 'dormitory_estate_number') ?>

    <?php // echo $form->field($model, 'dormitory_note') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
