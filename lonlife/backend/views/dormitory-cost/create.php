<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\DormitoryCost */

$this->title = yii::t('common','Create Dormitory Cost');
$this->params['breadcrumbs'][] = ['label' => yii::t('common','Dormitory Costs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dormitory-cost-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
