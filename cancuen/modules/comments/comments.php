<?php
include ("./configs/config.inc.php");
$arraycomments = array(); 
$arraycommentsdetail = array(); 

$smartycomments = new Smarty;

$smartycomments->compile_dir = './templates_c';
$smartycomments->template_dir = './templates';
$smartycomments->config_dir = './configs';
$smartycomments->cache_dir = './cache';


$conn = mysql_connect($server,$user,$password);
mysql_select_db($database);

if (!isset($id) and !isset($newcomment)) {
	$result = mysql_query("SELECT comments.*,user.pathavatar FROM comments JOIN user WHERE comments.user = user.user AND comments.show = '1' and idparent = 0");
	while ($rs = mysql_fetch_assoc($result))
	{
	  array_push($arraycomments,$rs);
	}
}elseif (isset($id) and !isset($newcomment)) {
   	if (!isset($reply)) {
	//Update the views field at recorset
		$resultupdate = mysql_query("UPDATE comments SET views = views + 1 WHERE comments.show = '1' AND comments.id = ".$id);    
	}
	$result = mysql_query("SELECT comments.*,user.pathavatar FROM comments JOIN user WHERE comments.user = user.user AND comments.show = '1' and comments.id = ".$id);    
	$resultdetail = mysql_query("SELECT comments.*,user.pathavatar FROM comments JOIN user WHERE comments.user = user.user AND comments.show = '1' and comments.idparent = ".$id);    
	
	while ($rs = mysql_fetch_assoc($result))
	{
	  array_push($arraycomments,$rs);
	}
	
	while ($rsdetail = mysql_fetch_assoc($resultdetail))
	{
	  array_push($arraycommentsdetail,$rsdetail);
	}
}elseif ((isset($newcomment))) {
//I'll prepare the vars for new comment
	$dateposted = substr($arraycomments[0]["dateposted"],0,4)."-".substr($arraycomments[0]["dateposted"],4,2)."-".substr($arraycomments[0]["dateposted"],6,2);
	$arraycomments="";
	$arraycommentsdetail="";
	$id = "";
	$reply="";
}


$dateposted = substr($arraycomments[0]["dateposted"],0,4)."-".substr($arraycomments[0]["dateposted"],4,2)."-".substr($arraycomments[0]["dateposted"],6,2);

$smartycomments->assign("COMMENTS",$arraycomments);
$smartycomments->assign("COMMENTSDETAIL",$arraycommentsdetail);
$smartycomments->assign("DATEPOSTED",$dateposted);
$smartycomments->assign("ID",$id);
$smartycomments->assign("REPLY",$reply);
$smartycomments->assign("NEWCOMMENT",$newcomment);
$smartycomments->assign("PRGUSER",$prguser);
$smartycomments->display("comments.tpl");
//When no result is given don't have to release
if (!isset($newcomment)) {
	mysql_free_result($result);
}

?>
