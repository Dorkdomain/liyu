<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DormitoryStaffsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = yii::t('common','Dormitory Staffs');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dormitory-staffs-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(yii::t('common','Create Dormitory Staffs'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'dormitory_id',
            'dormitory_bed_amount',
            'dormitory_staff_amount',
            'dormitory_room_id',
            'dormitory_staff_id',
            // 'dormitory_bed_id',
            // 'dormitory_check_in_date',
            // 'dormitory_check_out_date',
            // 'dormitory_note:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
