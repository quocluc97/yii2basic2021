<?php


namespace app\assets;


use yii\bootstrap4\BootstrapAsset;
use yii\web\AssetBundle;
use yii\web\YiiAsset;

class AdminLTEAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/adminlte.min.css',
    ];
    public $js = [
        'js/adminlte.min.js'
    ];
    public $depends = [
        YiiAsset::class,
        BootstrapAsset::class,
    ];
}