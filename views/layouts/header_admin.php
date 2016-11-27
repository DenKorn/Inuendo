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
    <?php $this->beginBody() ?>
    <body>
    <div class="container-fluid">
        <div class="row">
            <div class="navbar navbar-default navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
                            <span class="sr-only">Открыть навигацию</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="landing.html">
                            <object class="logotip" data="<?=$bundle->baseUrl?>/images/logotip.svg" type="image/svg+xml"></object>
                        </a>
                    </div>

                    <div class="collapse navbar-collapse" id="responsive-menu">
                        <ul class="nav navbar-nav" >
                            <li ><a href="adminpage1.html">Менеджмент</a></li>
                            <li><a href="adminpage2.html">Техподдержка</a></li>
                            <li><a href="adminpage3.html">Модерация</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?= $content ?>
        <?php $this->beginContent('@app/views/layouts/footer.php'); ?>
        <?php $this->endContent(); ?>
    </div>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage()  ?>