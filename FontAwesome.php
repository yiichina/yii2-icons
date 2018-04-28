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
        Html::addCssClass($this->htmlOptions, ['type' => $type, 'name' => 'fa-' . $name]);
    }

    public function render()
    {}

    public function __toString()
    {
        return Html::tag($this->tag, null, $this->htmlOptions);
    }

    public function fw()
    {
        Html::addCssClass($this->htmlOptions, ['fw' => 'fa-fw']);
        return $this;
    }

    public static function spin()
    {

    }

    public static function size()
    {

    }
    
    public static function transform()
    {

    }

    public static function mask()
    {

    }

    public static function ul()
    {

    }

    public static function border()
    {

    }

    public static function pullRight()
    {

    }

    public static function pullLeft()
    {

    }

    public static function pulse()
    {

    }
}