<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\PublicAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

PublicAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<header>
    <div id="headerContent" class="content">
        <div class="logoBlock"><a href="/"><img src="assets/img/logo.png"></a></div>
        <div><p>Производство<br> кабельно-проводниковой<br> продукции для ТЭК России</p></div>
        <div class="contact">
            <img src="assets/img/telemarketer.png">
            <h1 class="number">8 (800) 200-40-80</h1>
            <a href="mailto:zakaz@metiz-mk.ru">
                <h2 class="mail">zakaz@metiz-mk.ru</h2></a>
        </div>
    </div>
</header>
<div class="wrap">
        <?= $content ?>
</div>
<footer>
    <div id="footerContent" class="content">
        <div class="logoBlock"><a href="/"><img src="assets/img/whitelogo.png"></a></div>
        <div><p>Производство<br> кабельно-проводниковой<br> продукции для ТЭК России</p></div>
        <div class="contact">
            <img src="assets/img/whitetelemarketer.png">
            <h1 class="number">8 (800) 200-40-80</h1>
            <a href="mailto:zakaz@metiz-mk.ru">
                <h2 class="mail">zakaz@metiz-mk.ru</h2></a>
        </div>
    </div>
</footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
