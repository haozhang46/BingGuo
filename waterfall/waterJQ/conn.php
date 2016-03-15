<?php 
header("Content-Type:text/html;charset=utf8");
$url="localhost:3306";
$root="root";
$passwoed="";
//链接数据库

 mysql_connect($url,$root,$passwoed)or die("链接失败");

//选择数据库
mysql_select_db("water_fall");

//设置字符集
mysql_query("set names utf8");



 ?>