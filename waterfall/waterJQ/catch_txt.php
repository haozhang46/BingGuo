<?php 
include "conn.php";
header("Content-Type:text/html;charset=utf8");

$handle=fopen("img.txt","r") or die("cc");
$contents="";

//读取
$contents= fread($handle,filesize("img.txt"));
fclose($handle);

// echo preg_match('/http[:\/\/]+/',$contents);
  $replacement='';
  $pattern='/[\x7f-\xff]/';
 // $row=preg_split("/^[[\x7f-\xff]/", $contents);
 //删除中文

  $row=preg_replace($pattern,$replacement, $contents);

 //判断中文

// if (preg_match("/[\x7f-\xff]/", $contents)) 
// 	{ echo "有中文"; }
// else{ echo "没有中文"; }

// foreach($row as $value){
// 	echo $value;
// 	echo "<br/>";
// }
$count=1;
 $row_1=explode("\n", $row);
 foreach ($row_1 as $key) {
 	// echo $key;
 	// echo "<br/>";
 	echo $key;
 	
 	mysql_query("INSERT INTO img(img_url)
 	VALUE('$key')");
 }
 //insert数据库
 
 ?>
