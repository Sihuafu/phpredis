<?php
/**
 * Created by PhpStorm.
 * User: sihuafu
 * Date: 2016/5/25
 * Time: 11:05
 * Desc: 只有当key存在且存在一个list的时候，在头部插入value值
 */
$redis = new Redis();
$redis->connect('127.0.0.1', '6379');

var_dump($redis->lPushx('otherlist', 'hi'));  //int(0)
var_dump($redis->lRange('otherlist', 0, -1)); // array(0) { }