<?php
include ("./configs/config.inc.php");
$dir_name = "./modules/user/images/avatar";
$arrayuseravatar = array(); 

$smartyuseravatar = new Smarty;
$smartyuseravatar->compile_dir = './templates_c';
$smartyuseravatar->template_dir = './templates';
$smartyuseravatar->config_dir = './configs';
$smartyuseravatar->cache_dir = './cache';

if (isset($cambia)) {
$conn = mysql_connect($server,$user,$password) or die("No se puede conectar a MySQL");
$db = mysql_select_db($database);

	$result = mysql_query("update user set pathavatar = '$dir_name/$cambia' WHERE user = '$prguser'");

mysql_close($conn);
    $smartyuseravatar->assign("CAMBIO","1");
    $smartyuseravatar->assign("PRGUSER",$prguser);
    $smartyuseravatar->display("selavatar.tpl");
}
else {
$dir = opendir($dir_name);
$cont = 0;
$arrayuseravatar = array();
$arrayuseravatarname = array();
while ($file_name = readdir($dir)) {
	if (($file_name != "." && $file_name != ".." )
		&& (eregi(".png",$file_name)) ) {
	$arrayuseravatar[$cont] = $dir_name."/".$file_name;
	$arrayuseravatarname[$cont] = $file_name;
	$cont = $cont + 1;
	}
}
closedir($dir);
    $smartyuseravatar->assign("ARRAYUSERAVATAR",$arrayuseravatar);
    $smartyuseravatar->assign("ARRAYUSERAVATARNAME",$arrayuseravatarname);
    $smartyuseravatar->display("selavatar.tpl");
}
?>
