<?php

namespace app\assets;

use yii\web\AssetBundle;

class SiteAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/font-awesome.css'
    ];
    public $js = [
        'js/script.js'
    ];
    public $depends = [
        'app\assets\AppAsset',
        'app\assets\IECompatabilityAsset'
    ];
}
