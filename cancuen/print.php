<?php
$print = array();
include ("./Smarty/libs/Smarty.class.php");
include ("./configs/config.inc.php");

$smartyprint = new Smarty;

$smartyprint->compile_dir = './templates_c';
$smartyprint->template_dir = './templates';
$smartyprint->config_dir = './configs';
$smartyprint->cache_dir = './cache';


$conn = mysql_connect($server,$user,$password) or die("No se puede conectar a MySQL");
$db = mysql_select_db($database);

if (isset($id) and ($centermodule=="news"))
$result = mysql_query("Select * from news where id = ".$id);
elseif (isset($id) and ($centermodule=="comments"))
$result = mysql_query("Select comments.*,user.pathavatar,user.email,user.url from comments inner join user on comments.user = user.user where comments.id = ".$id);
else
$result = mysql_query("Select * from news");

while ($row = mysql_fetch_assoc($result))
{
array_push($print,$row);
}
if ($centermodule=="comments") {
	$dateposted = substr($print[0]["dateposted"],0,4)."-".substr($print[0]["dateposted"],4,2)."-".substr($print[0]["dateposted"],6,2);
	$smartyprint->assign("DATEPOSTED",$dateposted);
}

$smartyprint->assign("CENTERMODULE",$centermodule);
$smartyprint->assign("PRINTS",$print);
$smartyprint->assign("ADDRESS","http://".$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME']);
$smartyprint->assign("ARGS",$_SERVER['argv']);
$smartyprint->display("print.tpl");

mysql_free_result($result);
mysql_close($conn);

?>
