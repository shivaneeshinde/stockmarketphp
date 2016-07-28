<?php /* Turn off notices for empty string values */
function stocklink($url)
{
error_reporting(0);
 
/* Get data from google */
$data = file_get_contents($url);
 
/* Strip first and last characters */
$data = substr($data,7,strlen($data)-7-4);
 
/* Split data into name:value records */
$records = explode('"', $data);
$record = explode(': ', $records);
 
for($i = 0; $i < count($records); $i++) {
/* split record into record name ($pair[0]) and record value ($pair[1]) */
 
$pair = explode(": ", $records[$i]);
/* do the output to be sure you got it right */
//echo 'Record name: ' . $pair[0] . ', Record value: ' . $pair[1] . '';
}
//echo  $records[2];
$vsign=substr($records,0,1);
if($vsign=="+")
{$im="";}
else
{
	$im='<img src="images/up.png" align="baseline"?-->';
}
echo $records[35];
echo "Current  ".$records[19]."";
echo $im."Change  ".$records[35]." / ";
echo $records[39]."%";
}
stocklink('http://finance.google.com/finance/info?client=ig&amp;q=NSE:NIFTY');
stocklink('http://finance.google.com/finance/info?client=ig&amp;q=INDEXBOM:SENSEX');
 
stocklink('http://finance.google.com/finance/info?client=ig&amp;q=NSE:NIFTY');
?>