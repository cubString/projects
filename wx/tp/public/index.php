<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2019 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// [ 应用入口文件 ]
namespace think;
var_dump(__DIR__);
var_dump(__DIR__.'/../vendor/autoload.php');
var_dump(is_file(__DIR__.'/../vendor/autoload.php');

exit;
require __DIR__ . '/../vendor/autoload.php';

echo "isOK1";exit;
// 执行HTTP应用并响应
$http = (new App())->http;
echo "isOK2";exit;
$response = $http->run();
echo "isOK3";
$response->send();
echo "isOK4";exit;
$http->end($response);
