<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\DormitoryMaterials */

$this->title = yii::t('common','Create Dormitory Materials');
$this->params['breadcrumbs'][] = ['label' => yii::t('common','Dormitory Materials'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dormitory-materials-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
