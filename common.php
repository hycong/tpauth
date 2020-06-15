<?php

if (!function_exists('pprint')) {
    /**
     * 设置redis缓存
     * @param array $key    键 字符串
     * @param string $data    值 数组
     * @param string $timeout    过期时间，默认60秒
     */
    function pprint($arr,$isexit = true)
    {
        echo "<pre>" . print_r($arr,true) . "</pre>";
        if($isexit === true) exit();
    }
}