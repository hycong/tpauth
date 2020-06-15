<?php
//namespace designMode;
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

    private static $_instance = [];

    /**
     * 调用驱动类的方法
     * @access public
     * @param  string $method 方法名
     * @param  array  $params 参数
     * @return mixed
     */
    public static function __callStatic($method, $params)
    {
        return call_user_func_array([self::getInstance(), $method], $params);
    }

    public static function getInstance($name = 'mysql'){
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