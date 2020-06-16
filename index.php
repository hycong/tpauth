<?php
require './common.php';
spl_autoload_register('autoload');
function autoload($class)
{
    $dir = __DIR__;
    $requireFile = $dir . "/extend/designMode/" . $class . ".php";
    require $requireFile;
}

// 单例模式
//$value = singletonPattern::index();
//echo $value;


// 工厂模式
$value = factoryPattern::createDatabase();
echo $value->test();