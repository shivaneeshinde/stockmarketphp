<?php

//include("database.php");
$ticker=$_POST["sname"];
echo $ticker;
function createURL($ticker){
	$currentMonth= date("n");
	$currentMonth = $currentMonth-1;
	$currentDay=date("j");
	$currentYear=date("Y");
	return "http://real-chart.finance.yahoo.com/table.csv?s=$ticker&d=$currentMonth&e=$currentDay&f=$currentYear&g=d&a=7&b=19&c=2004&ignore=.csv";
}

function getCSVFile($url,$outputFile){
	$content=file_get_contents($url);
	$conte= str_replace("Date,Open,High,Low,Close,Volume,Adj Close", "", $content);
	$content=trim($content);
	file_put_contents($outputFile,$content);
}

//function fileToDatabase($txtFile,$tableName){}
$a=createURL($ticker);
echo $a;
//getCSVFile($url,$outputFile);

/*
//include("database.php");
$ticker1=$_POST["sname"];
echo $ticker1;
function createURL($ticker1){
	$currentMonth= date("n");
	$currentMonth = $currentMonth-1;
	$currentDay=date("j");
	$currentYear=date("Y");

	return "http://download.finance.yahoo.com/d/quotes.csv?s=$ticker1&f=nab";
}

function getCSVFile($url,$outputFile){
	$content=file_get_contents($url);
	$conte= str_replace("Date,Open,High,Low,Close,Volume,Adj Close", "", $content);
	$content=trim($content);
	file_put_contents($outputFile,$content);
}

//function fileToDatabase($txtFile,$tableName){}
$url=createURL($ticker1);
echo $url;
/*
$outputFile="csv";
getCSVFile($url,$outputFile);

http://www.google.com/finance/historical?q=NASDAQ%3AAAPL&ei=nMCPV_GTCZOduASorZiQCg&output=csv

http://ichart.finance.yahoo.com/table.csv?s=$ticker1&d=$currentMonth&e=$currentDay&f=$currentYear&g=d&a=7&b=19&c=2004&ignore=.csv";
*/

?>
