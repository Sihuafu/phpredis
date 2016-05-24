<?php
/**
 * Created by PhpStorm.
 * User: sihuafu
 * Date: 2016/5/24
 * Time: 12:04
 */
$redis = new Redis();
$redis->connect('127.0.0.1', 6379);
echo "Connection to server successfully:\t";
$redis->set('myname', 'huafu');
echo $redis->get('myname');
echo '<br/>';
$redis->del('myname');
var_dump($redis->get('myname'));
if (!$redis->exists('fake_key')) {
    var_dump($redis->del('fake_key'));
}
