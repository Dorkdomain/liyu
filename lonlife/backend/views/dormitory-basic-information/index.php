<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DormitoryBasicInformationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = yii::t('common','Dormitory Basic Information');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dormitory-basic-information-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <p>
        <?= Html::a(yii::t('common','Create Dormitory Basic Information'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'dormitory_id',
            'dormitory_name',
            'dormitory_site',
            'dormitory_rent',
            'dormitory_mode_of_payment',
            // 'dormitory_note_of_rent:ntext',
            // 'dormitory_warn_of_rent',
            // 'dormitory_accounts_of_rent',
            // 'dormitory_name_of_accounts',
            // 'dormitory_name_of_landlord',
            // 'dormitory_number_of_landlord',
            // 'dormitory_note_of_landlord:ntext',
            // 'dormitory_leader_name',
            // 'dormitory_leader_number',
            // 'dormitory_estate_number',
            // 'dormitory_note:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
