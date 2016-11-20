<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\DormitoryCost */

$this->title = $model->dormitory_id;
$this->params['breadcrumbs'][] = ['label' => yii::t('common','Dormitory Costs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dormitory-cost-view">

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
            'dormitory_water_number',
            'dormitory_water_name',
            'dormitory_water_price',
            'dormitory_electric_number',
            'dormitory_electric_name',
            'dormitory_electric_price',
            'dormitory_gas_number',
            'dormitory_gas_name',
            'dormitory_gas_price',
            'dormitory_estate_number',
            'dormitory_estate_name',
            'dormitory_estate_price',
            'dormitory_note:ntext',
        ],
    ]) ?>

</div>
