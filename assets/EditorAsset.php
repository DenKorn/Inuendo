<?php

namespace app\assets;

use yii\web\AssetBundle;

class EditorAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/style-main.css',
        'css/editor.css',
    ];
    public $js = [
        'js/script.js'
    ];
    public $depends = [
        'app\assets\SiteAsset',
    ];
}
