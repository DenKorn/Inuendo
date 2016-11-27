<?php
use yii\helpers\Html; //рендерить только через renderPartial !
use app\assets\StubAsset;
$bundle = StubAsset::register($this);
$title = "Under Constraction and Coming Soon";
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="<?= Yii::$app->getHomeUrl()?>/favicon.ico?v=1"
    <meta name="description" content="Under Constraction and Coming Soon"/>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<input type="image" src="<?= $bundle->baseUrl ?>/images/arrow_96x96.png" alt="back_arrow" width="100" onclick="history.go(-1);return true;">
<section class="content wrapper">
    <h1>Страница пока в разработке</h1>
    <p class="description">...а необходимая информация из этого раздела будет показана, как только портал заработает. Уже скоро! </p>
    <div class="counter clear" data-date="<?= $publishDate ?>"></div>
</section>
<div class="back_img"></div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>