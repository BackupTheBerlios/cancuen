<?php /* Smarty version 2.5.0, created on 2004-10-27 15:22:56
         compiled from imggallerycategory.tpl */ ?>
<table height = 20% width="100%" class = "ventana">
<?php $this->config_load("imggallery.conf", null, 'local'); ?>
    <TR>
        <TD WIDTH="100%" class = "titulo"><?php echo $this->_config[0]['vars']['title']; ?>
</TD>
    </TR>

<?php if (isset($this->_sections['cat'])) unset($this->_sections['cat']);
$this->_sections['cat']['name'] = 'cat';
$this->_sections['cat']['loop'] = is_array($this->_tpl_vars['CATEGORY']) ? count($this->_tpl_vars['CATEGORY']) : max(0, (int)$this->_tpl_vars['CATEGORY']);
$this->_sections['cat']['show'] = true;
$this->_sections['cat']['max'] = $this->_sections['cat']['loop'];
$this->_sections['cat']['step'] = 1;
$this->_sections['cat']['start'] = $this->_sections['cat']['step'] > 0 ? 0 : $this->_sections['cat']['loop']-1;
if ($this->_sections['cat']['show']) {
    $this->_sections['cat']['total'] = $this->_sections['cat']['loop'];
    if ($this->_sections['cat']['total'] == 0)
        $this->_sections['cat']['show'] = false;
} else
    $this->_sections['cat']['total'] = 0;
if ($this->_sections['cat']['show']):

            for ($this->_sections['cat']['index'] = $this->_sections['cat']['start'], $this->_sections['cat']['iteration'] = 1;
                 $this->_sections['cat']['iteration'] <= $this->_sections['cat']['total'];
                 $this->_sections['cat']['index'] += $this->_sections['cat']['step'], $this->_sections['cat']['iteration']++):
$this->_sections['cat']['rownum'] = $this->_sections['cat']['iteration'];
$this->_sections['cat']['index_prev'] = $this->_sections['cat']['index'] - $this->_sections['cat']['step'];
$this->_sections['cat']['index_next'] = $this->_sections['cat']['index'] + $this->_sections['cat']['step'];
$this->_sections['cat']['first']      = ($this->_sections['cat']['iteration'] == 1);
$this->_sections['cat']['last']       = ($this->_sections['cat']['iteration'] == $this->_sections['cat']['total']);
?>
    <TR>
        <TD WIDTH="100%" VALIGN="TOP" align = "LEFT" class = "menuitem"><a href=index.php?centermodule=imggallery&cat=<?php echo $this->_tpl_vars['CATEGORY'][$this->_sections['cat']['index']]['id']; ?>
><center><img src="./modules/imggallery/categories/<?php echo $this->_tpl_vars['CATEGORY'][$this->_sections['cat']['index']]['pathimage']; ?>
" border=0><br><?php echo $this->_tpl_vars['CATEGORY'][$this->_sections['cat']['index']]['namecategory']; ?>
</a><center></TD>
    </TR>
<?php endfor; endif; ?>
</TABLE>
