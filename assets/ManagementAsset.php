<?php

namespace app\assets;

use yii\web\AssetBundle;

class ManagementAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/admin_style1.css',
        'css/filter.css'

    ];
    public $js = [
        'js/jquery-1.11.3.min.js',
        'js/bootstrap.js',
        'js/script.js'
    ];
    public $depends = [
        'app\assets\AppAsset',
        'app\assets\IECompatabilityAsset'
    ];
}
