<?php /* Smarty version 2.5.0, created on 2004-10-27 15:22:52
         compiled from newslinks.tpl */ ?>
<table height = 20% width="100%" class = "ventana">
<?php $this->config_load("newslinks.conf", null, 'local'); ?>
    
    <TR>
        <TD WIDTH="100%" VALIGN="TOP" class = "titulo"> <p><?php echo $this->_config[0]['vars']['titlesearch']; ?>
</p>
        </TD>
    </TR>
    <TR>
        <TD>
         <FORM ACTION = "index.php">
           <LABEL>POR PALABRA </LABEL>
           <INPUT TYPE = "HIDDEN" NAME = "centermodule" VALUE="news">
           <INPUT TYPE = "TEXT" name = "search">
           </SELECT>
           <INPUT TYPE = "SUBMIT" VALUE = "Buscar">
        </FORM>
        </TD>
    </TR>
    
    <TR>
        <TD WIDTH="100%" class = "titulo_dos"><?php echo $this->_config[0]['vars']['title']; ?>
</TD>
    </TR>

    <TR>
        <TD WIDTH="100%" VALIGN="TOP" align = "LEFT" class="menuitem"><a href="index.php?centermodule=news&datefilter=<?php echo $this->_tpl_vars['DATEFILTER']; ?>
"><li> noticias del mes  </li></a>
        <FORM ACTION = "index.php">
           <INPUT TYPE = "HIDDEN" NAME = "centermodule" VALUE="news">
           <SELECT NAME = "datefilter">
           <OPTION>enero</OPTION>
           <OPTION>febrero</OPTION>
           <OPTION>marzo</OPTION>
           <OPTION>abril</OPTION>
           <OPTION>mayo</OPTION>
           <OPTION>junio</OPTION>
           <OPTION>julio</OPTION>
           <OPTION>agosto</OPTION>
           <OPTION>septiembre</OPTION>
           <OPTION>octubre</OPTION>
           <OPTION>noviembre</OPTION>
           <OPTION>diciembre</OPTION>
           </SELECT>
           <INPUT TYPE = "SUBMIT" VALUE = "Buscar">
        </FORM>
        </TD>
    </TR>

<?php if (isset($this->_sections['newlink'])) unset($this->_sections['newlink']);
$this->_sections['newlink']['name'] = 'newlink';
$this->_sections['newlink']['loop'] = is_array($this->_tpl_vars['NEWSLINKS']) ? count($this->_tpl_vars['NEWSLINKS']) : max(0, (int)$this->_tpl_vars['NEWSLINKS']);
$this->_sections['newlink']['show'] = true;
$this->_sections['newlink']['max'] = $this->_sections['newlink']['loop'];
$this->_sections['newlink']['step'] = 1;
$this->_sections['newlink']['start'] = $this->_sections['newlink']['step'] > 0 ? 0 : $this->_sections['newlink']['loop']-1;
if ($this->_sections['newlink']['show']) {
    $this->_sections['newlink']['total'] = $this->_sections['newlink']['loop'];
    if ($this->_sections['newlink']['total'] == 0)
        $this->_sections['newlink']['show'] = false;
} else
    $this->_sections['newlink']['total'] = 0;
if ($this->_sections['newlink']['show']):

            for ($this->_sections['newlink']['index'] = $this->_sections['newlink']['start'], $this->_sections['newlink']['iteration'] = 1;
                 $this->_sections['newlink']['iteration'] <= $this->_sections['newlink']['total'];
                 $this->_sections['newlink']['index'] += $this->_sections['newlink']['step'], $this->_sections['newlink']['iteration']++):
$this->_sections['newlink']['rownum'] = $this->_sections['newlink']['iteration'];
$this->_sections['newlink']['index_prev'] = $this->_sections['newlink']['index'] - $this->_sections['newlink']['step'];
$this->_sections['newlink']['index_next'] = $this->_sections['newlink']['index'] + $this->_sections['newlink']['step'];
$this->_sections['newlink']['first']      = ($this->_sections['newlink']['iteration'] == 1);
$this->_sections['newlink']['last']       = ($this->_sections['newlink']['iteration'] == $this->_sections['newlink']['total']);
?>
    <TR>
        <TD WIDTH="100%" VALIGN="TOP" align = "LEFT"><a href="index.php?centermodule=news&id=<?php echo $this->_tpl_vars['NEWSLINKS'][$this->_sections['newlink']['index']]['id']; ?>
" class = "menuitem"><li><?php echo $this->_tpl_vars['NEWSLINKS'][$this->_sections['newlink']['index']]['title']; ?>
</li></a></TD>
        
    </TR>
<?php endfor; endif; ?>
</TABLE>