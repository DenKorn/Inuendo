<?php

namespace app\assets;

use yii\web\AssetBundle;

class GraficAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/grafic_style.css',
        'css/scrollfield.css'
    ];
    public $js = [

    ];
    public $depends = [
        'app\assets\SiteAsset',
    ];
}
