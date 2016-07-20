<?php
$url='http://www.google.com/finance/historical?q=NASDAQ%3AAAPL&ei=f3tyV5CbEYXiugS00JO4Bw&output=csv';
$data= file_get_contents($url);

$row=explode("\n",$data);
for ($x=1;$x<count($row);$x++){
	$day[]=explode(",",$row[$x]);
}
print '<pre>';
print_r($day);
print '</pre>';
?>