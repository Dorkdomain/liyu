<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DormitoryBasicInformation */

$this->title = yii::t('common','Update Dormitory Basic Information:') . $model->dormitory_name;
$this->params['breadcrumbs'][] = ['label' => yii::t('common','Dormitory Basic Information'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->dormitory_name, 'url' => ['view', 'id' => $model->dormitory_id]];
$this->params['breadcrumbs'][] = yii::t('common','UpdateMessage');
?>
<div class="dormitory-basic-information-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
