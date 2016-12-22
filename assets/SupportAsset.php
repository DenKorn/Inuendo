<?php

namespace app\assets;

use yii\web\AssetBundle;

class SupportAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/admin_style2.css',
        'css/filter.css'

    ];
    public $js = [
        "js/script.js"
    ];
    public $depends = [
        'app\assets\AppAsset',
        'app\assets\IECompatabilityAsset'
    ];
}
