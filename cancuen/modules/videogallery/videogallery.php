<?php
include ("./configs/config.inc.php");
$image_array = array();

$smartyvideogallery = new Smarty;
$smartyvideogallery->compile_dir = './templates_c';
$smartyvideogallery->template_dir = './templates';
$smartyvideogallery->config_dir = './configs';
$smartyvideogallery->cache_dir = './cache';

	$conn = mysql_connect($server,$user,$password) or die("No se puede conectar a MySQL");
	$db = mysql_select_db($database);

    if (isset($id))
       $result = mysql_query("Select * from video id = ".$id);
    else
   	   $result = mysql_query("Select * from video");


    while ($rs = mysql_fetch_assoc($result))
    {
       array_push($image_array,$rs);
    }

    $smartyvideogallery->assign("VIDEO",$image_array);
    $smartyvideogallery->assign("ID",$id);
    $smartyvideogallery->display("videogallery.tpl");

    mysql_free_result($result);
?>
