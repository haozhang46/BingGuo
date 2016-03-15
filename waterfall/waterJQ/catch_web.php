<?php 
$handle = fopen ("http://image.baidu.com//", "rb"); 
$contents = ""; 
do { 
$data = fread($handle, 1024); 
if (strlen($data) == 0) { 
break; 
} 
$contents .= $data; 
} while(true); 
fclose ($handle); 
// echo $contents; 
echo preg_match('/[.jpg .png]&/',$contents);
?> 