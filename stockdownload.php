<?php
include("database.php");

function createURL($ticker){
	$currentMonth= date("n");
	$currentMonth = $currentMonth-1;
	$currentDay=daye("j");
	$currentYear=date("Y");
	return "http://ichart.finance.yahoo.com/table.csv?s=$ticker&d=$currentMonth&e=$currentDay&f=$currentYear&g=d&a=7&b=19&c=2004&ignore=.csv";
}

function getCSVFile($url,$outputFile){
	$content=file_get_contents($url);
	$conte= str_replace("Date,Open,High,Low,Close,Volume,Adj Close", "", $content);
	$content=trim($content);
	file_put_contents($outputFile,$content);
}
?>