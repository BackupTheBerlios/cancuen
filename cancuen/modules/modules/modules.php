<?php
include ("./configs/config.inc.php");
$arraymodules = array(); // Create the array assoc with no range
$smartymodules = new Smarty;

$smartymodules->compile_dir = './templates_c';
$smartymodules->template_dir = './templates';
$smartymodules->config_dir = './configs';
$smartymodules->cache_dir = './cache';


$conn = mysql_connect($server,$user,$password);
mysql_select_db($database);

$result = mysql_query("Select *  from modules");

while ($rs = mysql_fetch_assoc($result))
{
  array_push($arraymodules,$rs);
}

$smartymodules->assign("MODULES",$arraymodules);
$smartymodules->display("modules.tpl");

mysql_free_result($result);
?>
