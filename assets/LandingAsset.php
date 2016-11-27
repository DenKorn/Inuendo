<?php

namespace app\assets;

use yii\web\AssetBundle;

class LandingAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/landing_style.css',
    ];
    public $js = [
        'js/script.js'
    ];
    public $depends = [
        'app\assets\SiteAsset',
    ];
}
