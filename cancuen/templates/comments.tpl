<link rel="top" title="Hasta arriba de los comentarios" />
<table height = 20% width="100%" class = "ventana" border=1>
{if (($ID eq "" and $REPLY eq "") and $NEWCOMMENT eq "")}
{config_load file="modules.conf"}
    <TR align = "center">
        <TD align = "center" COLSPAN = "2" WIDTH="40%" VALIGN="TOP" align = "CENTER" class = "titulo"><font color = "WHITE">Comentario</font></TD>
        <TD align = "center" WIDTH="10%" VALIGN="TOP" align = "CENTER" class = "titulo"><font color = "WHITE">Respuestas</font></TD>
        <TD align = "center" WIDTH="20%" VALIGN="TOP" align = "CENTER" class = "titulo"><font color = "WHITE">Autor</font></TD>
        <TD align = "center" WIDTH="10%" VALIGN="TOP" align = "CENTER" class = "titulo"><font color = "WHITE">Visto</font></TD>
        <TD align = "center" WIDTH="20%" VALIGN="TOP" align = "CENTER" class = "titulo"><font color = "WHITE">Publicado</font></TD>
    </TR>

{section name=idx loop="$COMMENTS"}
    <TR>
		<TD valign = "center" bgcolor = "#BEBEBE" align = "center" WIDTH="5%" VALIGN="TOP" align = "LEFT" class = "menuitem"><img src="./modules/modules/images/arrow0.gif" border=0></TD>
        <TD valign = "center" align = "center" WIDTH="35%" VALIGN="TOP" align = "LEFT" class = "menuitem"><a href=index.php?centermodule=comments&id={$COMMENTS[idx].id}>{$COMMENTS[idx].title}</a></TD>
        <TD valign = "center" bgcolor = "#BEBEBE" align = "center" WIDTH="10%" VALIGN="TOP" align = "LEFT" class = "menuitem">{$COMMENTS[idx].replies}</TD>
        <TD valign = "center" align = "center" WIDTH="20%" VALIGN="TOP" align = "LEFT" class = "menuitem"><a href=index.php?centermodule=user&login=0&mostrarinfo=1&module=comments&commentuser={$COMMENTS[idx].user}><img src="{$COMMENTS[idx].pathavatar}" border=0><br>{$COMMENTS[idx].user}</a></TD>
        <TD valign = "center" bgcolor = "#BEBEBE" align = "center" WIDTH="10%" VALIGN="TOP" align = "LEFT" class = "menuitem">{$COMMENTS[idx].views}</TD>
        <TD valign = "center" align = "center" WIDTH="20%" VALIGN="TOP" align = "LEFT" class = "menuitem">{$DATEPOSTED}</TD>
    </TR>
{/section}
<!-- for put new message -->
    <TR>
		<TD COLSPAN = "6" valign = "center" bgcolor = "#BEBEBE" align = "left" WIDTH="5%" VALIGN="TOP" align = "LEFT" class = "menuitem">
		<A HREF="index.php?centermodule=comments&newcomment=1"><img src="./modules/comments/images/newcomment.png" border=0> Agregar nuevo comentario ...</A></TD>
    </TR>
<!-- end for put new message -->	

{elseif (($ID neq "" and $REPLY eq "") and $NEWCOMMENT eq "")}
<!-- Comment's user detail -->
	<TABLE WIDTH="100%" BORDER="0" CELLSPACING="10" CELLPADDING="0" CLASS = "ventana">
	<TR>
	  <TD WIDTH="100%" CLASS = "titulo">Cancuen :: Detalle del comentario</TD>
	</TR>
	<TR>
	<TD>
	   <TABLE WIDTH="100%" BORDER=1>
		<TR>
		  <TD CLASS = "titulo" WIDTH="20%">AUTOR</TD>
		  <TD CLASS = "titulo" WIDTH="80%">COMENTARIO</TD>
		</TR>
<!-- For the main comment -->		
	{section name=idx loop="$COMMENTS"}
		<TR>
		  <TD WIDTH="20%"><br><center><img src="{$COMMENTS[idx].pathavatar}"> <br> 
		  						  {$COMMENTS[idx].user}</center> <br></TD>
		  <TD VALIGN = "TOP" WIDTH="80%">Fecha de Publicaci&oacute;n <i> {$DATEPOSTED} </i> <br><br> <b>{$COMMENTS[idx].title}</b> <br> {$COMMENTS[idx].comment}</TD>
		</TR>
		<TR>
		  <TD VALIGN = "CENTER" WIDTH="20%"> <A HREF="#TOP"> <img src="./modules/comments/images/top.png" CLASS="FLOAT-LEFT" BORDER=0> Arriba</A></TD>
		  <TD VALIGN = "TOP" WIDTH="80%"> 
		  <a href="print.php?centermodule=comments&id={$COMMENTS[idx].id}&print=1"><img src="./modules/comments/images/printer.png" BORDER=0>Imprimir</a>
		  </TD>
		</TR>
	{/section}
		<TR>
			<TD COLSPAN=2>
			<TABLE>
				<TR>
					<TD WIDTH = "80%" ALIGN = "RIGHT" VALIGN = "CENTER"> &nbsp; </TD>
					<TD WIDTH = "20%" ALIGN = "RIGHT" VALIGN = "CENTER"><A HREF="index.php?centermodule=comments&id={$ID}&reply=1"> <img src="./modules/comments/images/responder.png" CLASS="FLOAT-LEFT" BORDER="0"> RESPONDER </A></TD>
				</TR>
			</TABLE>
			</TD>
		</TR>

<!-- End of main comment -->				
	{section name=idx loop="$COMMENTSDETAIL"}
	{cycle values="1,2" assign=CONTADOR}
	{if $CONTADOR eq 1}
		<TR BGCOLOR="WHITE">
		  <TD WIDTH="20%"><br><center><img src="{$COMMENTSDETAIL[idx].pathavatar}"> <br> 
		  						  {$COMMENTSDETAIL[idx].user}</center> <br></TD>
		  <TD VALIGN = "TOP" WIDTH="80%">Fecha de Publicaci&oacute;n <i> {$DATEPOSTED} </i> <br><br> <b>{$COMMENTSDETAIL[idx].title}</b> <br> {$COMMENTSDETAIL[idx].comment}</TD>
		</TR>
		<TR BGCOLOR="WHITE">
		  <TD VALIGN = "CENTER" WIDTH="20%"><A HREF="#TOP"><img src="./modules/comments/images/top.png" CLASS="FLOAT-LEFT" BORDER=0>  Arriba </A></TD>
		  <TD VALIGN = "TOP" WIDTH="80%"> 
		  <a href="print.php?centermodule=comments&id={$COMMENTSDETAIL[idx].id}&print=1"><img src="./modules/comments/images/printer.png" BORDER=0>Imprimir</a>
		  </TD>
		</TR>
	{else}
		<TR>
		  <TD WIDTH="20%"><br><center><img src="{$COMMENTSDETAIL[idx].pathavatar}"> <br> 
		  						  {$COMMENTSDETAIL[idx].user}</center> <br></TD>
		  <TD VALIGN = "TOP" WIDTH="80%">Fecha de Publicaci&oacute;n <i> {$DATEPOSTED} </i> <br><br> <b>{$COMMENTSDETAIL[idx].title}</b> <br> {$COMMENTSDETAIL[idx].comment}</TD>
		</TR>
		<TR>
		  <TD VALIGN = "CENTER" WIDTH="20%"> <A HREF="#TOP"><img src="./modules/comments/images/top.png" CLASS="FLOAT-LEFT" BORDER=0>  Arriba </A> </TD>
		  <TD VALIGN = "TOP" WIDTH="80%"> 
		  <a href="print.php?centermodule=comments&id={$COMMENTSDETAIL[idx].id}&print=1"><img src="./modules/comments/images/printer.png" BORDER=0>Imprimir</a>
		  </TD>
		</TR>
	{/if}
	{/section}
    </TABLE>
    </TD>
	</TR>
   </TABLE>
<!-- End comment's user detail -->
{elseif (($ID eq "" and $REPLY eq "") and $NEWCOMMENT neq "")}
		<TR>
		<TD align="center" COLSPAN = "2" CLASS="TITULO">
		 Ingresa tu comentario...::
		</TD>
		</TR>

		<TR>
		<TD align="center" COLSPAN = "2">
		<FORM ACTION="grabar.php" NAME="FRMCOMMENTUSER" METHOD="POST">
		<INPUT TYPE="HIDDEN" NAME="tabla" VALUE="comments">
		<input type="hidden" name="user" value={$PRGUSER}>
		T&iacute;tulo  <input type="text" name="title" MAXLENGTH="100" ><br>
		<textarea name="comment" rows="10" cols="35" wrap="virtual" style="width:450px"</textarea>
		<input type="hidden" name="dateposted" value=NOW()>
		<input type="hidden" name="replies" value=0>
		<input type="hidden" name="views" value=0>
		<input type="hidden" name="show" value=0>
		<input type="hidden" name="idparent" value=0>	<br>			
		<input type = "SUBMIT" NAME = "submit" VALUE= "Enviar Respuesta"><br>
		</FORM>
		<FONT COLOR="RED">Nota::</FONT>
		<FONT COLOR="GREEN">Tu comentario ser&aacute; revisado antes de publicarse</FONT>
		</TD>
		</TR>
{else}
    {section name=idx loop="$COMMENTS"}
		<TR>
		<TD align="center" COLSPAN = "2" CLASS="TITULO">
		 RESPUESTA AL COMENTARIO...:: <b><i>{$COMMENTS[idx].title}</i></b>
		</TD>
		</TR>

		<TR>
		<TD align="center" COLSPAN = "2">
		<FORM ACTION="grabar.php" NAME="FRMCOMMENTUSER" METHOD="POST">
		<INPUT TYPE="HIDDEN" NAME="tabla" VALUE="comments">
		<input type="hidden" name="user" value={$PRGUSER}>
		<input type="hidden" name="title" value='re: {$COMMENTS[idx].title}'
		<textarea name="comment" rows="10" cols="35" wrap="virtual" style="width:450px"</textarea>
		<input type="hidden" name="dateposted" value=NOW()>
		<input type="hidden" name="replies" value=0>
		<input type="hidden" name="views" value=0>
		<input type="hidden" name="show" value=0>
		<input type="hidden" name="idparent" value={$ID}>	<br>			
		<input type = "SUBMIT" NAME = "submit" VALUE= "Enviar Respuesta"><br>
		</FORM>
		<FONT COLOR="RED">Nota::</FONT>
		<FONT COLOR="GREEN">Tu comentario ser&aacute; revisado antes de publicarse</FONT>
		</TD>
		</TR>
	{/section}
{/if}
</TABLE>
