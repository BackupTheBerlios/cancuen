<?php /* Smarty version 2.5.0, created on 2004-10-27 15:22:51
         compiled from modules.tpl */ ?>
<table height = 20% width="100%" class = "ventana">
<?php $this->config_load("modules.conf", null, 'local'); ?>
    <TR>
        <TD WIDTH="100%" VALIGN="TOP" align = "CENTER" bgcolor = "BLACK" class = "titulo"><font color = "WHITE"><?php echo $this->_config[0]['vars']['title']; ?>
<img src = "./modules/articles/icons/topwindow.gif"></font></TD>
    </TR>

<?php if (isset($this->_sections['module'])) unset($this->_sections['module']);
$this->_sections['module']['name'] = 'module';
$this->_sections['module']['loop'] = is_array($this->_tpl_vars['MODULES']) ? count($this->_tpl_vars['MODULES']) : max(0, (int)$this->_tpl_vars['MODULES']);
$this->_sections['module']['show'] = true;
$this->_sections['module']['max'] = $this->_sections['module']['loop'];
$this->_sections['module']['step'] = 1;
$this->_sections['module']['start'] = $this->_sections['module']['step'] > 0 ? 0 : $this->_sections['module']['loop']-1;
if ($this->_sections['module']['show']) {
    $this->_sections['module']['total'] = $this->_sections['module']['loop'];
    if ($this->_sections['module']['total'] == 0)
        $this->_sections['module']['show'] = false;
} else
    $this->_sections['module']['total'] = 0;
if ($this->_sections['module']['show']):

            for ($this->_sections['module']['index'] = $this->_sections['module']['start'], $this->_sections['module']['iteration'] = 1;
                 $this->_sections['module']['iteration'] <= $this->_sections['module']['total'];
                 $this->_sections['module']['index'] += $this->_sections['module']['step'], $this->_sections['module']['iteration']++):
$this->_sections['module']['rownum'] = $this->_sections['module']['iteration'];
$this->_sections['module']['index_prev'] = $this->_sections['module']['index'] - $this->_sections['module']['step'];
$this->_sections['module']['index_next'] = $this->_sections['module']['index'] + $this->_sections['module']['step'];
$this->_sections['module']['first']      = ($this->_sections['module']['iteration'] == 1);
$this->_sections['module']['last']       = ($this->_sections['module']['iteration'] == $this->_sections['module']['total']);
?>
    <TR>
        <TD WIDTH="100%" VALIGN="TOP" align = "LEFT" class = "menuitem"><a href=index.php?centermodule=<?php echo $this->_tpl_vars['MODULES'][$this->_sections['module']['index']]['name']; ?>
><img src="./modules/modules/images/arrow0.gif" border=0><?php echo $this->_tpl_vars['MODULES'][$this->_sections['module']['index']]['description']; ?>
</a></TD>
    </TR>
<?php endfor; endif; ?>
</TABLE>