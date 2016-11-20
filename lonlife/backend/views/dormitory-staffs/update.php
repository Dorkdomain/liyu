<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DormitoryStaffs */

$this->title = yii::t('common','Update Dormitory Staffs: ') . $model->dormitory_id;
$this->params['breadcrumbs'][] = ['label' => yii::t('common','Dormitory Staffs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->dormitory_id, 'url' => ['view', 'id' => $model->dormitory_id]];
$this->params['breadcrumbs'][] = yii::t('common','Update');
?>
<div class="dormitory-staffs-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
