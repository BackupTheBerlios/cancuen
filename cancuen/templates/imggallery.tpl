<table height = 20% width="100%" class = "ventana">
{config_load file="imggallery.conf"}
    <TR>
        <TD colspan=3 WIDTH="100%" class = "titulo">{#title#}</TD>
    </TR>
{if $ID eq ""}
          <TR>
      {section name=idx loop="$IMAGES"}
      {cycle values="1,2,3" assign=CONTADOR} {* Para las columnas de la tabla*}
      {if $CONTADOR neq 3}
              <TD WIDTH="33%" VALIGN="TOP" align = "LEFT" class = "menuitem">
              <a href=index.php?centermodule=imggallery&cat={$CAT}&id={$IMAGES[idx].id}>
              <center><img src="./modules/imggallery/images/{$IMAGES[idx].name}/mini-{$IMAGES[idx].pathimage}" border=0>
              <br>{$IMAGES[idx].description}</a><center>
              </TD>
      {else}
              <TD WIDTH="33%" VALIGN="TOP" align = "LEFT" class = "menuitem">
              <a href=index.php?centermodule=imggallery&cat={$CAT}&id={$IMAGES[idx].id}>
              <center><img src="./modules/imggallery/images/{$IMAGES[idx].name}/mini-{$IMAGES[idx].pathimage}" border=0>
              <br>{$IMAGES[idx].description}</a><center>
              </TD>
              </TR><TR>
      {/if}
      {/section}
          </TR colspan=2>
{else}
  <TR>
    <TD align = "center">
       <img src="./modules/imggallery/images/{$IMAGES[0].name}/{$IMAGES[0].pathimage}" border=0><br>
       <font color="red">Nota:</font> Para poder hacer comentarios debes ser un usuario registrado !...<br>
       <font color="green"><i>los comentarios pasan primero por revisión y luego son publicados</i></font>
		 <br>
		 {section name=idx loop="$COMMENTS"}
		 {if $COMMENTS[idx].show != 0}
         <br>
         <b>{$COMMENTS[idx].user}</b><br>
         {$COMMENTS[idx].comment}
         <br>
		 {/if}
         {/section}
		<FORM ACTION="grabar.php" NAME="FRMCOMMENT" METHOD="POST">
		<INPUT TYPE="HIDDEN" NAME="tabla" VALUE="imgcomments">
	    <input type="hidden" name="idimg" value={$ID}>
	    <input type="hidden" name="user" value={$PRGUSER}>
		<input type="text" name="comentario" size="50" maxlength=300>
		<input type="hidden" name="show" value=0>
		<input type="hidden" name="cat" value={$CAT}>
		<br>
		<input type="submit" name="submit" value="Comenta esta imagen">
		</form>
    </TD>
  </TR>
{/if}

</TABLE>

