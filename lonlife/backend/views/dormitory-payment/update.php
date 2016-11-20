<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DormitoryPayment */

$this->title = yii::t('common','Update Dormitory Payment: ') . $model->id;
$this->params['breadcrumbs'][] = ['label' => yii::t('common','Dormitory Payments'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = yii::t('common','Update');
?>
<div class="dormitory-payment-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
