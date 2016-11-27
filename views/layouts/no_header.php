<?php
use yii\helpers\Html;
use app\assets\SiteAsset;
$bundle = SiteAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <link rel="shortcut icon" href="<?= Yii::$app->getHomeUrl()?>/favicon.ico?v=1">
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="container-fluid">
    <?= $content ?>
    <?php $this->beginContent('@app/views/layouts/footer.php'); ?>
    <?php $this->endContent(); ?>
</div>
<?php $this->endBody() ?>
</body>
    </html>
<?php $this->endPage()  ?>