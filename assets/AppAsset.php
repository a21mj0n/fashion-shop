<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        //'css/bootstrap.min.css',
        'css/font-awesome.min.css',
        'css/themify-icons.css',
        'css/elegant-icons.css',
        'css/owl.carousel.min.css',
        'css/nice-select.css',
        'css/jquery-ui.min.css',
        'css/slicknav.min.css',
        'css/style.css',
    ];
    public $js = [
//        'js/jquery-3.3.1.min.js',
        //'js/bootstrap.min.js',
        'js/jquery-ui.min.js',
        'js/jquery.countdown.min.js',
        'js/jquery.nice-select.min.js',
        'js/jquery.zoom.min.js',
        'js/jquery.dd.min.js',
        'js/jquery.slicknav.js',
        'js/owl.carousel.min.js',
        'js/main.js',
        'js/client.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
