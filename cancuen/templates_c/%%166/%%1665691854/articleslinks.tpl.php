<?php /* Smarty version 2.5.0, created on 2004-10-27 15:22:52
         compiled from articleslinks.tpl */ ?>
<TABLE WIDTH = 100% class = "ventana">
    <TR>
    <TD class="titulo">Información <img src = "./modules/articles/icons/topwindow.gif">
    </TD>
    </TR>
    
<?php if (isset($this->_sections['articleslinks'])) unset($this->_sections['articleslinks']);
$this->_sections['articleslinks']['name'] = 'articleslinks';
$this->_sections['articleslinks']['loop'] = is_array($this->_tpl_vars['ARTICLESLINKS']) ? count($this->_tpl_vars['ARTICLESLINKS']) : max(0, (int)$this->_tpl_vars['ARTICLESLINKS']);
$this->_sections['articleslinks']['show'] = true;
$this->_sections['articleslinks']['max'] = $this->_sections['articleslinks']['loop'];
$this->_sections['articleslinks']['step'] = 1;
$this->_sections['articleslinks']['start'] = $this->_sections['articleslinks']['step'] > 0 ? 0 : $this->_sections['articleslinks']['loop']-1;
if ($this->_sections['articleslinks']['show']) {
    $this->_sections['articleslinks']['total'] = $this->_sections['articleslinks']['loop'];
    if ($this->_sections['articleslinks']['total'] == 0)
        $this->_sections['articleslinks']['show'] = false;
} else
    $this->_sections['articleslinks']['total'] = 0;
if ($this->_sections['articleslinks']['show']):

            for ($this->_sections['articleslinks']['index'] = $this->_sections['articleslinks']['start'], $this->_sections['articleslinks']['iteration'] = 1;
                 $this->_sections['articleslinks']['iteration'] <= $this->_sections['articleslinks']['total'];
                 $this->_sections['articleslinks']['index'] += $this->_sections['articleslinks']['step'], $this->_sections['articleslinks']['iteration']++):
$this->_sections['articleslinks']['rownum'] = $this->_sections['articleslinks']['iteration'];
$this->_sections['articleslinks']['index_prev'] = $this->_sections['articleslinks']['index'] - $this->_sections['articleslinks']['step'];
$this->_sections['articleslinks']['index_next'] = $this->_sections['articleslinks']['index'] + $this->_sections['articleslinks']['step'];
$this->_sections['articleslinks']['first']      = ($this->_sections['articleslinks']['iteration'] == 1);
$this->_sections['articleslinks']['last']       = ($this->_sections['articleslinks']['iteration'] == $this->_sections['articleslinks']['total']);
?>
    <TR>
        <TD WIDTH="100%" VALIGN="TOP" align = "LEFT">
		   <?php if ($this->_tpl_vars['ARTICLESLINKS'][$this->_sections['articleslinks']['index']]['idparent'] == 0): ?>
		   <img src = "./modules/articles/icons/folder-closed.jpg"><a href="index.php?centermodule=articles&id=<?php echo $this->_tpl_vars['ARTICLESLINKS'][$this->_sections['articleslinks']['index']]['idarticle']; ?>
&idarticle=<?php echo $this->_tpl_vars['ARTICLESLINKS'][$this->_sections['articleslinks']['index']]['idarticle']; ?>
&idparent=<?php echo $this->_tpl_vars['ARTICLESLINKS'][$this->_sections['articleslinks']['index']]['idparent']; ?>
" class = "menuitem"><?php echo $this->_tpl_vars['ARTICLESLINKS'][$this->_sections['articleslinks']['index']]['title']; ?>
</a>
		   <?php else: ?>
		   <table><tr><td width="10%">&nbsp;</td><td><font color=BLUE><img src = "./modules/articles/icons/gtkvim.jpg"><a href="index.php?centermodule=articles&id=<?php echo $this->_tpl_vars['ARTICLESLINKS'][$this->_sections['articleslinks']['index']]['idarticle']; ?>
&idarticle=<?php echo $this->_tpl_vars['ARTICLESLINKS'][$this->_sections['articleslinks']['index']]['idparent']; ?>
&idparent=0" class = "menuitem"><?php echo $this->_tpl_vars['ARTICLESLINKS'][$this->_sections['articleslinks']['index']]['title']; ?>
</a></font></td></tr></table>
		   <?php endif; ?>
		   
	   </TD>
    </TR>
<?php endfor; endif; ?>
<TABLE>