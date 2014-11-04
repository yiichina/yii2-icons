<?php

namespace yiichina\icons;

use yiichina\icons\IconAsset;

/**
 * This is just an example.
 */
class Icon extends \yii\base\Widget
{
    public function run()
    {
        $view = $this->getView();
        IconAsset::register($view);
    }
}
