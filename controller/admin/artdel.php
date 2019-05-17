<?php
/**
 * Created by PhpStorm.
 * User: pcy
 * Date: 2019/5/16
 * Time: 11:51
 */

$title = $_POST['title'];
unlink('./data/arts/' . $title);

echo json_encode(['msg' => '删除成功', 'status' => 1]);