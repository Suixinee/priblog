<?php
/**
 * Created by PhpStorm.
 * User: pcy
 * Date: 2019/5/16
 * Time: 9:56
 */
//获取文章列表
$artlist = scandir('./data/arts');
//去除特殊文件
unset($artlist[0]);
unset($artlist[1]);

view('posts');
//include('./view/admin/posts.html');
