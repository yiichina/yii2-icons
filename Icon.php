<?php

namespace yiichina\icons;

use yii\helpers\Html;

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

    public static function show($name, $framework = 'fa', $start = '', $end = ' ', $options = [])
    {
        $class = $framework . ' ' . $framework . '-' . $name;
        $options['class'] = empty($options['class']) ? $class : $class . ' ' . $options['class'];
        return $start . Html::tag($framework == 'fa' ? 'i' : 'span', null, $options) . $end;
    }
}
