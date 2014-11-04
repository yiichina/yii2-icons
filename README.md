yii2-icons
=====
用于yii2的所以字体图标的集合类

安装
------------

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
<?= \yiichina\icon\Icons::widget(); ?>```