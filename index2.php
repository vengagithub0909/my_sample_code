<?php 

$my_file = date('ymj-ms').'_file.txt';
$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
$data = 'This is the data samplee file';
$data = 'This is the data samplee file';
$data = 'This is the data samplee file';
$data = 'This is the data samplee file';
fwrite($handle, $_REQUEST);
?>