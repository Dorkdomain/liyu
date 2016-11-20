<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\DormitoryMaterials */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dormitory-materials-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'dormitory_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dormitory_material_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dormitory_material_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dormitory_material_amount')->textInput() ?>

    <?= $form->field($model, 'dormitory_material_surplus')->textInput() ?>

    <?= $form->field($model, 'dormitory_staff_id_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dormitory_staff_material_amount')->textInput() ?>

    <?= $form->field($model, 'dormitory_note')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? yii::t('common','Create') : yii::t('common','Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
