<?php
include ("./configs/config.inc.php");
$searchnews = array();

$smartysearchnews = new Smarty;
$smartysearchnews->compile_dir = './templates_c';
$smartysearchnews->template_dir = './templates';
$smartysearchnews->config_dir = './configs';
$smartysearchnews->cache_dir = './cache';


$conn = mysql_connect($server,$user,$password) or die("No se puede conectar a MySQL");
$db = mysql_select_db($database);

$result = mysql_query("Select * from news where shortnew like '%".$search."%' or longnew like '%".$search."%'  or title like '%".$search."%'");

while ($row = mysql_fetch_assoc($result))
{
array_push($searchnews,$row);
}

$smartysearchnews->assign("SEARCH",$search);
$smartysearchnews->assign("SEARCHNEWS",$searchnews);
$smartysearchnews->display("searchnews.tpl");

mysql_free_result($result);

?>
