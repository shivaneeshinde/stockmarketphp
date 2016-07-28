<?php
include_once('class.yahoostock.php');
 
$objYahooStock = new YahooStock;
 
/**
 Add format/parameters to be fetched
 
 s = Symbol
 n = Name
 l1 = Last Trade (Price Only)
 d1 = Last Trade Date
 t1 = Last Trade Time
 c = Change and Percent Change
 v = Volume
 */
$objYahooStock->addFormat("snl1d1t1cv"); 
 
 $name = $_POST["name"];
/**
 Add company stock code to be fetched
 
 msft = Microsoft
 amzn = Amazon
 yhoo = Yahoo
 goog = Google
 aapl = Apple 

 
 */
$objYahooStock->addStock($name);
 
/**
 * Printing out the data
 */

 $response = array();
    $response["success"] = true;  
    foreach ($objYahooStock->getQuotes() as $code => $stock) {
    	
        $response["a"] = $stock[0];
        $response["b"] = $stock[1];
        $response["c"] = $stock[2];
        $response["d"] = $stock[3];
        $response["e"] = $stock[4];
        $response["f"] = $stock[5];
        $response["g"] = $stock[6];
    }

    echo json_encode($response);
?>