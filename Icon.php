<?php

namespace yiichina\icons;

use yii\helpers\Html;

/**
 * This is just an example.
 */
class Icon
{
    public static function show($name, $options = [], $space = true)
    {
        return static::fas($name, $options, $space);
    }

    public static function fas($name, $options = [], $space = true)
    {
        FontAwesomeAsset::register(\Yii::$app->getView());
        Html::addCssClass($options, ['type' =>'fas', 'name' => 'fa-' . $name]);
        return Html::tag('i', null, $options) . ($space ? ' ' : null);
    }

    public static function far($name, $options = [], $space = true)
    {
        FontAwesomeAsset::register(\Yii::$app->getView());
        Html::addCssClass($options, ['type' =>'far', 'name' => 'fa-' . $name]);
        return Html::tag('i', null, $options) . ($space ? ' ' : null);
    }

    public static function fal($name, $options = [], $space = true)
    {
        return new FontAwesome('fal', $name, $options) . ($space ? ' ' : null);
    }

    public static function fab($name, $options = [], $space = true)
    {
        FontAwesomeAsset::register(\Yii::$app->getView());
        Html::addCssClass($options, ['type' =>'fab', 'name' => 'fa-' . $name]);
        return Html::tag('i', null, $options) . ($space ? ' ' : null);
    }
}
