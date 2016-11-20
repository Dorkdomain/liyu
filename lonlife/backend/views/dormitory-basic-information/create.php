<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\DormitoryBasicInformation */

$this->title = yii::t('common','Create Dormitory Basic Information');
$this->params['breadcrumbs'][] = ['label' => yii::t('common','Dormitory Basic Information'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dormitory-basic-information-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
