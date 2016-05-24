<?php
/**
 * Created by PhpStorm.
 * User: sihuafu
 * Date: 2016/5/24
 * Time: 14:12
 * Desc: 检查key是否存在
 * return: 存在返回1，否则返回0
 */
$redis = new Redis();
$redis->connect('127.0.0.1', '6379');

$redis->set('db', 'redis');
var_dump($redis->exists('db')); //true
echo '<br/>';
$redis->del('db');
var_dump($redis->exists('db')); //false