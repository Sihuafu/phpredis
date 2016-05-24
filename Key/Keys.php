<?php
/**
 * Created by PhpStorm.
 * User: sihuafu
 * Date: 2016/5/24
 * Time: 13:22
 * desc: 查找符合给定模式的key
 * rule: KEYS * 返回数据库中的所有key
 *       KEYS h?llo 返回数据库中hallo hxllo等
 *       KEYS h*llo 返回hllo 和heeeeello等
 *       KEYS h[ae]llo  返回hello 和 hallo
 * warn：KEYS的速度非常快，但在一个大的数据库中使用它仍然可能造成性能问题，如果你需要从一个数据集中查找特定的key，你最好还是用集合(Set)。
 */
$redis = new Redis();
$redis->connect('127.0.0.1', 6379);
$arrayMsetKeys = [
    'one' => '1',
    'two' => '2',
    'three' => '3',
    'fout' => '4'
];
$redis->mset($arrayMsetKeys);
var_dump($redis->keys('*o*')); //{ [0]=> string(4) "fout" [1]=> string(3) "one" [2]=> string(3) "two" }
echo '<br/>';
var_dump($redis->keys('t??')); //{ [0]=> string(3) "two" }
echo '<br/>';
var_dump($redis->keys('t[w]*')); //array(1) { [0]=> string(3) "two" }
echo '<br/>';
var_dump($redis->keys('*')); // { [0]=> string(5) "three" [1]=> string(3) "age" [2]=> string(4) "fout" [3]=> string(3) "one" [4]=> string(3) "two" }