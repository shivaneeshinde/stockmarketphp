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
 
/**
 Add company stock code to be fetched
 
 msft = Microsoft
 amzn = Amazon
 yhoo = Yahoo
 goog = Google
 aapl = Apple 
 */
$objYahooStock->addStock("msft");
$objYahooStock->addStock("amzn");
$objYahooStock->addStock("yhoo");
$objYahooStock->addStock("goog"); 
$objYahooStock->addStock("vgz"); 
$objYahooStock->addStock("AAPL"); 
 
/**
 * Printing out the data
 */
foreach( $objYahooStock->getQuotes() as $code => $stock)
{
 ?>
 Code: <?php echo $stock[0]; ?> <br />
 Name: <?php echo $stock[1]; ?> <br />
 Last Trade Price: <?php echo $stock[2]; ?> <br />
 Last Trade Date: <?php echo $stock[3]; ?> <br />
 Last Trade Time: <?php echo $stock[4]; ?> <br />
 Change and Percent Change: <?php echo $stock[5]; ?> <br />
 Volume: <?php echo $stock[6]; ?> <br /><br />

 <?php
}

 $response = array();
    $response["success"] = true;  
        $response["aapl"] = $objYahooStock->getQuotes();

    echo json_encode($response);
?>