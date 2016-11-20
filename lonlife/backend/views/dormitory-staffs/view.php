<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\DormitoryStaffs */

$this->title = $model->dormitory_id;
$this->params['breadcrumbs'][] = ['label' => yii::t('common','Dormitory Staffs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dormitory-staffs-view">

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
            'dormitory_bed_amount',
            'dormitory_staff_amount',
            'dormitory_room_id',
            'dormitory_staff_id',
            'dormitory_bed_id',
            'dormitory_check_in_date',
            'dormitory_check_out_date',
            'dormitory_note:ntext',
        ],
    ]) ?>

</div>
