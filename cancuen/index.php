<?php
/******************************************************************
*  IMPORTANTE * IMPORTANTE * IMPORTANTE * IMPORTANTE * IMPORTANTE *
*  SIEMPRE LEE LOS COMENTARIOS - ALWAYS READ THE COMMENTS !!!     *
*******************************************************************/

include_once ("./configs/config.inc.php");
include_once("./modules/statics/counter.php");

unset($visited);
session_start();
 $statics = new counter();
 $conn = $statics -> connect();
 $visitstoday = $statics->visitstoday();
 $visitstotal = $statics->visitstotal();
 $statics->increment();
 $statics -> disconnect($conn);
 session_register("visited");
 $visited=1;

if ($logout == 1)
    {
    setcookie("prguser","");
    setcookie("fijado","");
    header("location:index.php");
    }

if ((isset($prguser) and ($fijado == 0)))
   {

	$conn = mysql_connect($server,$user,$password) or die("No se puede conectar a MySQL");
	$db = mysql_select_db($database);

    $result = mysql_query("Select *  from user WHERE user = '".$prguser."' and password = '".md5($prgpassword)."';");
    $rs = mysql_fetch_assoc($result);

	 if (mysql_num_rows($result) == 1)
       {
         setcookie("prguser",$prguser);
         setcookie("prguser",$prguser);
         setcookie("theme",$rs["tema"]);
         setcookie("theme",$rs["tema"]);
         setcookie("fijado",1);
         setcookie("fijado",1);
       }
     else
       {
         setcookie("fijado","0");
			print "<CENTER><TABLE WIDTH = 40% class = \"ventana\" border=1>";
			print "<TR><TD class=\"titulo\" align=\"CENTER\">";
			print "Advertencia ... ";
			print "</TD></TR>";
	        print "<TR><TD> El Usuario o el Password son incorrectos ... <br>\n <a href=\"index.php?centermodule=user&login=1\"><CENTER>REGRESAR</CENTER></a></center>";
	        print "</TD></TR></TABLE></CENTER>";
	        exit();
       }
     mysql_free_result($result);
     mysql_close ($conn);
   }

include ("./Smarty/libs/Smarty.class.php");
$smarty = new Smarty;

$smarty->debugging = false;
$smarty->forcecomplile = true;
$smarty->compile_dir = './templates_c';
$smarty->template_dir = './templates';
$smarty->config_dir = './configs';
$smarty->cache_dir = './cache';

  if (!isset($centermodule))
     $centermodule="news";  //Para que por default corra el principal

  if ($centermodule == "articles" or $centermodule == "videogallery")
     $smarty->assign("CENTRAL","1");
  
  if ($centermodule == "comments")
     $smarty->assign("CENTRAL","1");
     
  $smarty->assign("CENTERMODULE",$centermodule);
  
  /* use for the imgGallery, article, news and print modules */

  $smarty->assign("ID",$id);
  $smarty->assign("IDARTICLE",$idarticle);
  $smarty->assign("IDPARENT",$idparent);

  /* use for the news module.... print, long new or short new and so on.....*/
  $smarty->assign("DATEFILTER",$datefilter);
  $smarty->assign("LONGNEW",$longnew);
  $smarty->assign("PRINT",$print);
  /* to here */
  
  /*Usado para el modulo de usuario user*/
  $smarty->assign("MOSTRARINFO",$mostrarinfo);
  $smarty->assign("LOGIN",$login);
  $smarty->assign("PRGUSER",$prguser);
  $smarty->assign("PRGPASSWORD",$prgpassword);
  /*  hasta aca ....*/

  /* use for the imgGallery and article modules */
  $smarty->assign("CAT",$cat);
  /* to here */
  
  /* use for the Search news module */
  $smarty->assign("SEARCH",$search);
  /* to here */
  
  /* por el cambio del avatar*/
  $smarty->assign("CAVATAR",$cavatar);
  $smarty->assign("CAMBIA",$cambia);

  /* Cuando se consulte el usuario de los comentarios */
  $smarty->assign("MODULE",$module);
  $smarty->assign("COMMENTUSER",$commentuser);
  $smarty->assign("REPLY",$reply);
  $smarty->assign("NEWCOMMENT",$newcomment);
  
  /* para fijar el tema por usuario */
  if (!isset($theme))
  $smarty->assign("THEME","cancuen");
  else
  $smarty->assign("THEME",$theme);


  $smarty->display("index.tpl");

?>
