<?php
/**
 * Created by PhpStorm.
 * User: sihuafu
 * Date: 2016/5/25
 * Time: 10:44
 * Desc: 删除哈希表key中的一个或多个指定的域
 */
$redis = new Redis();
$redis->connect('127.0.0.1', '6379');

var_dump($redis->hDel('myhash', 'field1')); //int(1)
var_dump($redis->hGet('myhash', 'field1'));  //false