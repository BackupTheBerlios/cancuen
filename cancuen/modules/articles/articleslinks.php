<?php
  include ("./configs/config.inc.php");
  $arraylinks = array();

  $smartyarticleslinks = new Smarty;
  $smartyarticleslinks->forcecompile = true;
  $smartyarticleslinks->debug = false;
  $smartyarticleslinks->template_dir = "./templates";
  $smartyarticleslinks->compile_dir = "./templates_c";
  $smartyarticleslinks->config_dir = "./config";
  $smartyarticleslinks->cache_dir = "./cache";
  
  $conn = mysql_connect($server,$user,$password);
  mysql_select_db($database);
  
  $result = mysql_query("SELECT  idarticle,imgpath,title,content,idparent from article where idparent = 0");
  while ($links = mysql_fetch_assoc($result))
     {
       array_push($arraylinks,$links);
	   if ($idarticle == $links[idarticle])
	     {
	   		$result2 = mysql_query("SELECT idarticle,imgpath,title,content,idparent from article where idparent = $idarticle");
       		$nrows = mysql_num_rows($result2);
		  		if ( $nrows > 0) {
                  while ($links2 = mysql_fetch_assoc($result2))
					     {
       						array_push($arraylinks,$links2);
			   		     }
			   		     mysql_free_result($result2);
		         }
        }
     }
  mysql_free_result($result);


  $smartyarticleslinks->assign("ARTICLESLINKS",$arraylinks);
  
  $smartyarticleslinks->display("articleslinks.tpl");
  mysql_close ($conn);

?>
