<?php
require_once('class.stockMarketAPI.php');

$StockMarketAPI = new StockMarketAPI;
$StockMarketAPI->symbol = 'AAPL';

 $a=$StockMarketAPI->getData();

$date=$a['AAPL'];

print_r($date);

 $response = array();
    $response["success"] = true; 
 	$price=$date['symbol']; 
    $response["price"] = $price;

	$change=$date['change'];
    $response["change"] = $change;
	$volume=$date['volume'];
    $response["volume"] = $volume;
	$avg_daily_volume=$date['avg_daily_volume'];
    $response["avg_daily_volume"] = $avg_daily_volume;

    
	$stock_exchange=$date['stock_exchange'];
	$market_cap=$date['market_cap'];
	$book_value=$date['book_value'];
	$ebitda=$date['ebitda'];
	$dividend_yield=$date['dividend_yield'];
	$earnings_per_share=$date['earnings_per_share'];
	$fiftytwo_week_high=$date['fiftytwo_week_high'];
	$fiftytwo_week_low=$date['fiftytwo_week_low'];
	$fiftyday_moving_avg=$date['fiftyday_moving_avg'];
	$twohundredday_moving_avg=$date['twohundredday_moving_avg'];
	$price_earnings_ratio=$date['price_earnings_ratio'];
	$price_earnings_growth_ratio=$date['price_earnings_growth_ratio'];
	$price_sales_ratio=$date['price_sales_ratio'];
	$price_book_ratio=$date['price_book_ratio'];
	$short_ratio=$date['short_ratio'];
	$name=$date['name'];
	$symbol=$date['symbol'];  		


    echo json_encode($response);

 ?>
