<?php
include ("./configs/config.inc.php");
if (!isset($id))
    $id = 1;
    
$infoArticle = array();

$articleitem = new Smarty;
$articleitem->debug = false;
$articleitem->forcecompile = true;
$articleitem->template_dir = "./templates";
$articleitem->compile_dir = "./templates_c";
$articleitem->config_dir = "./configs";
$articleitem->cache_dir = "./cache";

$conn = mysql_connect($server,$user,$password) or die("No se puede conectar a MySQL");
$db = mysql_select_db($database);

$result = mysql_query("Select * from article where idarticle = ".$id);

while ($info = mysql_fetch_assoc($result))
{
  array_push($infoArticle,$info);
}

$articleitem->assign("INFOARTICLE",$infoArticle);
$articleitem->display("articles.tpl");

mysql_free_result($result);
mysql_close ($conn);

?>
