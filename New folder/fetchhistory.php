<?php
$url='http://www.google.com/finance/historical?q=NASDAQ%3AAAPL&ei=f3tyV5CbEYXiugS00JO4Bw&output=csv';
$data= file_get_contents($url);

$row=explode("\n",$data);

print_r($row);
for ($x=1;$x<count($row);$x++){
	$day[]=explode(",",$row[$x]);
}
$a=$day[0];
print_r($a[0]);
print_r($a[1]);
print_r($a);
print '<pre>';
print_r($day);
print '</pre>';

?>