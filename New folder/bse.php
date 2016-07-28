<?php
$url='http://finance.google.com/finance/info?client=ig&q=NSE:HDFC';
$data= file_get_contents($url);

$row=explode(",",$data);
for ($x=1;$x<count($row);$x++){
	$day[]=explode(":",$row[$x]);
}

print '<pre>';
print_r($day);
print '</pre>';

 $response = array();
 $response["success"] = true;  
 $response["a"] = $day[0];

    echo json_encode($response);
?>