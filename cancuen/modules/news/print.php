<?php
include("./configs/config.inc.php");
$print = array();

$smartyprint = new Smarty;
$smartyprint->compile_dir = './templates_c';
$smartyprint->template_dir = './templates';
$smartyprint->config_dir = './configs';
$smartyprint->cache_dir = './cache';

$conn = mysql_connect($server,$user,$password) or die("No se puede conectar a MySQL");
$db = mysql_select_db($database);

if (isset($id))
$result = mysql_query("Select * from news where id = ".$id);
else
$result = mysql_query("Select * from news");

while ($row = mysql_fetch_assoc($result))
{
array_push($print,$row);
}

$smartyprint->assign("PRINTS",$print);
$smartyprint->assign("ADDRESS","http://".$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME']);
$smartyprint->assign("ARGS",$_SERVER['argv']);
$smartyprint->display("print.tpl");

mysql_free_result($result);
mysql_close($conn);

?>
