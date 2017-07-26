<?php

namespace yiichina\icons;

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

    public static function show($name, $framework = 'fa', $options = [])
    {
        $class = $framework . ' ' . $framework . '-' . $name;
        $options['class'] = empty($options['class']) ? $class : $class . ' ' . $options['class'];
        return Html::tag($framework == 'fa' ? 'i' : 'span', null, $options) . ' ';
    }
}
