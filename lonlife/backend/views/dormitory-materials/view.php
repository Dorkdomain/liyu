<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\DormitoryMaterials */

$this->title = $model->dormitory_id;
$this->params['breadcrumbs'][] = ['label' => yii::t('common','Dormitory Materials'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dormitory-materials-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(yii::t('common','Update'), ['update', 'id' => $model->dormitory_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(yii::t('common','Delete'), ['delete', 'id' => $model->dormitory_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => yii::t('common','Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'dormitory_id',
            'dormitory_material_id',
            'dormitory_material_name',
            'dormitory_material_amount',
            'dormitory_material_surplus',
            'dormitory_staff_id_name',
            'dormitory_staff_material_amount',
            'dormitory_note:ntext',
        ],
    ]) ?>

</div>
