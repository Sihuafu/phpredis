<?php
/**
 * Created by PhpStorm.
 * User: sihuafu
 * Date: 2016/5/24
 * Time: 13:33
 * Desc: 从当前数据库中随机返回(不删除)一个key
 * return ：当数据库不为空时，返回一个key； 当数据库为空的时，返回nil
 */
$redis = new Redis();
$redis->connect('127.0.0.1', 6379);
$redis->FLUSHALL();  // 输出所有数据库的所有数据
$arrayMsetRandomKey = [
    'fruit' => 'apple',
    'drink' => 'beer',
    'food' => 'cookis'
];
$redis->mset($arrayMsetRandomKey);
var_dump($redis->randomKey());
echo '<br/>';
var_dump($redis->keys('*'));
echo '<br/>';
$redis->flushDB(); //删除当前数据库所有key ，返回false
var_dump($redis->randomKey()); //false