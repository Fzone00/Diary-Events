<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<?php
// If no month/year set, use current month/year
 
 mysql_connect("localhost","root","");
mysql_select_db("clock") or die(mysql_error());
mysql_query("SET NAMES UTF8");

$d = getdate(time());

$month = $_GET["sMonth"];
$year = $_GET["sYear"];

if ($month == "")
{
    $month = $d["mon"];
}

if ($year == "")
{
    $year = $d["year"];
}

$cal = new MyCalendar;
echo $cal->getMonthView($month, $year);
?>