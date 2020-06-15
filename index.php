<?php
require './common.php';

// 单例模式
//require './extend/designMode/singletonPattern.php';
//$value = singletonPattern::index();
//echo $value;


// 工厂模式
require './extend/designMode/factoryPattern.php';
$value = factoryPattern::createDatabase();
echo $value->test();