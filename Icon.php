<?php

namespace yiichina\icons;

use yii\helpers\Html;
use yii\helpers\ArrayHelper;

/**
 * This is just an example.
 */
class Icon extends \yii\base\Widget
{
    /**
     * @param $name string 图标名称
     * @param $options array 图标参数
     * @param $htmlOptions array HTML 参数
     * @return string
     */
    public static function show($name, $options = [], $htmlOptions = [])
    {
        IconAsset::register(\Yii::$app->getView());
        $tagName = ArrayHelper::remove($options, 'tagName', 'i');
        $type = ArrayHelper::remove($options, 'type', 'fas');
        $start = ArrayHelper::remove($options, 'start', null);
        $end = ArrayHelper::remove($options, 'end', ' ');
        Html::addCssClass($htmlOptions, ['type' => $type, 'name' => 'fa-' . $name]);
        return $start . Html::tag($tagName, null, $htmlOptions) . $end;
    }
}
