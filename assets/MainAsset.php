<?php

namespace app\assets;

use yii\web\AssetBundle;

class MainAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/style-main.css',
        'css/scrollfield.css'
    ];
    public $js = [

    ];
    public $depends = [
        'app\assets\SiteAsset',
    ];
}
