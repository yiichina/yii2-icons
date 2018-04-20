<?php

namespace yiichina\icons;

use yiichina\icons\IconAsset;
use yii\Helpers\Html;

/**
 * This is just an example.
 */
class Icon extends \yii\base\Widget
{
    public function init()
    {
        $view = $this->getView();
        IconAsset::register($view);
    }

    public static function show($name, $options = [])
    {
        $class = $framework . ' ' . $framework . '-' . $name;
        $options['class'] = empty($options['class']) ? $class : $class . ' ' . $options['class'];
        return Html::tag('span', null, $options) . ' ';
    }
}
