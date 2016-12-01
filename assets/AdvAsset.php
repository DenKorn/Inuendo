<?php

namespace app\assets;
use yii\web\AssetBundle;

class AdvAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/adv-style.css',
    ];
    public $js = [
        'js/adv-frame-main.js',
    ];
    public $depends = [

    ];
}
