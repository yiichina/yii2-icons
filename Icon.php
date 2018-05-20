<?php

namespace yiichina\icons;

use yii\helpers\Html;

/**
 * This is just an example.
 */
class Icon
{
    public static function show($name, $options = [])
    {
        return static::fas($name, $options);
    }

    public static function fas($name, $options = [])
    {
        FontAwesomeAsset::register(\Yii::$app->getView());
        Html::addCssClass($options, ['type' =>'fas', 'name' => 'fa-' . $name]);
        return Html::tag('i', null, $options) . ' ';
    }

    public static function far($name, $options = [])
    {
        FontAwesomeAsset::register(\Yii::$app->getView());
        Html::addCssClass($options, ['type' =>'far', 'name' => 'fa-' . $name]);
        return Html::tag('i', null, $options) . ' ';
    }

    public static function fal($name, $options = [])
    {
        return new FontAwesome('fal', $name, $options) . ' ';
    }

    public static function fab($name, $options = [])
    {
        FontAwesomeAsset::register(\Yii::$app->getView());
        Html::addCssClass($options, ['type' =>'fab', 'name' => 'fa-' . $name]);
        return Html::tag('i', null, $options) . ' ';
    }
}
