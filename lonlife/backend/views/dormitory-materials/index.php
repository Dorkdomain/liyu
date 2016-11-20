<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DormitoryMaterialsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = yii::t('common','Dormitory Materials');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dormitory-materials-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(yii::t('common','Create Dormitory Materials'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'dormitory_id',
            'dormitory_material_id',
            'dormitory_material_name',
            'dormitory_material_amount',
            'dormitory_material_surplus',
            // 'dormitory_staff_id_name',
            // 'dormitory_staff_material_amount',
            // 'dormitory_note:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
