<?php
/**
 * Created by PhpStorm.
 * User: sihuafu
 * Date: 2016/5/25
 * Time: 10:18
 * Desc: hset key field value
 */
$redis = new Redis();
$redis->connect('127.0.0.1', '6379');

var_dump($redis->hSet('myhash', 'field1', 'hello'));  //int(1)
echo "<br />";
var_dump($redis->hGet('myhash', 'field1'));   // hello
echo "<br />";
var_dump($redis->hSet('myhash1', 'field1', 'world'));   //int(1)
echo "<br />";
var_dump($redis->hGet('myhash1', 'field1'));   //string(5) "world"
echo "<br />";
var_dump($redis->hGet('myhash', 'field2'));   //false