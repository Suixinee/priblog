<?php
/**
 * Created by PhpStorm.
 * User: pcy
 * Date: 2019/5/16
 * Time: 15:53
 */
$title = $_GET['title'];
$content = file_get_contents('./data/arts/' . $title);

view('artedit');