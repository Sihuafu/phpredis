<?php
/**
 * Created by PhpStorm.
 * User: sihuafu
 * Date: 2016/5/25
 * Time: 10:54
 */
$redis = new Redis();
$redis->connect('127.0.0.1', '6379');

var_dump($redis->lPush('mylist2', 'hello'));  //int(1)
echo "<br/>";
var_dump($redis->lPush('mylist2', 'world'));  //int(2)
echo "<br/>";
var_dump($redis->lRange('mylist2', 0, -1));   //array(2) { [0]=> string(5) "world" [1]=> string(5) "hello" }


/*
 * 描述：
 * 将一个个value值（'hello', 'world'...)插入到列表key的表头
 * 插入顺序：
 * 从元素的最左端到最右端插入
 */
