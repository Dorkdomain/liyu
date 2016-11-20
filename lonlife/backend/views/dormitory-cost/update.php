<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DormitoryCost */

$this->title = yii::t('common','Update Dormitory Cost: ') . $model->dormitory_id;
$this->params['breadcrumbs'][] = ['label' => yii::t('common','Dormitory Costs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->dormitory_id, 'url' => ['view', 'id' => $model->dormitory_id]];
$this->params['breadcrumbs'][] = yii::t('common','Update');
?>
<div class="dormitory-cost-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
