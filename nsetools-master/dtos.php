<?php 
$a=exec('python dtos.py', $output);

print_r($output);

$b=(string)$output[0];

echo $b;

$row=explode(":",$b);
print_r($row);
?>