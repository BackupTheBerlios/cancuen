<HTML>
<HEAD>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1252">
<META NAME="Generator" content="Dev-PHP 2.0.8">
<META NAME="author" CONTENT="Mario Enrique López Guzmán (mariotpc) mariotpc@intelnet.net.gt">
  {config_load file="colaborador.conf"}
  <TITLE>{#TITLEPAGE#}</TITLE>
  
  <link rel="stylesheet" href="./themes/{$THEME}/style.css" type="text/css">
  <style type="text/css">
  </style>
</HEAD>
<BODY>
<table height = 100% width="100%" border="0" cellspacing="0" cellpadding="0">

    <TR HEIGHT="10%">
        <TD ALIGN="CENTER" COLSPAN = 4><IMG SRC="./themes/{$THEME}/top.png" border=0>

		<!-- FLASH PUBLICITY SPACE

		<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0" width="200" height="59" id="top2" align="middle">
		<param name="allowScriptAccess" value="sameDomain" />
		<param name="movie" value="top2.swf" />
		<param name="quality" value="high" />
		<param name="bgcolor" value="#0066cc" />
		<embed src="top2.swf" quality="high" bgcolor="#0066cc" width="200" height="89" name="top2" align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
		</object>
		
        END -->

		</TD>
    </TR>

    <TR HEIGHT="10%" >
        <TD WIDTH="18%" VALIGN="TOP">&nbsp;</TD>
        <TD WIDTH="2%" VALIGN="TOP">&nbsp;</TD>
        <TD WIDTH="62%" VALIGN="TOP">&nbsp;</TD>
        <TD WIDTH="18%" VALIGN="TOP">&nbsp;</TD>
    </TR>

    <TR HEIGHT="2%">
        <TD WIDTH="18%" VALIGN="TOP">&nbsp;</TD>
        <TD WIDTH="2%" valign="top" align = "left"><IMG SRC="./themes/{$THEME}/esquinaredondeada.bmp" border=0></TD>
        <TD WIDTH="80%" VALIGN="TOP" COLSPAN=2 class="solid-top">&nbsp;</TD>
    </TR>



    {*Here is the main body of colaborador*}

    <TR>
        {* MODULOS O ITEMS DE LA PARTE IZQUIERDA *}
        
        <TD WIDTH="18%" VALIGN="TOP" HEIGHT=271 class = "solid-right">
         {* Por razónes momentaneas este modulo esta activado por default
           Para activarlo segun los modulos, quita la linea de abajo y
           descomentariza el bloque if $CENTERMODULE eq "articles" ... *}

		{include_php file="./modules/modules/modules.php"}

        {*{if $CENTERMODULE eq "articles"}*}
        {include_php file="./modules/articles/articleslinks.php" id=$ID idarticle=$IDARTICLE idparent=$IDPARENT}
        {*{/if}*}
		
        {if $CENTERMODULE neq "user"}
        {include_php file="./modules/user/user.php" login=1 prguser=$PRGUSER prgpassword=$PRGPASSWORD mostrarinfo=$MOSTRARINFO}
        {/if}
	
        {include_php file="./modules/statics/statics.php"}

        </TD>


        {* SI EL MODULO ES ARTICLES ENTONCES SE MUESTRA LA INFO DEL COLEGIO *}
   		{if $CENTRAL neq "1"}

		     {* MODULOS O ITEMS DE LA PARTE CENTRAL *}

                  <TD WIDTH="64%" VALIGN="TOP" COLSPAN=2 HEIGHT=271 class = "dotted-right">
                      {if $CENTERMODULE eq "news"}
                           {if $SEARCH eq ""}
                              {include_php file="./modules/news/news.php" id=$ID longnew = $LONGNEW datefilter=$DATEFILTER }
                           {else}
                               {include_php file="./modules/news/searchnews.php" search=$SEARCH}
                           {/if}
                      {elseif $CENTERMODULE eq "imggallery"}
                      	   {include_php file="./modules/imggallery/imggallery.php" cat=$CAT id=$ID prguser=$PRGUSER}
					  					{elseif $CENTERMODULE eq "user" and $CAVATAR neq "1"}
                           {include_php file="./modules/user/user.php" login=$LOGIN prguser=$PRGUSER prgpassword=$PRGPASSWORD mostrarinfo=$MOSTRARINFO module=$MODULE commentuser=$COMMENTUSER}
                      {elseif $CENTERMODULE eq "user" and $CAVATAR eq "1"}
                           {include_php file="./modules/user/selavatar.php" cambia=$CAMBIA prguser=$PRGUSER login=0 mostrarinfo=1}
                      {else}
                         <CENTER><IMG SRC="./themes/{$THEME}/altar.png" border=0></CENTER>
                      {/if}
                  </TD>


                  {* MODULOS O ITEMS DE LA PARTE DERECHA*}

                  <TD WIDTH="18%" VALIGN="TOP" HEIGHT=271>
                      {if $CENTERMODULE eq "news"}
                         {include_php file="./modules/news/newslinks.php" datefilter=$DATEFILTER }
                      {elseif $CENTERMODULE eq "imggallery"}
                         {include_php file="./modules/imggallery/imggallerycategory.php"}
                      {else}
                         <CENTER><IMG SRC="./themes/{$THEME}/altar.png" border=0></CENTER>
                      {/if}

                  </TD>
  		{else}
			{if $CENTERMODULE eq "videogallery"}
   		       <TD WIDTH="82%" COLSPAN = 3 VALIGN="TOP" HEIGHT=271>
                  {include_php file="./modules/videogallery/videogallery.php" id=$ID idarticle=$IDARTICLE}
              </TD>
            {elseif $CENTERMODULE eq "articles"}
   		        <TD WIDTH="82%" COLSPAN = 3 VALIGN="TOP" HEIGHT=271>
                  {include_php file="./modules/articles/articles.php" id=$ID idarticle=$IDARTICLE}
              </TD>
            {elseif $CENTERMODULE eq "comments"}
              <TD WIDTH="82%" COLSPAN = 3 VALIGN="TOP" HEIGHT=271>
	              {include_php file="./modules/comments/comments.php" id=$ID reply=$REPLY prguser=$PRGUSER newcomment=$NEWCOMMENT}      
              </TD>
			{/if}
         {/if}
    </TR>

    {* ESTO ES PARA LA PARTE DE ABAJO *}
    <TR>
        <TD VALIGN="TOP" COLSPAN=4 class="solid-top">
        <br>
        <CENTER CLASS="menu">
		Cancuen es un portal que utiliza: <br>
		<img src="./images/PoweredByApache.jpg"	border="0" alt="Apache Logo">
		<img src="./images/PoweredByPHP.jpg"	border="0" alt="PHP Logo">
		<img src="./images/PoweredByMySQL.jpg"	border="0" alt="MySQL Logo">				
		<img src="./images/smarty_icon.gif"	border="0" alt="Smarty Logo"><br>
		Hospedado por: <br>
		<a href="http://developer.berlios.de" title="BerliOS Developer">
		<img src="http://developer.berlios.de/bslogo.php?group_id=2411" width="124px" height="32px" 
		border="0" alt="BerliOS Developer Logo"></a><br>
		Comentarios o consultas a: <a href="mailto:mariotpc@berlios.de">WebMaster</a>
		</CENTER>
        <br>
		<br>
		<br>
        </TD>
    </TR>
  </TABLE>
</BODY>
</HTML>