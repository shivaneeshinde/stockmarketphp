<?php
$url='http://finance.google.com/finance/info?q=NSE:HDFC';
$data= file_get_contents($url);

$row=explode(",",$data);


//print_r($row);


for ($x=1;$x<count($row);$x++){
	$day[]=explode(":",$row[$x]);
}

//print_r($day);

$z=$day[0];

$x1=$z[0];

echo $x1;

$x2=(string) $x1;
echo $x2; 
print_r($z);

	$response = array();
    $response["success"] = true; 
 	$a=$day[0];
    $response["name"] =$x2 ;
    $b=$day[1];
    $response["e"] = $b[1];
 	$l=$day[2];
    $response["l"] = $l[1];
 	$unknown=$day[3];
    $response["unknown"] = $unknown[0];

    echo json_encode($response);
?>