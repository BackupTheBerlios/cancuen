<?php
include ("./configs/config.inc.php");
$image_array = array();
$comments_array = array();

$smartygallery = new Smarty;
$smartygallery->compile_dir = './templates_c';
$smartygallery->template_dir = './templates';
$smartygallery->config_dir = './configs';
$smartygalley->cache_dir = './cache';


if (isset($cat))
{
	$conn = mysql_connect($server,$user,$password) or die("No se puede conectar a MySQL");
	$db = mysql_select_db($database);

    if (isset($id))
    {
    $result = mysql_query("Select * from image where cat = ".$cat." and id = ".$id);
    $resultcomments = mysql_query("Select * from imgcomments where idImg = ".$id);
    while ($rscomments = mysql_fetch_assoc($resultcomments))
    {
       array_push($comments_array,$rscomments);
    }

    }
	else
    $result = mysql_query("Select * from image where cat = ".$cat);

    while ($rs = mysql_fetch_assoc($result))
    {
       array_push($image_array,$rs);
    }
    
    
    $smartygallery->assign("IMAGES",$image_array);
    $smartygallery->assign("COMMENTS",$comments_array);
    $smartygallery->assign("CAT",$cat);
    $smartygallery->assign("ID",$id);
    $smartygallery->assign("PRGUSER",$prguser);
    $smartygallery->display("imggallery.tpl");

    mysql_free_result($result);
}
else
{
print "<center><font color = \"red\">Seleccione una categoria a la derecha!!!</font></center>";
print "<br><center><img src = \"./modules/imggallery/images/default.png\"></center>";
}
?>
