<?php
/**
 * Created by PhpStorm.
 * User: sihuafu
 * Date: 2016/5/25
 * Time: 10:41
 * Desc: 返回哈希表key中，所有的域和值
 */
$redis = new Redis();
$redis->connect('127.0.0.1', '6379');
$redis->hSet('myhash', 'field1', 'world');
var_dump($redis->hGetAll('myhash'));//array(3) { ["field2"]=> string(5) "world" ["field3"]=> string(5) "world" ["field1"]=> string(5) "world" }