<?php
/**
 * Created by PhpStorm.
 * User: sihuafu
 * Date: 2016/5/24
 * Time: 13:52
 * Desc: 返回给定key的剩余生存时间(time to live)(以秒为单位)
 * return: key的剩余时间（以秒为单位）， 失败返回-1
 */
$redis = new Redis();
$redis->connect('127.0.0.1', 6379);

// 带TTL的key
$redis->flushDB();
$redis->set('name', 'SF');
$redis->expire('name', 30); //设置name生存时间30秒
var_dump($redis->get('name')) ;
echo '<br/>';
var_dump($redis->ttl('name'));  //30
echo '<br/>';
// 不带TTl的key
$redis->set('site', 'hi');
var_dump($redis->ttl('site')); //int(-1)