<?php
include("./configs/config.inc.php");
$category_array = array();

$smartyimggallery = new Smarty;
$smartyimggallery->compile_dir = './templates_c';
$smartyimggallery->template_dir = './templates';
$smartyimggallery->config_dir = './configs';
$smartyimggallery->cache_dir = './cache';


$conn = mysql_connect($server,$user,$password) or die("No se puede conectar a MySQL");
$db = mysql_select_db($database);

$result = mysql_query("Select * from imgcategory");

while ($rs = mysql_fetch_assoc($result))
{
   array_push($category_array,$rs);
}

$smartyimggallery->assign("CATEGORY",$category_array);
$smartyimggallery->display("imggallerycategory.tpl");

mysql_free_result($result);
?>
