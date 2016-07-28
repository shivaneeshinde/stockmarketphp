<?php 
$a=exec('python quoet.py', $output,$result);

print_r($output);

/*$a=(string)$output[1];
//echo $a;
 $response = array();
    $response["success"] = true; 
    $response["price"] = $a;
    echo json_encode($response);

//$b[]=$explode(":",$a);
*/
 ?>