<?php
/**
 * Created by PhpStorm.
 * User: sihuafu
 * Date: 2016/5/25
 * Time: 10:01
 * Desc: 当且仅当key不存在，同时设置一个或多个key-value对
 */
$redis = new Redis();
$redis->connect('127.0.0.1', '6379');

$arrayMset = [
    'rmdbs' => 'MySQL',
    'nosql' => 'MongoDB',
    'key-value' => 'redis'
];
var_dump($redis->msetnx($arrayMset)); // true
echo "<br />";
$arrayMset1 = [
    'rmdbs' => 'Sqlite',
    'language' => 'python'
];
var_dump($redis->msetnx($arrayMset1));   //false
echo "<br/>";
var_dump($redis->exists('rmdbs'));  // true
echo "<br/>";
var_dump($redis->get('rmdbs'));  //MySQL