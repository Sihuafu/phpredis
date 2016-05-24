<?php
/**
 * Created by PhpStorm.
 * User: sihuafu
 * Date: 2016/5/24
 * Time: 14:15
 * Desc: 给key重命名
 * return: key和newkey相同时，或是key不存在时，返回一个错误，当newkey存在时，覆盖旧值
 */
$redis = new Redis();
$redis->connect('127.0.0.1', '6379');

$redis->set('message', 'hello');
var_dump($redis->rename('message', 'greeting')); // ture
echo '<br/>';
var_dump($redis->exists('message')); //false
echo '<br/>';
var_dump($redis->exists('greeting')); //true

//当key不存在时，返回false
echo '<br/>';
$redis->set('color', 'red');
$redis->set('hero', 'TF');
var_dump($redis->rename('color', 'pc')); //true
echo '<br/>';
var_dump($redis->get('color')); //nil
echo '<br/>';
var_dump($redis->get('pc')); //color