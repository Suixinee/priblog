<?php
/**
 * Created by PhpStorm.
 * User: pcy
 * Date: 2019/5/16
 * Time: 11:05
 */
//接受提交数据
$title = $_POST['title'];
$content = $_POST['content'];
//内容写入
file_put_contents('./data/arts/' . $title, $content);
message('文章添加成功', 'admin.php?a=posts');