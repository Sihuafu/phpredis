<?php
/**
 * Created by PhpStorm.
 * User: sihuafu
 * Date: 2016/5/24
 * Time: 14:25
 * Desc: 当且仅当key不存在，给key设置value
 */
$redis = new Redis();
$redis->connect('127.0.0.1', '6379');
$redis->EXISTS('job');  # job不存在 //bool(false);
$redis->SETNX('job', "programmer");  # job设置成功 //bool(true)
$redis->SETNX('job', "code-farmer");  # job设置失败 //bool(false)
echo $redis->GET('job');  # 没有被覆盖 //"programmer"