<?php

namespace app\assets;

use yii\web\AssetBundle;

class ForeignPersonalAreaAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/personarea_style.css',
        'css/scrollfield.css'
    ];
    public $js = [
        'js/script.js'
    ];
    public $depends = [
        'app\assets\SiteAsset',
    ];
}
