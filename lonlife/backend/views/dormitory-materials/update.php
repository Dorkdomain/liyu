<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DormitoryMaterials */

$this->title = yii::t('common','Update Dormitory Materials: ') . $model->dormitory_id;
$this->params['breadcrumbs'][] = ['label' => yii::t('common','Dormitory Materials'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->dormitory_id, 'url' => ['view', 'id' => $model->dormitory_id]];
$this->params['breadcrumbs'][] = yii::t('common','Update');
?>
<div class="dormitory-materials-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
