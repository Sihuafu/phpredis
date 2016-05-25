<?php
/**
 * Created by PhpStorm.
 * User: sihuafu
 * Date: 2016/5/25
 * Time: 10:46
 * Desc: 返回哈希表key中域的数量
 */
$redis = new Redis();
$redis->connect('127.0.0.1', '6379');

$redis->hSet('myhash', 'field2', 'hello');
$redis->hSet('myhash', 'field2', 'world');

$redis->hSet('myhash', 'field3', 'hello');
$redis->hSet('myhash', 'field3', 'world');
var_dump($redis->hLen('myhash'));   //int(2)