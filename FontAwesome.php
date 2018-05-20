<?php

namespace yiichina\icons;

use yii\helpers\Html;

class FontAwesome implements IconInterface
{
    public $type;
    public $name;
    public $tag = 'i';
    public $htmlOptions = [];

    /**
     * @param string $type
     * @param string $name
     * @param array $options
     */
    public function __construct($type, $name, $options = [])
    {
        FontAwesomeAsset::register(\Yii::$app->getView());
        Html::addCssClass($this->htmlOptions, array_merge(['type' => $type, 'name' => 'fa-' . $name], $options['class']));
    }

    public function render()
    {}

    public function __toString()
    {
        return Html::tag($this->tag, null, $this->htmlOptions);
    }
}