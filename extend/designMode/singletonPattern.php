<?php
/**
 * 单例模式
 * Class singletonPattern
 */

/**
 * Class singletonPattern
 * @method mysql index() static
 */
class singletonPattern
{

    private static $_instance;

    public static function getInstance($name = ''){
        self::$_instance = new $name();
        return self::$_instance;
    }

}


class mysql
{
    public function index()
    {
        return '这是mysql index';
    }
}