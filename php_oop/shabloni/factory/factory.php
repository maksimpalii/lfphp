<?php
require "button.class.php";

class ButtonFactory
{
    public static function createButton($type)
    {
        $baseClass = 'Button';
        $targetClass = ucfirst($type) . $baseClass;

        if (class_exists($targetClass) && is_subclass_of($targetClass, $baseClass)) {
            return new $targetClass;
        } else {
            throw new Exception("У нас нет такой кнопки: '$type'");
        }
    }
}