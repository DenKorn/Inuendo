<?php

namespace app\assets;

use yii\web\AssetBundle;

class ForeignPersonalAreaAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/pesonarea_style.css',
    ];
    public $js = [
        'js/script.js'
    ];
    public $depends = [
        'app\assets\SiteAsset',
    ];
}
