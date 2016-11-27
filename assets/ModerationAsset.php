<?php

namespace app\assets;

use yii\web\AssetBundle;

class ModerationAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/admin_style3.css'
    ];
    public $js = [
    ];
    public $depends = [
        'app\assets\AppAsset',
        'app\assets\IECompatabilityAsset'
    ];
}
