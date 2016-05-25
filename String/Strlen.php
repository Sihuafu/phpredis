<?php
/**
 * Created by PhpStorm.
 * User: sihuafu
 * Date: 2016/5/25
 * Time: 10:12
 * Desc: 返回key所存储的字符串长度，当key存储的不是一个字符串的时候，返回一个错误
 */
$redis = new Redis();
$redis->connect('127.0.0.1', '6379');
$redis->set('mykey', 'hello world');
var_dump($redis->strlen('mykey'));    //int(11)
echo "<br />";
var_dump($redis->strlen('noKey'));   //int(0)