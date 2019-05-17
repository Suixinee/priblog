<?php
/**
 * Created by PhpStorm.
 * User: pcy
 * Date: 2019/5/16
 * Time: 9:12
 */
//引入公共函数库
$username = $_POST['username'];
$password = $_POST['password'];

//读取所有用户
$account = file_get_contents('./data/account');
$account = explode("\n", $account);
foreach ($account as $v) {
    $temp = $username . " " . md5($password);
    if ($v == $temp) {
        $_SESSION["username"]=$username;
        echo json_encode(['msg' => '登陆成功', 'status' => 1]);exit;
    }
}
echo json_encode(['msg' => '登陆失败', 'status' => 0]);exit;

