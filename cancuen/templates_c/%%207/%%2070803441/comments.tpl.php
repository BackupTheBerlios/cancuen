<?php /* Smarty version 2.5.0, created on 2004-10-27 15:23:10
         compiled from comments.tpl */ ?>
<?php $this->_load_plugins(array(
array('function', 'cycle', 'comments.tpl', 70, false),)); ?><link rel="top" title="Hasta arriba de los comentarios" />
<table height = 20% width="100%" class = "ventana" border=1>
<?php if (( ( $this->_tpl_vars['ID'] == "" && $this->_tpl_vars['REPLY'] == "" ) && $this->_tpl_vars['NEWCOMMENT'] == "" )): ?>
<?php $this->config_load("modules.conf", null, 'local'); ?>
    <TR align = "center">
        <TD align = "center" COLSPAN = "2" WIDTH="40%" VALIGN="TOP" align = "CENTER" class = "titulo"><font color = "WHITE">Comentario</font></TD>
        <TD align = "center" WIDTH="10%" VALIGN="TOP" align = "CENTER" class = "titulo"><font color = "WHITE">Respuestas</font></TD>
        <TD align = "center" WIDTH="20%" VALIGN="TOP" align = "CENTER" class = "titulo"><font color = "WHITE">Autor</font></TD>
        <TD align = "center" WIDTH="10%" VALIGN="TOP" align = "CENTER" class = "titulo"><font color = "WHITE">Visto</font></TD>
        <TD align = "center" WIDTH="20%" VALIGN="TOP" align = "CENTER" class = "titulo"><font color = "WHITE">Publicado</font></TD>
    </TR>

<?php if (isset($this->_sections['idx'])) unset($this->_sections['idx']);
$this->_sections['idx']['name'] = 'idx';
$this->_sections['idx']['loop'] = is_array($this->_tpl_vars['COMMENTS']) ? count($this->_tpl_vars['COMMENTS']) : max(0, (int)$this->_tpl_vars['COMMENTS']);
$this->_sections['idx']['show'] = true;
$this->_sections['idx']['max'] = $this->_sections['idx']['loop'];
$this->_sections['idx']['step'] = 1;
$this->_sections['idx']['start'] = $this->_sections['idx']['step'] > 0 ? 0 : $this->_sections['idx']['loop']-1;
if ($this->_sections['idx']['show']) {
    $this->_sections['idx']['total'] = $this->_sections['idx']['loop'];
    if ($this->_sections['idx']['total'] == 0)
        $this->_sections['idx']['show'] = false;
} else
    $this->_sections['idx']['total'] = 0;
if ($this->_sections['idx']['show']):

            for ($this->_sections['idx']['index'] = $this->_sections['idx']['start'], $this->_sections['idx']['iteration'] = 1;
                 $this->_sections['idx']['iteration'] <= $this->_sections['idx']['total'];
                 $this->_sections['idx']['index'] += $this->_sections['idx']['step'], $this->_sections['idx']['iteration']++):
$this->_sections['idx']['rownum'] = $this->_sections['idx']['iteration'];
$this->_sections['idx']['index_prev'] = $this->_sections['idx']['index'] - $this->_sections['idx']['step'];
$this->_sections['idx']['index_next'] = $this->_sections['idx']['index'] + $this->_sections['idx']['step'];
$this->_sections['idx']['first']      = ($this->_sections['idx']['iteration'] == 1);
$this->_sections['idx']['last']       = ($this->_sections['idx']['iteration'] == $this->_sections['idx']['total']);
?>
    <TR>
		<TD valign = "center" bgcolor = "#BEBEBE" align = "center" WIDTH="5%" VALIGN="TOP" align = "LEFT" class = "menuitem"><img src="./modules/modules/images/arrow0.gif" border=0></TD>
        <TD valign = "center" align = "center" WIDTH="35%" VALIGN="TOP" align = "LEFT" class = "menuitem"><a href=index.php?centermodule=comments&id=<?php echo $this->_tpl_vars['COMMENTS'][$this->_sections['idx']['index']]['id']; ?>
><?php echo $this->_tpl_vars['COMMENTS'][$this->_sections['idx']['index']]['title']; ?>
</a></TD>
        <TD valign = "center" bgcolor = "#BEBEBE" align = "center" WIDTH="10%" VALIGN="TOP" align = "LEFT" class = "menuitem"><?php echo $this->_tpl_vars['COMMENTS'][$this->_sections['idx']['index']]['replies']; ?>
</TD>
        <TD valign = "center" align = "center" WIDTH="20%" VALIGN="TOP" align = "LEFT" class = "menuitem"><a href=index.php?centermodule=user&login=0&mostrarinfo=1&module=comments&commentuser=<?php echo $this->_tpl_vars['COMMENTS'][$this->_sections['idx']['index']]['user']; ?>
><img src="<?php echo $this->_tpl_vars['COMMENTS'][$this->_sections['idx']['index']]['pathavatar']; ?>
" border=0><br><?php echo $this->_tpl_vars['COMMENTS'][$this->_sections['idx']['index']]['user']; ?>
</a></TD>
        <TD valign = "center" bgcolor = "#BEBEBE" align = "center" WIDTH="10%" VALIGN="TOP" align = "LEFT" class = "menuitem"><?php echo $this->_tpl_vars['COMMENTS'][$this->_sections['idx']['index']]['views']; ?>
</TD>
        <TD valign = "center" align = "center" WIDTH="20%" VALIGN="TOP" align = "LEFT" class = "menuitem"><?php echo $this->_tpl_vars['DATEPOSTED']; ?>
</TD>
    </TR>
<?php endfor; endif; ?>
<!-- for put new message -->
    <TR>
		<TD COLSPAN = "6" valign = "center" bgcolor = "#BEBEBE" align = "left" WIDTH="5%" VALIGN="TOP" align = "LEFT" class = "menuitem">
		<A HREF="index.php?centermodule=comments&newcomment=1"><img src="./modules/comments/images/newcomment.png" border=0> Agregar nuevo comentario ...</A></TD>
    </TR>
<!-- end for put new message -->	

<?php elseif (( ( $this->_tpl_vars['ID'] != "" && $this->_tpl_vars['REPLY'] == "" ) && $this->_tpl_vars['NEWCOMMENT'] == "" )): ?>
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
	<?php if (isset($this->_sections['idx'])) unset($this->_sections['idx']);
$this->_sections['idx']['name'] = 'idx';
$this->_sections['idx']['loop'] = is_array($this->_tpl_vars['COMMENTS']) ? count($this->_tpl_vars['COMMENTS']) : max(0, (int)$this->_tpl_vars['COMMENTS']);
$this->_sections['idx']['show'] = true;
$this->_sections['idx']['max'] = $this->_sections['idx']['loop'];
$this->_sections['idx']['step'] = 1;
$this->_sections['idx']['start'] = $this->_sections['idx']['step'] > 0 ? 0 : $this->_sections['idx']['loop']-1;
if ($this->_sections['idx']['show']) {
    $this->_sections['idx']['total'] = $this->_sections['idx']['loop'];
    if ($this->_sections['idx']['total'] == 0)
        $this->_sections['idx']['show'] = false;
} else
    $this->_sections['idx']['total'] = 0;
if ($this->_sections['idx']['show']):

            for ($this->_sections['idx']['index'] = $this->_sections['idx']['start'], $this->_sections['idx']['iteration'] = 1;
                 $this->_sections['idx']['iteration'] <= $this->_sections['idx']['total'];
                 $this->_sections['idx']['index'] += $this->_sections['idx']['step'], $this->_sections['idx']['iteration']++):
$this->_sections['idx']['rownum'] = $this->_sections['idx']['iteration'];
$this->_sections['idx']['index_prev'] = $this->_sections['idx']['index'] - $this->_sections['idx']['step'];
$this->_sections['idx']['index_next'] = $this->_sections['idx']['index'] + $this->_sections['idx']['step'];
$this->_sections['idx']['first']      = ($this->_sections['idx']['iteration'] == 1);
$this->_sections['idx']['last']       = ($this->_sections['idx']['iteration'] == $this->_sections['idx']['total']);
?>
		<TR>
		  <TD WIDTH="20%"><br><center><img src="<?php echo $this->_tpl_vars['COMMENTS'][$this->_sections['idx']['index']]['pathavatar']; ?>
"> <br> 
		  						  <?php echo $this->_tpl_vars['COMMENTS'][$this->_sections['idx']['index']]['user']; ?>
</center> <br></TD>
		  <TD VALIGN = "TOP" WIDTH="80%">Fecha de Publicaci&oacute;n <i> <?php echo $this->_tpl_vars['DATEPOSTED']; ?>
 </i> <br><br> <b><?php echo $this->_tpl_vars['COMMENTS'][$this->_sections['idx']['index']]['title']; ?>
</b> <br> <?php echo $this->_tpl_vars['COMMENTS'][$this->_sections['idx']['index']]['comment']; ?>
</TD>
		</TR>
		<TR>
		  <TD VALIGN = "CENTER" WIDTH="20%"> <A HREF="#TOP"> <img src="./modules/comments/images/top.png" CLASS="FLOAT-LEFT" BORDER=0> Arriba</A></TD>
		  <TD VALIGN = "TOP" WIDTH="80%"> 
		  <a href="print.php?centermodule=comments&id=<?php echo $this->_tpl_vars['COMMENTS'][$this->_sections['idx']['index']]['id']; ?>
&print=1"><img src="./modules/comments/images/printer.png" BORDER=0>Imprimir</a>
		  </TD>
		</TR>
	<?php endfor; endif; ?>
		<TR>
			<TD COLSPAN=2>
			<TABLE>
				<TR>
					<TD WIDTH = "80%" ALIGN = "RIGHT" VALIGN = "CENTER"> &nbsp; </TD>
					<TD WIDTH = "20%" ALIGN = "RIGHT" VALIGN = "CENTER"><A HREF="index.php?centermodule=comments&id=<?php echo $this->_tpl_vars['ID']; ?>
&reply=1"> <img src="./modules/comments/images/responder.png" CLASS="FLOAT-LEFT" BORDER="0"> RESPONDER </A></TD>
				</TR>
			</TABLE>
			</TD>
		</TR>

<!-- End of main comment -->				
	<?php if (isset($this->_sections['idx'])) unset($this->_sections['idx']);
$this->_sections['idx']['name'] = 'idx';
$this->_sections['idx']['loop'] = is_array($this->_tpl_vars['COMMENTSDETAIL']) ? count($this->_tpl_vars['COMMENTSDETAIL']) : max(0, (int)$this->_tpl_vars['COMMENTSDETAIL']);
$this->_sections['idx']['show'] = true;
$this->_sections['idx']['max'] = $this->_sections['idx']['loop'];
$this->_sections['idx']['step'] = 1;
$this->_sections['idx']['start'] = $this->_sections['idx']['step'] > 0 ? 0 : $this->_sections['idx']['loop']-1;
if ($this->_sections['idx']['show']) {
    $this->_sections['idx']['total'] = $this->_sections['idx']['loop'];
    if ($this->_sections['idx']['total'] == 0)
        $this->_sections['idx']['show'] = false;
} else
    $this->_sections['idx']['total'] = 0;
if ($this->_sections['idx']['show']):

            for ($this->_sections['idx']['index'] = $this->_sections['idx']['start'], $this->_sections['idx']['iteration'] = 1;
                 $this->_sections['idx']['iteration'] <= $this->_sections['idx']['total'];
                 $this->_sections['idx']['index'] += $this->_sections['idx']['step'], $this->_sections['idx']['iteration']++):
$this->_sections['idx']['rownum'] = $this->_sections['idx']['iteration'];
$this->_sections['idx']['index_prev'] = $this->_sections['idx']['index'] - $this->_sections['idx']['step'];
$this->_sections['idx']['index_next'] = $this->_sections['idx']['index'] + $this->_sections['idx']['step'];
$this->_sections['idx']['first']      = ($this->_sections['idx']['iteration'] == 1);
$this->_sections['idx']['last']       = ($this->_sections['idx']['iteration'] == $this->_sections['idx']['total']);
?>
	<?php echo $this->_plugins['function']['cycle'][0](array('values' => "1,2",'assign' => 'CONTADOR'), $this) ; ?>

	<?php if ($this->_tpl_vars['CONTADOR'] == 1): ?>
		<TR BGCOLOR="WHITE">
		  <TD WIDTH="20%"><br><center><img src="<?php echo $this->_tpl_vars['COMMENTSDETAIL'][$this->_sections['idx']['index']]['pathavatar']; ?>
"> <br> 
		  						  <?php echo $this->_tpl_vars['COMMENTSDETAIL'][$this->_sections['idx']['index']]['user']; ?>
</center> <br></TD>
		  <TD VALIGN = "TOP" WIDTH="80%">Fecha de Publicaci&oacute;n <i> <?php echo $this->_tpl_vars['DATEPOSTED']; ?>
 </i> <br><br> <b><?php echo $this->_tpl_vars['COMMENTSDETAIL'][$this->_sections['idx']['index']]['title']; ?>
</b> <br> <?php echo $this->_tpl_vars['COMMENTSDETAIL'][$this->_sections['idx']['index']]['comment']; ?>
</TD>
		</TR>
		<TR BGCOLOR="WHITE">
		  <TD VALIGN = "CENTER" WIDTH="20%"><A HREF="#TOP"><img src="./modules/comments/images/top.png" CLASS="FLOAT-LEFT" BORDER=0>  Arriba </A></TD>
		  <TD VALIGN = "TOP" WIDTH="80%"> 
		  <a href="print.php?centermodule=comments&id=<?php echo $this->_tpl_vars['COMMENTSDETAIL'][$this->_sections['idx']['index']]['id']; ?>
&print=1"><img src="./modules/comments/images/printer.png" BORDER=0>Imprimir</a>
		  </TD>
		</TR>
	<?php else: ?>
		<TR>
		  <TD WIDTH="20%"><br><center><img src="<?php echo $this->_tpl_vars['COMMENTSDETAIL'][$this->_sections['idx']['index']]['pathavatar']; ?>
"> <br> 
		  						  <?php echo $this->_tpl_vars['COMMENTSDETAIL'][$this->_sections['idx']['index']]['user']; ?>
</center> <br></TD>
		  <TD VALIGN = "TOP" WIDTH="80%">Fecha de Publicaci&oacute;n <i> <?php echo $this->_tpl_vars['DATEPOSTED']; ?>
 </i> <br><br> <b><?php echo $this->_tpl_vars['COMMENTSDETAIL'][$this->_sections['idx']['index']]['title']; ?>
</b> <br> <?php echo $this->_tpl_vars['COMMENTSDETAIL'][$this->_sections['idx']['index']]['comment']; ?>
</TD>
		</TR>
		<TR>
		  <TD VALIGN = "CENTER" WIDTH="20%"> <A HREF="#TOP"><img src="./modules/comments/images/top.png" CLASS="FLOAT-LEFT" BORDER=0>  Arriba </A> </TD>
		  <TD VALIGN = "TOP" WIDTH="80%"> 
		  <a href="print.php?centermodule=comments&id=<?php echo $this->_tpl_vars['COMMENTSDETAIL'][$this->_sections['idx']['index']]['id']; ?>
&print=1"><img src="./modules/comments/images/printer.png" BORDER=0>Imprimir</a>
		  </TD>
		</TR>
	<?php endif; ?>
	<?php endfor; endif; ?>
    </TABLE>
    </TD>
	</TR>
   </TABLE>
<!-- End comment's user detail -->
<?php elseif (( ( $this->_tpl_vars['ID'] == "" && $this->_tpl_vars['REPLY'] == "" ) && $this->_tpl_vars['NEWCOMMENT'] != "" )): ?>
		<TR>
		<TD align="center" COLSPAN = "2" CLASS="TITULO">
		 Ingresa tu comentario...::
		</TD>
		</TR>

		<TR>
		<TD align="center" COLSPAN = "2">
		<FORM ACTION="grabar.php" NAME="FRMCOMMENTUSER" METHOD="POST">
		<INPUT TYPE="HIDDEN" NAME="tabla" VALUE="comments">
		<input type="hidden" name="user" value=<?php echo $this->_tpl_vars['PRGUSER']; ?>
>
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
<?php else: ?>
    <?php if (isset($this->_sections['idx'])) unset($this->_sections['idx']);
$this->_sections['idx']['name'] = 'idx';
$this->_sections['idx']['loop'] = is_array($this->_tpl_vars['COMMENTS']) ? count($this->_tpl_vars['COMMENTS']) : max(0, (int)$this->_tpl_vars['COMMENTS']);
$this->_sections['idx']['show'] = true;
$this->_sections['idx']['max'] = $this->_sections['idx']['loop'];
$this->_sections['idx']['step'] = 1;
$this->_sections['idx']['start'] = $this->_sections['idx']['step'] > 0 ? 0 : $this->_sections['idx']['loop']-1;
if ($this->_sections['idx']['show']) {
    $this->_sections['idx']['total'] = $this->_sections['idx']['loop'];
    if ($this->_sections['idx']['total'] == 0)
        $this->_sections['idx']['show'] = false;
} else
    $this->_sections['idx']['total'] = 0;
if ($this->_sections['idx']['show']):

            for ($this->_sections['idx']['index'] = $this->_sections['idx']['start'], $this->_sections['idx']['iteration'] = 1;
                 $this->_sections['idx']['iteration'] <= $this->_sections['idx']['total'];
                 $this->_sections['idx']['index'] += $this->_sections['idx']['step'], $this->_sections['idx']['iteration']++):
$this->_sections['idx']['rownum'] = $this->_sections['idx']['iteration'];
$this->_sections['idx']['index_prev'] = $this->_sections['idx']['index'] - $this->_sections['idx']['step'];
$this->_sections['idx']['index_next'] = $this->_sections['idx']['index'] + $this->_sections['idx']['step'];
$this->_sections['idx']['first']      = ($this->_sections['idx']['iteration'] == 1);
$this->_sections['idx']['last']       = ($this->_sections['idx']['iteration'] == $this->_sections['idx']['total']);
?>
		<TR>
		<TD align="center" COLSPAN = "2" CLASS="TITULO">
		 RESPUESTA AL COMENTARIO...:: <b><i><?php echo $this->_tpl_vars['COMMENTS'][$this->_sections['idx']['index']]['title']; ?>
</i></b>
		</TD>
		</TR>

		<TR>
		<TD align="center" COLSPAN = "2">
		<FORM ACTION="grabar.php" NAME="FRMCOMMENTUSER" METHOD="POST">
		<INPUT TYPE="HIDDEN" NAME="tabla" VALUE="comments">
		<input type="hidden" name="user" value=<?php echo $this->_tpl_vars['PRGUSER']; ?>
>
		<input type="hidden" name="title" value='re: <?php echo $this->_tpl_vars['COMMENTS'][$this->_sections['idx']['index']]['title']; ?>
'
		<textarea name="comment" rows="10" cols="35" wrap="virtual" style="width:450px"</textarea>
		<input type="hidden" name="dateposted" value=NOW()>
		<input type="hidden" name="replies" value=0>
		<input type="hidden" name="views" value=0>
		<input type="hidden" name="show" value=0>
		<input type="hidden" name="idparent" value=<?php echo $this->_tpl_vars['ID']; ?>
>	<br>			
		<input type = "SUBMIT" NAME = "submit" VALUE= "Enviar Respuesta"><br>
		</FORM>
		<FONT COLOR="RED">Nota::</FONT>
		<FONT COLOR="GREEN">Tu comentario ser&aacute; revisado antes de publicarse</FONT>
		</TD>
		</TR>
	<?php endfor; endif; ?>
<?php endif; ?>
</TABLE>