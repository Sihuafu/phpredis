<?php
/**
 * Created by PhpStorm.
 * User: sihuafu
 * Date: 2016/5/24
 * Time: 17:59
 * Desc: 同时设置一个或多个key-value对，当key同名存在时，覆盖旧值
 */

$redis = new Redis();
$redis->connect('127.0.0.1', '6379');

$redis->select(0);  // 连接小标为0的数据库
$redis->flushDB();   //情况当前数据库的所有命令
$arrayMset = [
    'date' => '2016-05-24',
    'time' => '18:12pm',
    'weather' => 'sunny'
];
$redis->mset($arrayMset);
var_dump($redis->keys('*')); //array(3) { [0]=> string(7) "weather" [1]=> string(4) "time" [2]=> string(4) "date" }
