<?php
/**
 * Created by PhpStorm.
 * User: pcy
 * Date: 2019/5/16
 * Time: 8:46
 */
//后台入口文件
//项目初始化
session_start();
//引入公共函数库
include('function.php');

$active = !empty($_GET['a']) ? $_GET['a'] : 'index';
//登陆验证白名单

$noIsLoad = ['login'];
//加载请求文件
//m($active);
include('./controller/admin/' . $active . '.php');