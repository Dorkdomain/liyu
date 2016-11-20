<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\DormitoryPayment */

$this->title = yii::t('common','Create Dormitory Payment');
$this->params['breadcrumbs'][] = ['label' => yii::t('common','Dormitory Payments'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dormitory-payment-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
