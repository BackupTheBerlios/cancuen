<?php /* Smarty version 2.5.0, created on 2004-10-27 15:22:58
         compiled from imggallery.tpl */ ?>
<?php $this->_load_plugins(array(
array('function', 'cycle', 'imggallery.tpl', 9, false),)); ?><table height = 20% width="100%" class = "ventana">
<?php $this->config_load("imggallery.conf", null, 'local'); ?>
    <TR>
        <TD colspan=3 WIDTH="100%" class = "titulo"><?php echo $this->_config[0]['vars']['title']; ?>
</TD>
    </TR>
<?php if ($this->_tpl_vars['ID'] == ""): ?>
          <TR>
      <?php if (isset($this->_sections['idx'])) unset($this->_sections['idx']);
$this->_sections['idx']['name'] = 'idx';
$this->_sections['idx']['loop'] = is_array($this->_tpl_vars['IMAGES']) ? count($this->_tpl_vars['IMAGES']) : max(0, (int)$this->_tpl_vars['IMAGES']);
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
      <?php echo $this->_plugins['function']['cycle'][0](array('values' => "1,2,3",'assign' => 'CONTADOR'), $this) ; ?>
 
      <?php if ($this->_tpl_vars['CONTADOR'] != 3): ?>
              <TD WIDTH="33%" VALIGN="TOP" align = "LEFT" class = "menuitem">
              <a href=index.php?centermodule=imggallery&cat=<?php echo $this->_tpl_vars['CAT']; ?>
&id=<?php echo $this->_tpl_vars['IMAGES'][$this->_sections['idx']['index']]['id']; ?>
>
              <center><img src="./modules/imggallery/images/<?php echo $this->_tpl_vars['IMAGES'][$this->_sections['idx']['index']]['name']; ?>
/mini-<?php echo $this->_tpl_vars['IMAGES'][$this->_sections['idx']['index']]['pathimage']; ?>
" border=0>
              <br><?php echo $this->_tpl_vars['IMAGES'][$this->_sections['idx']['index']]['description']; ?>
</a><center>
              </TD>
      <?php else: ?>
              <TD WIDTH="33%" VALIGN="TOP" align = "LEFT" class = "menuitem">
              <a href=index.php?centermodule=imggallery&cat=<?php echo $this->_tpl_vars['CAT']; ?>
&id=<?php echo $this->_tpl_vars['IMAGES'][$this->_sections['idx']['index']]['id']; ?>
>
              <center><img src="./modules/imggallery/images/<?php echo $this->_tpl_vars['IMAGES'][$this->_sections['idx']['index']]['name']; ?>
/mini-<?php echo $this->_tpl_vars['IMAGES'][$this->_sections['idx']['index']]['pathimage']; ?>
" border=0>
              <br><?php echo $this->_tpl_vars['IMAGES'][$this->_sections['idx']['index']]['description']; ?>
</a><center>
              </TD>
              </TR><TR>
      <?php endif; ?>
      <?php endfor; endif; ?>
          </TR colspan=2>
<?php else: ?>
  <TR>
    <TD align = "center">
       <img src="./modules/imggallery/images/<?php echo $this->_tpl_vars['IMAGES'][0]['name']; ?>
/<?php echo $this->_tpl_vars['IMAGES'][0]['pathimage']; ?>
" border=0><br>
       <font color="red">Nota:</font> Para poder hacer comentarios debes ser un usuario registrado !...<br>
       <font color="green"><i>los comentarios pasan primero por revisión y luego son publicados</i></font>
		 <br>
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
		 <?php if ($this->_tpl_vars['COMMENTS'][$this->_sections['idx']['index']]['show'] != 0): ?>
         <br>
         <b><?php echo $this->_tpl_vars['COMMENTS'][$this->_sections['idx']['index']]['user']; ?>
</b><br>
         <?php echo $this->_tpl_vars['COMMENTS'][$this->_sections['idx']['index']]['comment']; ?>

         <br>
		 <?php endif; ?>
         <?php endfor; endif; ?>
		<FORM ACTION="grabar.php" NAME="FRMCOMMENT" METHOD="POST">
		<INPUT TYPE="HIDDEN" NAME="tabla" VALUE="imgcomments">
	    <input type="hidden" name="idimg" value=<?php echo $this->_tpl_vars['ID']; ?>
>
	    <input type="hidden" name="user" value=<?php echo $this->_tpl_vars['PRGUSER']; ?>
>
		<input type="text" name="comentario" size="50" maxlength=300>
		<input type="hidden" name="show" value=0>
		<input type="hidden" name="cat" value=<?php echo $this->_tpl_vars['CAT']; ?>
>
		<br>
		<input type="submit" name="submit" value="Comenta esta imagen">
		</form>
    </TD>
  </TR>
<?php endif; ?>

</TABLE>
