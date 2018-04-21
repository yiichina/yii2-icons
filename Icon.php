<?php

namespace yiichina\icons;

use yii\helpers\Html;

/**
 * This is just an example.
 */
class Icon extends \yii\base\Widget
{
    /**
     * @param $name 图标名称
     * @param $options 选项参数
     * @return string
     */
    public static function show($name, $options = [])
    {
        IconAsset::register(\Yii::$app->getView());
        $type = ArrayHelper::remove($options, 'type', 'fas');
        $tagName = ArrayHelper::remove($options, 'tagName', 'i');
        $start = ArrayHelper::remove($options, 'start', null);
        $end = ArrayHelper::remove($options, 'start', ' ');
        ArrayHelper::setValue($options, 'class', "$type fa-$name");
        return $start . Html::tag($tagName, null, $options) . $end;
    }
}

