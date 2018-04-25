<?php

namespace yiichina\icons;

use yii\helpers\Html;
use yii\helpers\ArrayHelper;

class FA extends \yii\base\Widget
{
    public $type;
    public $name;
    public $tag = 'i';
    public $htmlOptions = [];

    public function init()
    {
        IconAsset::register(\Yii::$app->getView());
        Html::addCssClass($this->htmlOptions, ['type' => $this->type, 'name' => 'fa-' . $this->name]);
    }

    public function __toString()
    {
        return Html::tag($this->tag, null, $this->htmlOptions);
    }

    /**
     * @param $name
     * @return FA
     */
    public static function fas($name)
    {
        return self::begin(['type' => 'fas', 'name' => $name]);
    }

    /**
     * @param $name
     * @return FA
     */
    public static function far($name)
    {
        return new self;
    }

    /**
     * @param $name
     * @return FA
     */
    public static function fal($name)
    {
        return new self;
    }

    /**
     * @param $name
     * @return FA
     */
    public static function fab($name)
    {
        return new self;
    }

    public function i()
    {

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