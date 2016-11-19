<?php
namespace app\assets;

use yii\web\AssetBundle;

class IECompatabilityAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
    ];
    public $js = [
        'https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js',
        'https://oss.maxcdn.com/respond/1.4.2/respond.min.js'
    ];
    public $jsOptions = [
        'condition' => 'lte IE9'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'app\assets\AppAsset'
    ];
}
