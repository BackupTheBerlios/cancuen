<HTML>
<HEAD>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
<META NAME="Generator" content="Dev-PHP 2.0.8">
<META NAME="author" CONTENT="Mario Enrique López Guzmán (mariotpc) mariotpc@berlios.de">

<style type="text/css">
table { border-collapse: collapse;}

table.ventana {
    background-color:#FFFFFF;
    border: 1px #FF8000 solid;
}
td.titulo {
   color: #FFFFFF;
   text-align: center;
   background-color: #FF8000; height: 25px;
   background-image: url(cellnaranja.bmp);
}
td{
 font-family: verdana, arial, tahoma;
 font-size: small;
}
a	{
    text-decoration: none;
	color: #FF8000;
	background-color: transparent;
}
</style>

</HEAD>
<BODY>

<?php
include_once("./configs/config.inc.php");
include_once("./classes/grabar.class.php");

$cont = 0;

$grabar = new Grabar;

    $grabar->abreConexionMySql($server,$user,$password,$database);
    
reset ($HTTP_POST_VARS);

$cont=0;
while (list ($clave, $val) = each ($HTTP_POST_VARS)) {
    $cont++;
    if ((strlen($val) <= 0) and ($cont <= 12))
        {
			switch ($cont) {
			case 2:
			case 3:
			case 6:
			case 9:
			case 11:
			case 12:
			print "<CENTER><TABLE WIDTH = 40% class = \"ventana\">";
			print "<TR><TD class=\"titulo\" align=\"CENTER\">";
			print "Advertencia ...";
			print "</TD></TR>";
			if ($submit == "Comenta esta imagen"){
      		    print "<TR><TD>Antes de ingresar comentarios <br> debes registrarte<br>\n <a href=\"javascript: history.go(-1)\"><CENTER>REGRESAR</CENTER></a></center>";
	    		print "</TD></TR></TABLE></CENTER>";
			}
			elseif ($submit == "Enviar Respuesta"){	
	    		print "<TR><TD>Antes de publicar respuestas <br> debes registrarte<br>\n <a href=\"javascript: history.go(-1)\"><CENTER>REGRESAR</CENTER></a></center>";
    		    print "</TD></TR></TABLE></CENTER>";
	    	}else{
	    		print "<TR><TD>Debe indicar un valor para =>".$clave."<br>\n <a href=\"javascript: history.go(-1)\"><CENTER>REGRESAR</CENTER></a></center>";
	    		print "</TD></TR></TABLE></CENTER>";
				print "hola".$submit;
			}
	    
	        exit();
	        break;
			}
        }
}
    if ($grabar->verificaDuplicados($HTTP_POST_VARS) > 0) {
			print "<CENTER><TABLE WIDTH = 40% class = \"ventana\">";
			print "<TR><TD class=\"titulo\" align=\"CENTER\">";
			print "El usuario ya existe.. ";
			print "</TD></TR>";
	        print "<TR><TD> por favor seleccione otro usuario <br>\n <a href=\"javascript: history.go(-1)\"><CENTER>REGRESAR</CENTER></a></center>";
	        print "</TD></TR></TABLE></CENTER>";
	        exit();
    };

	$grabar->grabarAMySql($HTTP_POST_VARS);

    $grabar->cierraConexionMySql();
    
    if ($submit == "Comenta esta imagen")
     {
		   	print "<CENTER><TABLE WIDTH = 40% class = \"ventana\">";
			print "<TR><TD class=\"titulo\" align=\"CENTER\">";
			print "INFORMACIÓN ...";
			print "</TD></TR>";
	    print "<TR><TD> Tu comentario ha sido registrado... <br>
			Gracias por participar, comentando nuestras imágenes.\n <br>
			<a href=\"index.php?centermodule=imggallery&cat="; 
			print $cat."><CENTER>Regresar a la Galería de Imágenes</CENTER></a></center>";
	    print "</TD></TR></TABLE></CENTER>";
	}elseif ($submit == "Enviar Respuesta"){
		   	print "<CENTER><TABLE WIDTH = 40% class = \"ventana\">";
			print "<TR><TD class=\"titulo\" align=\"CENTER\">";
			print "INFORMACIÓN ...";
			print "</TD></TR>";
	    print "<TR><TD> Tu respuesta ha sido registrada... <br>
			Gracias por participar, respondiendo nuestros comentarios.\n <br>
			<a href=\"index.php?centermodule=comments\"><CENTER>Regresar a los comentarios</CENTER></a></center>";
	    print "</TD></TR></TABLE></CENTER>";
		}else{
		print "<CENTER><TABLE WIDTH = 40% class = \"ventana\">";
			print "<TR><TD class=\"titulo\" align=\"CENTER\">";
			print "FELICITACIONES ...";
			print "</TD></TR>";
	    print "<TR><TD> Acabas de registrarte en Cancuen... <br>
			Ahora podrás ingresar tus comentarios acerca de las imágenes y muy pronto
			podrás dejarnos tus impresiones y comentarios en el módulo de mensajes...<br>
			Disfruta tu estancia en nuestra página.\n <br>
			<a href=\"index.php?centermodule=user&login=1\"><CENTER>Login</CENTER></a></center>";
	    print "</TD></TR></TABLE></CENTER>";
		}
		
		if ($submit == "Enviar Respuesta") {
		$connreplies = mysql_connect($server,$user,$password);
		mysql_select_db($database);
			 $result = mysql_query("UPDATE comments set replies = replies + 1 where comments.show = '1' and comments.id = ".$idparent);          

		mysql_close($connreplies);
		}
?>
</BODY>
</HTML>
