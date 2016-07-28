<?php 
$a=exec('python app.py', $output,$result);

echo '<pre>';
print_r($output);
echo '</pre>';

$z=(string)$output[2];
print_r($z);

 $response = array();
    $response["success"] = true; 
    $response["price"] = $output[3];
    echo json_encode($response);

 ?>