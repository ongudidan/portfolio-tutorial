<?php
/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AdminAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        "https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css",
        "/web/portfolio/css/app.css",
        "/web/portfolio/css/custom.css",
    ];
    public $js = [
        // "/web/portfolio/js/jquery.min.js",
        "/web/portfolio/js/app.js",
        // "/web/portfolio/js/dataTables.min.js",
        "/web/portfolio/js/custom.js",
        "https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js",

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset'
    ];
}
