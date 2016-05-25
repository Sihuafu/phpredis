<?php
/**
 * Created by PhpStorm.
 * User: sihuafu
 * Date: 2016/5/24
 * Time: 14:56
 * Desc: 对value重写，从偏移量offset开始，不存在的key当做空字符串处理
 */
$redis = new Redis();
$redis->connect('127.0.0.1', '6379');

$redis->set('greeting', 'hello world');
$redis->setRange('greeting', 6, 'Redis');
var_dump($redis->get('greeting'));  //string(11) "hello Redis"
echo '<br />';
$redis->exists('emptyString');
$redis->setRange('emptyString', 5, 'Redis!');
var_dump($redis->get('emptyString'));   //string(11) "Redis!"