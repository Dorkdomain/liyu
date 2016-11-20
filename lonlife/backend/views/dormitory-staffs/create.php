<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\DormitoryStaffs */

$this->title = yii::t('common','Create Dormitory Staffs');
$this->params['breadcrumbs'][] = ['label' => yii::t('common','Dormitory Staffs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dormitory-staffs-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
