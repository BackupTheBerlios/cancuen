<?php /* Smarty version 2.5.0, created on 2004-10-27 15:22:52
         compiled from news.tpl */ ?>
<?php if (isset($this->_sections['new'])) unset($this->_sections['new']);
$this->_sections['new']['name'] = 'new';
$this->_sections['new']['loop'] = is_array($this->_tpl_vars['NEWS']) ? count($this->_tpl_vars['NEWS']) : max(0, (int)$this->_tpl_vars['NEWS']);
$this->_sections['new']['show'] = true;
$this->_sections['new']['max'] = $this->_sections['new']['loop'];
$this->_sections['new']['step'] = 1;
$this->_sections['new']['start'] = $this->_sections['new']['step'] > 0 ? 0 : $this->_sections['new']['loop']-1;
if ($this->_sections['new']['show']) {
    $this->_sections['new']['total'] = $this->_sections['new']['loop'];
    if ($this->_sections['new']['total'] == 0)
        $this->_sections['new']['show'] = false;
} else
    $this->_sections['new']['total'] = 0;
if ($this->_sections['new']['show']):

            for ($this->_sections['new']['index'] = $this->_sections['new']['start'], $this->_sections['new']['iteration'] = 1;
                 $this->_sections['new']['iteration'] <= $this->_sections['new']['total'];
                 $this->_sections['new']['index'] += $this->_sections['new']['step'], $this->_sections['new']['iteration']++):
$this->_sections['new']['rownum'] = $this->_sections['new']['iteration'];
$this->_sections['new']['index_prev'] = $this->_sections['new']['index'] - $this->_sections['new']['step'];
$this->_sections['new']['index_next'] = $this->_sections['new']['index'] + $this->_sections['new']['step'];
$this->_sections['new']['first']      = ($this->_sections['new']['iteration'] == 1);
$this->_sections['new']['last']       = ($this->_sections['new']['iteration'] == $this->_sections['new']['total']);
?>
    <table height = 20% width="100%" border="0" cellspacing="1" cellpadding="0">
    <TR>
        <TD class = "titulo"><?php echo $this->_tpl_vars['NEWS'][$this->_sections['new']['index']]['title']; ?>
</TD>
    </TR>
    <TR>
       <?php if ($this->_tpl_vars['LONGNEW'] == 1): ?>
        <TD VALIGN="TOP" class = "ventana"><img src="./modules/news/images/<?php echo $this->_tpl_vars['NEWS'][$this->_sections['new']['index']]['pathimage']; ?>
" class = "float-left"><?php echo $this->_tpl_vars['NEWS'][$this->_sections['new']['index']]['longnew']; ?>

            <br>
            
            <div align = "right">
              <a href="index.php?centermodule=news&id=<?php echo $this->_tpl_vars['NEWS'][$this->_sections['new']['index']]['id']; ?>
&longnew=1">Leer mas<img src="./iconos/leercompleta.gif" border=0></a>
              <a href="index.php?centermodule=news&id=<?php echo $this->_tpl_vars['NEWS'][$this->_sections['new']['index']]['id']; ?>
&longnew=0">solo intro <img src="./iconos/leerintro.gif" border=0></a>
              <a href="print.php?centermodule=news&id=<?php echo $this->_tpl_vars['NEWS'][$this->_sections['new']['index']]['id']; ?>
&longnew=1&print=1">Imprimir <img src="./iconos/print.gif" border=0></a>
            </div>
        </TD>
        <?php else: ?>
        <TD VALIGN="TOP" class = "ventana"><img src="./modules/news/images/<?php echo $this->_tpl_vars['NEWS'][$this->_sections['new']['index']]['pathimage']; ?>
" class = "float-left"><?php echo $this->_tpl_vars['NEWS'][$this->_sections['new']['index']]['shortnew']; ?>

            <br>
            
            <div align = "right">
              <a href="index.php?centermodule=news&id=<?php echo $this->_tpl_vars['NEWS'][$this->_sections['new']['index']]['id']; ?>
&longnew=1">Leer mas<img src="./iconos/leercompleta.gif" border=0></a>
              <a href="index.php?centermodule=news&id=<?php echo $this->_tpl_vars['NEWS'][$this->_sections['new']['index']]['id']; ?>
&longnew=0">solo intro <img src="./iconos/leerintro.gif" border=0></a>
              <a href="print.php?centermodule=news&id=<?php echo $this->_tpl_vars['NEWS'][$this->_sections['new']['index']]['id']; ?>
&longnew=0&print=1">Imprimir <img src="./iconos/print.gif" border=0></a>
            </div>
        </TD>
        <?php endif; ?>
    </TR>
    </TABLE>
<?php endfor; endif; ?>