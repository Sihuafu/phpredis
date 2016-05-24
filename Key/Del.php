<?php
/**
 * Created by PhpStorm.
 * User: sihuafu
 * Date: 2016/5/24
 * Time: 13:12
 */
$redis = new Redis();
$redis->connect('127.0.0.1', 6379);
// 删除单个key
$redis->set('name', 'SF');
echo $redis->get('name');   // 输出 SF
echo '<br/>';
$redis->del('name');
var_dump($redis->get('name'));  //获取一个不存在的key的值  返回false

//删除一个不存在的key
if (!$redis->exists('key1')) {
    var_dump($redis->del('key1')); // 删除一个不存在的key 返回int(0)
}
echo '<br/>';

// 同时删除多个key
$arrayMset = [
    'key1' => 'val1',
    'key2' => 'val2',
    'key3' => 'val3'
];
$redis->mset($arrayMset); // 用MSET一次存储多个值
$arrayMget = [
    'key1', 'key2', 'key3'
];
var_dump($redis->mget($arrayMget));  //一次返回多个值[0 => 'val1', 1 => 'val2', 2 => 'val3']
$redis->del($arrayMget); // 同时删除多个key
var_dump($redis->mget($arrayMget));   // 返回   array(3) { [0]=> bool(false) [1]=> bool(false) [2]=> bool(false) }