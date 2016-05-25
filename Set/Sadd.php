<?php
/**
 * Created by PhpStorm.
 * User: sihuafu
 * Date: 2016/5/25
 * Time: 11:13
 */
$redis = new Redis();
$redis->connect('127.0.0.1', 6379);

var_dump($redis->sAdd('myset', 'Hello'));   //int(1)
echo "<br />";
var_dump($redis->sAdd('myset', 'World'));   //int(1)
echo "<br />";
var_dump($redis->sMembers('myset'));  //array(2) { [0]=> string(5) "World" [1]=> string(5) "Hello" }