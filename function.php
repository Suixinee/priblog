<?php
/**
 * Created by PhpStorm.
 * User: pcy
 * Date: 2019/5/16
 * Time: 8:46
 */
//公共函数库

//视图文件加载
function view($data)
{
    include('./view/admin/' . $data . '.html');
}

//模板加载
function m($data)
{
    include('./controller/admin/' . $data . '.php');
}

//验证
function isLoad()
{
    $username = $_POST['userbane'];
    $password = $_POST['password'];

}

//提示 跳转
function message($msg, $url)
{
    echo "<script>alert('$msg');location.href='$url';</script>";
}
