<?php


class registerPattern
{
    protected static $objects;

    function set($alias, $object)//将对象注册到全局的树上
    {
        self::$objects[$alias] = $object;//将对象放到树上
    }

    static function get($name)
    {
        return self::$objects[$name];//获取某个注册到树上的对象
    }

    function _unset($alias)
    {
        unset(self::$objects[$alias]);//移除某个注册到树上的对象。
    }
}