<?php
include("./configs/config.inc.php");
$newslinks = array();

$smartylink = new Smarty;
$smartylink->compile_dir = './templates_c';
$smartylink->template_dir = './templates';
$smartylink->config_dir = './configs';
$smartylink->cache_dir = './cache';

$conn = mysql_connect($server,$user,$password) or die("No se puede conectar a MySQL");
$db = mysql_select_db($database);

if (isset($datefilter))
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
array_push($newslinks,$row);
}
$datefilter = date("m");
$smartylink->assign("NEWSLINKS",$newslinks);
$smartylink->assign("DATEFILTER",$datefilter);
$smartylink->display("newslinks.tpl");

mysql_free_result($result);

?>
