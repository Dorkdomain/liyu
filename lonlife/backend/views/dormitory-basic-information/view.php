<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\DormitoryBasicInformation */

$this->title = $model->dormitory_name;
$this->params['breadcrumbs'][] = ['label' => yii::t('common','Dormitory Basic Information'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dormitory-basic-information-view">

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
            'dormitory_name',
            'dormitory_site',
            'dormitory_rent',
            'dormitory_mode_of_payment',
            'dormitory_note_of_rent:ntext',
            'dormitory_warn_of_rent',
            'dormitory_accounts_of_rent',
            'dormitory_name_of_accounts',
            'dormitory_name_of_landlord',
            'dormitory_number_of_landlord',
            'dormitory_note_of_landlord:ntext',
            'dormitory_leader_name',
            'dormitory_leader_number',
            'dormitory_estate_number',
            'dormitory_note:ntext',
        ],
    ]) ?>

</div>
