<?php 
$a=exec('python loserngainer.py', $output,$result);

echo '<pre>';
print_r($output);
echo '</pre>';

/*
$a=(string)$output;

 $response = array();
    $response["success"] = true; 
    $response["price"] = $a;
    echo json_encode($response);
*/
 ?>