<?php

include ("./configs/config.inc.php");
$arrayuser = array(); 

$smartyuser = new Smarty;
$smartyuser->compile_dir = './templates_c';
$smartyuser->template_dir = './templates';
$smartyuser->config_dir = './configs';
$smartyuser->cache_dir = './cache';

$conn = mysql_connect($server,$user,$password) or die("No se puede conectar a MySQL");
$db = mysql_select_db($database);

if (isset($module) and isset($commentuser))
{ 
    $result = mysql_query("Select *  from user where user = '".$commentuser."'");

    while ($rs = mysql_fetch_assoc($result))
    {
      array_push($arrayuser,$rs);
    }
	$smartyuser->assign("USERDATA",$arrayuser);
    $smartyuser->assign("MOSTRARINFO",$mostrarinfo);
    $smartyuser->assign("PRGUSER",$prguser);
    $smartyuser->assign("LOGIN",$login);
	$smartyuser->assign("COMMENTUSER",$commentuser);
    $smartyuser->display("user.tpl");
}

elseif (!isset($prguser))
{
    $result = mysql_query("Select *  from user");

    while ($rs = mysql_fetch_assoc($result))
    {
      array_push($arrayuser,$rs);
    }
    $commentuser = "";
    $smartyuser->assign("USERDATA",$arrayuser);
    $smartyuser->assign("PRGUSER",$prguser);
    $smartyuser->assign("LOGIN",$login);
	$smartyuser->assign("COMMENTUSER",$commentuser);
    $smartyuser->display("user.tpl");
}
else
{
	$result = mysql_query("Select *  from user where user = '".$prguser."'");
    while ($rs = mysql_fetch_assoc($result))
    {
      array_push($arrayuser,$rs);
    }
    $commentuser = "";
	$smartyuser->assign("USERDATA",$arrayuser);
    $smartyuser->assign("MOSTRARINFO",$mostrarinfo);
    $smartyuser->assign("PRGUSER",$prguser);
    $smartyuser->assign("LOGIN",$login);
	$smartyuser->assign("COMMENTUSER",$commentuser);
    $smartyuser->display("user.tpl");
}
    mysql_free_result($result);
?>
