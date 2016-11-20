<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DormitoryPaymentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = yii::t('common','Dormitory Payments');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dormitory-payment-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(yii::t('common','Create Dormitory Payment'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'dormitory_payment_number',
            'dormitory_payment_month',
            'dormitory_payment_total',
            'dormitory_payment_counts',
            // 'dormitory_note:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
