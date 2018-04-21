<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace yiichina\icons;

use yii\web\AssetBundle;

/**
 * This asset bundle provides the javascript files for client validation.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class IconAsset extends AssetBundle
{
    public function init()
    {
        $this->sourcePath = '@bower/font-awesome/svg-with-js';
        $this->css = [
            'css/fa-svg-with-js.css',
        ];
        $this->js = [
            'js/fontawesome-all.min.js',
        ];
        parent::init();
    }
}
