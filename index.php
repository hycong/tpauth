<?php
require './extend/singletonPattern.php';

$value = singletonPattern::getInstance('mysql')->index();
echo $value;