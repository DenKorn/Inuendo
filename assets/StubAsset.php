<?php

namespace app\assets;
use yii\web\AssetBundle;

class StubAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        "css/reset_note.css",
        "css/main_note.css"
    ];
    public $js = [
        'js/jquery-1.11.3.min.js',
        'js/TimeCircles.js',
        'js/backstretch.js',
        'js/main.js'
    ];
    public $depends = [
    ];
}
