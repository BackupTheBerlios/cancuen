<?php /* Smarty version 2.5.0, created on 2004-10-27 15:22:52
         compiled from user.tpl */ ?>
<?php echo '
<script language="javascript">
function VerificaEmail(form){
	email=form.Email.value;
	if(email.indexOf(\'@\',0)==-1 || email.indexOf(\';\',0)!=-1
	|| email.indexOf(\' \',0)!=-1 || email.indexOf(\'/\',0)!=-1
	|| email.indexOf(\';\',0)!=-1 || emial.indexOf(\'<\',0)!=-1
	|| email.indexOf(\'>\',0)!=-1 || email.indexOf(\'*\',0)!=-1
	|| email.indexOf(\'|\',0)!=-1 || email.indexOf(\'`\',0)!=-1
	|| email.indexOf(\'&\',0)!=-1 || email.indexOf(\'$\',0)!=-1
	|| email.indexOf(\'!\',0)!=-1 || email.indexOf(\'"\',0)!=-1
	|| email.indexOf(\':\',0)!=-1) {
		alert("Dirección de E-Mail inválida !!!, por favor verifique antes de grabar");
	}
}
</script>
'; ?>

<?php if (( ( $this->_tpl_vars['LOGIN'] == 1 ) && ( $this->_tpl_vars['PRGUSER'] == "" ) && ( $this->_tpl_vars['COMMENTUSER'] == "" ) )): ?>
    <TABLE WIDTH = 100% class = "ventana">
    <TR>
    <TD bgcolor=#0000000 class="titulo" align="CENTER">
    <img src = "./iconos/keyring-small.gif" class="float-right"> Usuarios
    </TD>
    </TR>
    <TR>
    <TD>
       Usuario nuevo ???... <a href="./index.php?centermodule=user&login=0">Registrate</a>
    </TD>
    </TR>
    
    <TR>
    <TD class="menuitem">

    <form ACTION="index.php" METHOD = GET>
    Usuario:<br>
    <INPUT TYPE="TEXT" NAME=prguser><br>
    Clave:<br>
    <INPUT TYPE="PASSWORD" NAME=prgpassword><br>
    <INPUT TYPE = "HIDDEN" NAME="login" VALUE = "1">
    <INPUT TYPE="HIDDEN" NAME="centermodule" value="user">
    <INPUT TYPE = "SUBMIT" VALUE = "Login">
    </form>

    </TD>
    <TR>
    </TABLE>
<?php elseif (( ( $this->_tpl_vars['LOGIN'] == 0 ) && ( $this->_tpl_vars['PRGUSER'] == "" ) && ( $this->_tpl_vars['COMMENTUSER'] == "" ) )): ?>
<CENTER>
<FORM ACTION="grabar.php" NAME="FRMUSUARIO" METHOD=POST>
<!--<a href="javascript:openwindow()">Select AVATAR</a>-->
<INPUT TYPE="HIDDEN" NAME="tabla" VALUE="user">
<TABLE class ="ventana">
  <TR>

  <TR>
	<TD colspan = 2 class="titulo" align="CENTER">
    <img src = "./iconos/keyring-small.gif" class="float-left"> Formulario para datos del Usuario
    </TD>
	</TR>

   <TR>
   <TD colspan = 2>
   <i>Los campos que tienen <font color="GREEN"><b>*</b></font>
   son obligatorios </i><br><br>
   </TD>
   </TR>

  <TR>
  <TD>
   Nombres:<font color="GREEN"><b> *</b></font>
  </TD>
  <TD>
  <INPUT TYPE=TEXT NAME=nombre>
  </TD>
  </TR>

  <TR>
  <TD>
   Apellidos:<font color="GREEN"><b> *</b></font>
  </TD>
  <TD>
  <INPUT TYPE=TEXT NAME=apellido>
  </TD>
  </TR>

  <TR>
  <TD>
   Dirección:
  </TD>
  <TD>
  <INPUT TYPE=TEXT NAME=direccion>
  </TD>
  </TR>

  <TR>
  <TD>
   Teléfono:
  </TD>
  <TD>
  <INPUT TYPE=TEXT NAME=telefono>
  </TD>
  </TR>

  <TR>
  <TD>
   Fecha de nacimiento::<font color="GREEN"><b> *</b></font>
  </TD>
  <TD>
	<SELECT NAME="promocion">
	<OPTION SELECTED VALUE=""></OPTION>
	<OPTION>1975</OPTION>
	<OPTION>1976</OPTION>
	<OPTION>1977</OPTION>
	<OPTION>1978</OPTION>
	<OPTION>1979</OPTION>
	<OPTION>1980</OPTION>
	<OPTION>1981</OPTION>
	<OPTION>1982</OPTION>
	<OPTION>1983</OPTION>
	<OPTION>1984</OPTION>
	<OPTION>1985</OPTION>
	<OPTION>1986</OPTION>
	<OPTION>1987</OPTION>
	<OPTION>1988</OPTION>
	<OPTION>1989</OPTION>
	<OPTION>1990</OPTION>
	<OPTION>1991</OPTION>
	<OPTION>1992</OPTION>
	<OPTION>1993</OPTION>
	<OPTION>1994</OPTION>
	<OPTION>1995</OPTION>
	<OPTION>1996</OPTION>
	<OPTION>1997</OPTION>
	<OPTION>1998</OPTION>
	<OPTION>1999</OPTION>
	<OPTION>2000</OPTION>
	<OPTION>cursando</OPTION>
	</SELECT>
  </TD>
  </TR>

  <TR>
  <TD>
   Ocupación:
  </TD>
  <TD>
	<SELECT NAME="ocupacion">
	<OPTION SELECTED VALUE=""></OPTION>
	<OPTION>Secretaria</OPTION>
	<OPTION>Perito Contador</OPTION>
	<OPTION>Maestra</OPTION>
	<OPTION>Ingeniero(a)</OPTION>
	<OPTION>Doctor(a)</OPTION>
	<OPTION>Gerente</OPTION>
	<OPTION>Jefe</OPTION>
	<OPTION>Encargado</OPTION>
	<OPTION>Universitario</OPTION>
	<OPTION>Consultor(a)</OPTION>
	<OPTION>Supervisor(a)</OPTION>
	<OPTION>Asesor</OPTION>
	<OPTION>Otro</OPTION>
    <OPTION>Desempleado(a)</OPTION>
    </SELECT>
  </TD>
  </TR>

  <TR>
  <TD>
   Tu Tema de escritorio:
  </TD>
  <TD>
  	<SELECT NAME="tema"> 
	<OPTION>cancuen</OPTION>
	<OPTION>paoshblue</OPTION>
	</SELECT>
  </TD>
  </TR>

  <TR>
  <TD>
  <BR>
   EMail:<font color="GREEN"><b> *</b></font>
  </TD>
  <TD>
  <BR>
  <INPUT TYPE=TEXT NAME=Email OnBlur="VerificaEmail(this.form)">
  </TD>
  </TR>

  <TR>
  <TD>
   http://
  </TD>
  <TD>
  <INPUT TYPE=TEXT NAME=HTTP>
  </TD>
  </TR>

  <TR>
  <TD>
  <BR>
   Usuario:<font color="GREEN"><b> *</b></font>
  </TD>
  <TD>
   <BR>
  <INPUT TYPE=TEXT NAME=prguser>
  </TD>
  </TR>

  <TR>
  <TD>
   Clave:<font color="GREEN"><b> *</b></font>
  </TD>
  <TD>
  <INPUT TYPE=PASSWORD NAME=prgpassword>
  </TD>
  </TR>
  
  <TR>
  <TD colspan = 2>
  <br>
   <font color="RED">Importante :: </font> Esta información es confidencial y de uso exclusivo para el sitio Cancuen, Gracias por tu informaci&oacute;n.<br><br>
  </TR>

  </TR>
</TABLE>
<INPUT TYPE="HIDDEN" NAME="pathavatar" VALUE="./modules/user/images/avatar/kuzer.png">
<INPUT TYPE="SUBMIT" NAME=SUBMIT VALUE="ENVIAR">
</FORM>
</CENTER>
<?php else: ?>
    <TABLE WIDTH = 100%>
   <TR>
    <TD class="menu">
       <table width=100% class="ventana">
	   <tr>
	   
	   <?php if ($this->_tpl_vars['COMMENTUSER'] != ""): ?>
	   		<td class="titulo">Datos del usuario</td>
	   <?php else: ?>
	   		<td class="titulo">Bienvenido</td>
	   <?php endif; ?>
	   
	   </tr>
	   <tr>
	   <td>
	   <?php if ($this->_tpl_vars['COMMENTUSER'] == ""): ?>
		   <center><a href="./index.php?centermodule=user&login=0&mostrarinfo=1">
		   <img src=<?php echo $this->_tpl_vars['USERDATA'][0]['pathavatar']; ?>
 border=0>
		   <br> <?php echo $this->_tpl_vars['USERDATA'][0]['user']; ?>
</a></center>
	   <?php else: ?>
		   <center><img src=<?php echo $this->_tpl_vars['USERDATA'][0]['pathavatar']; ?>
 border=0>
		   <br> <?php echo $this->_tpl_vars['USERDATA'][0]['user']; ?>
</center>
	   <?php endif; ?>
	   </td>
	   </tr>
	   <tr>
	   <td>
       <?php if (( $this->_tpl_vars['MOSTRARINFO'] == 1 ) && ( $this->_tpl_vars['COMMENTUSER'] == "" )): ?>
        Cambia tu Logo
	    <a href="index.php?centermodule=user&cavatar=1">Aqui</a>
	   <?php endif; ?>
 	   
	    </td>
 	    </tr>
		<TR>
    	<TD>
       	<?php if (( $this->_tpl_vars['MOSTRARINFO'] == 1 ) && ( $this->_tpl_vars['COMMENTUSER'] == "" )): ?>
		Deseo <a href="./index.php?logout=1">
	   	<FONT COLOR=#FFAAAA> Salir </FONT></a>
		<?php endif; ?>
		
    	</TD>
    	</TR>
	   	</table>
        <?php if ($this->_tpl_vars['MOSTRARINFO'] == 1): ?>
           <?php if (isset($this->_sections['ID'])) unset($this->_sections['ID']);
$this->_sections['ID']['name'] = 'ID';
$this->_sections['ID']['loop'] = is_array($this->_tpl_vars['USERDATA']) ? count($this->_tpl_vars['USERDATA']) : max(0, (int)$this->_tpl_vars['USERDATA']);
$this->_sections['ID']['show'] = true;
$this->_sections['ID']['max'] = $this->_sections['ID']['loop'];
$this->_sections['ID']['step'] = 1;
$this->_sections['ID']['start'] = $this->_sections['ID']['step'] > 0 ? 0 : $this->_sections['ID']['loop']-1;
if ($this->_sections['ID']['show']) {
    $this->_sections['ID']['total'] = $this->_sections['ID']['loop'];
    if ($this->_sections['ID']['total'] == 0)
        $this->_sections['ID']['show'] = false;
} else
    $this->_sections['ID']['total'] = 0;
if ($this->_sections['ID']['show']):

            for ($this->_sections['ID']['index'] = $this->_sections['ID']['start'], $this->_sections['ID']['iteration'] = 1;
                 $this->_sections['ID']['iteration'] <= $this->_sections['ID']['total'];
                 $this->_sections['ID']['index'] += $this->_sections['ID']['step'], $this->_sections['ID']['iteration']++):
$this->_sections['ID']['rownum'] = $this->_sections['ID']['iteration'];
$this->_sections['ID']['index_prev'] = $this->_sections['ID']['index'] - $this->_sections['ID']['step'];
$this->_sections['ID']['index_next'] = $this->_sections['ID']['index'] + $this->_sections['ID']['step'];
$this->_sections['ID']['first']      = ($this->_sections['ID']['iteration'] == 1);
$this->_sections['ID']['last']       = ($this->_sections['ID']['iteration'] == $this->_sections['ID']['total']);
?>
               <TABLE WIDTH = 100% class = "menu">
                <TR>
                <TD>ID:</TD>
                <TD><?php echo $this->_tpl_vars['USERDATA'][$this->_sections['ID']['index']]['iduser']; ?>
 </TD>
                </TR>
                <TR>
                <TD>Nombre:</TD>
                <TD><?php echo $this->_tpl_vars['USERDATA'][$this->_sections['ID']['index']]['nombre']; ?>
 </TD>
                </TR>
                <TR>
                <TD>Apellido:</TD>
                <TD><?php echo $this->_tpl_vars['USERDATA'][$this->_sections['ID']['index']]['apellido']; ?>
 </TD>
                </TR>
                <TR>
                <TD>Dirección:</TD>
                <TD><?php echo $this->_tpl_vars['USERDATA'][$this->_sections['ID']['index']]['direccion']; ?>
 </TD>
                </TR>
                <TR>
                <TD>Teléfono:</TD>
                <TD><?php echo $this->_tpl_vars['USERDATA'][$this->_sections['ID']['index']]['telefono']; ?>
 </TD>
                </TR>
                <TR>
                <TD>Fecha de nacimiento:</TD>
                <TD><?php echo $this->_tpl_vars['USERDATA'][$this->_sections['ID']['index']]['promocion']; ?>
 </TD>
                </TR>
				<TR>
                <TD>tema:</TD>
                <TD><?php echo $this->_tpl_vars['USERDATA'][$this->_sections['ID']['index']]['tema']; ?>
 </TD>
                </TR>
				<TR>
                <TD>login:</TD>
                <TD><?php echo $this->_tpl_vars['USERDATA'][$this->_sections['ID']['index']]['user']; ?>
 </TD>
                </TR>
                <TR>
                <TD>E-Mail:</TD>
                <TD><A HREF='mailto:<?php echo $this->_tpl_vars['USERDATA'][$this->_sections['ID']['index']]['email']; ?>
'><?php echo $this->_tpl_vars['USERDATA'][$this->_sections['ID']['index']]['email']; ?>
</A></TD>
                </TR>
                <TR>
                <TD>http://</TD>
                <TD><A HREF=http://<?php echo $this->_tpl_vars['USERDATA'][$this->_sections['ID']['index']]['url']; ?>
><?php echo $this->_tpl_vars['USERDATA'][$this->_sections['ID']['index']]['url']; ?>
</A> </TD>
                </TR>
                </TABLE>
           <?php endfor; endif; ?>
       <?php endif; ?>

    </TD>
    </TR>
    
    </TABLE>

<?php endif; ?>