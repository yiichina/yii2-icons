Yii2 Icons
==========

[![Latest Stable Version](https://poser.pugx.org/yiichina/yii2-icons/v/stable.png)](https://packagist.org/packages/yiichina/yii2-icons)
[![Total Downloads](https://poser.pugx.org/yiichina/yii2-icons/downloads.png)](https://packagist.org/packages/yiichina/yii2-icons)
[![License](https://poser.pugx.org/yiichina/yii2-icons/license)](https://packagist.org/packages/yiichina/yii2-icons)
[![Build Status](https://img.shields.io/travis/yiichina/yii2-icons.svg)](http://travis-ci.org/yiichina/yii2-icons)
[![Yii2](https://img.shields.io/badge/Powered_by-Yii_Framework-green.svg?style=flat)](http://www.yiiframework.com/)

用于yii2的所以字体图标的集合类

安装
----

安装这个扩展的首选方法是通过 [composer](http://getcomposer.org/download/)。

可以运行

```
php composer.phar require --prefer-dist yiichina/yii2-icons "dev-master"
```

也可以添加

```
"yiichina/yii2-icons": "dev-master"
```

到你的 `composer.json` 文件的包含部分。


使用
-----

一量扩展安装完成，你可以简单的使用它如以下代码：

```php
use yiichina\icons\Icon;

<?= Icon::show('user', 'glyphicon'); ?>  //渲染内容为 <span class="glyphicon glyphicon-user"></span>
<?= Icon::show('user', 'fa') ?> 或 <?= Icon::show('user') ?> //渲染内容为 <i class="fa fa-user"></i>
```
