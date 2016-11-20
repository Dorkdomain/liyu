<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DormitoryCostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = yii::t('common','Dormitory Costs');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dormitory-cost-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(yii::t('common','Create Dormitory Cost'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'dormitory_id',
            'dormitory_water_number',
            'dormitory_water_name',
            'dormitory_water_price',
            'dormitory_electric_number',
            // 'dormitory_electric_name',
            // 'dormitory_electric_price',
            // 'dormitory_gas_number',
            // 'dormitory_gas_name',
            // 'dormitory_gas_price',
            // 'dormitory_estate_number',
            // 'dormitory_estate_name',
            // 'dormitory_estate_price',
            // 'dormitory_note:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
