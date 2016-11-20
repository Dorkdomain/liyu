<?php

use yii\helpers\Html;
use backend\assets\AppAsset;
use yii\widgets\Breadcrumbs;
use yii\bootstrap\NavBar;
use yii\bootstrap\Nav;


/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);

?>
<?php $this->beginPage()?>
<!DOCTYPE html>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?>_后台_</title>
    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>

<?php
NavBar::begin([
    'brandLabel' => '<strong>' . '</strong>',
    'brandUrl' => Yii::$app->homeUrl,
    'options' => [
        'class' => 'navbar-default navbar-fixed-top',
        'target' => '_blank',
    ],
]);
?>

<?php NavBar::end()?>

<?= Breadcrumbs::widget([
    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
]) ?>
<?= $content ?>


<?php $this->endBody() ?>

</body>
</html>
<?php $this->endPage() ?>
