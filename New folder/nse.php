<?php
$url='http://finance.google.com/finance/info?client=ig&q=NSE:HDFC';
$data= file_get_contents($url);

$row=explode(",",$data);
print_r($row);
for ($x=1;$x<count($row);$x++){
	$day[]=explode(":",$row[$x]);
}

print '<pre>';
print_r($day);
print '</pre>';

 $response = array();
 $response["success"] = true;  
 $a=print($day[0][0]);
 $response["p"] = $a;
 $response["a1"] =print($day[0][1]);
 $response["b"] = print($day[1][0]);

    echo json_encode($response);
?>