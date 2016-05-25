<?php
/**
 * Created by PhpStorm.
 * User: sihuafu
 * Date: 2016/5/25
 * Time: 10:07
 * Desc: 如果key存在，将value追加到key值之后，不存在key同set
 */
$redis = new Redis();
$redis->connect('127.0.0.1', '6379');

$redis->exists('myphone'); //false
var_dump($redis->append('myphone', 'iphone'));  // int(6)
echo "<br />";
var_dump($redis->append('myphone', '6s'));  //int(8)
echo "<br />";
var_dump($redis->get('myphone'));  //iphone6s