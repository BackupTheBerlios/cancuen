<?php
include("./configs/config.inc.php");
$news = array();

$smarty = new Smarty;
$smarty->compile_dir = './templates_c';
$smarty->template_dir = './templates';
$smarty->config_dir = './configs';
$smarty->cache_dir = './cache';
$smarty->caching = false;

$conn = mysql_connect($server,$user,$password) or die("No se puede conectar a MySQL");
$db = mysql_select_db($database);

if (isset($id))
$result = mysql_query("Select * from news where id = ".$id);
elseif (isset($datefilter))
  {
  switch( $datefilter )
  {
    case "enero": $datefilter = "01"; break 1;
    case "febrero": $datefilter = "02"; break 1;
    case "marzo": $datefilter = "03"; break 1;
    case "abril": $datefilter = "04"; break 1;
    case "mayo": $datefilter = "05"; break 1;
    case "junio": $datefilter = "06"; break 1;
    case "julio": $datefilter = "07"; break 1;
    case "agosto": $datefilter = "08"; break 1;
    case "septiembre": $datefilter = "09"; break 1;
    case "octubre": $datefilter = "10"; break 1;
    case "noviembre": $datefilter = "11"; break 1;
    case "diciembre": $datefilter = "12"; break 1;
  }

   $result = mysql_query("Select * from news where MONTH(date) = '".$datefilter."'");
 }
else
$result = mysql_query("Select * from news where MONTH(date) = '".date("m")."'");

while ($row = mysql_fetch_assoc($result))
{
array_push($news,$row);
}
$smarty->assign("LONGNEW",$longnew);
$smarty->assign("NEWS",$news);
$smarty->display("news.tpl");

mysql_free_result($result);

?>
