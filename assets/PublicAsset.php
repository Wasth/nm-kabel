<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 12.01.2018
 * Time: 22:52
 */

namespace app\assets;


use yii\web\AssetBundle;

class PublicAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'assets/css/item.css',
        'assets/css/style.css',
    ];
    public $js = [
        'assets/js/slider.js',
    ];
}