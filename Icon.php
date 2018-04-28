<?php

namespace yiichina\icons;

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
        return new FontAwesome('fas', $name, $options);
    }

    public static function far($name, $options = [])
    {
        return new FontAwesome('far', $name, $options);
    }

    public static function fal($name, $options = [])
    {
        return new FontAwesome('fal', $name, $options);
    }

    public static function fab($name, $options = [])
    {
        return new FontAwesome('fab', $name, $options);
    }
}
