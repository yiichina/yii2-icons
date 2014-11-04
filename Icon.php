<?php

namespace yiichina\icons;

/**
 * This is just an example.
 */
class Icon extends \yii\base\Widget
{
	public $sourcePath = '@vendor/fortawesome/font-awesome';
    public $depends = array(
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset'
    );

    public function init()
    {
        $this->setupAssets('css', ['css/font-awesome']);
        parent::init();
    }

    public function run()
    {
        return "Hello!";
    }
}
