<?php /* Smarty version 2.5.0, created on 2004-10-27 15:23:03
         compiled from articles.tpl */ ?>
<TABLE WIDTH = 100% class = "ventana">
<TR>
<TD WIDTH=50%>
 &nbsp
</TD>
<TD align = "RIGHT" >
<!--<img src="./images/articlestools.png">-->&nbsp
</TD>
</TR>
<TR>
<TD COLSPAN=2>
<?php if (isset($this->_sections['articles'])) unset($this->_sections['articles']);
$this->_sections['articles']['name'] = 'articles';
$this->_sections['articles']['loop'] = is_array($this->_tpl_vars['INFOARTICLE']) ? count($this->_tpl_vars['INFOARTICLE']) : max(0, (int)$this->_tpl_vars['INFOARTICLE']);
$this->_sections['articles']['show'] = true;
$this->_sections['articles']['max'] = $this->_sections['articles']['loop'];
$this->_sections['articles']['step'] = 1;
$this->_sections['articles']['start'] = $this->_sections['articles']['step'] > 0 ? 0 : $this->_sections['articles']['loop']-1;
if ($this->_sections['articles']['show']) {
    $this->_sections['articles']['total'] = $this->_sections['articles']['loop'];
    if ($this->_sections['articles']['total'] == 0)
        $this->_sections['articles']['show'] = false;
} else
    $this->_sections['articles']['total'] = 0;
if ($this->_sections['articles']['show']):

            for ($this->_sections['articles']['index'] = $this->_sections['articles']['start'], $this->_sections['articles']['iteration'] = 1;
                 $this->_sections['articles']['iteration'] <= $this->_sections['articles']['total'];
                 $this->_sections['articles']['index'] += $this->_sections['articles']['step'], $this->_sections['articles']['iteration']++):
$this->_sections['articles']['rownum'] = $this->_sections['articles']['iteration'];
$this->_sections['articles']['index_prev'] = $this->_sections['articles']['index'] - $this->_sections['articles']['step'];
$this->_sections['articles']['index_next'] = $this->_sections['articles']['index'] + $this->_sections['articles']['step'];
$this->_sections['articles']['first']      = ($this->_sections['articles']['iteration'] == 1);
$this->_sections['articles']['last']       = ($this->_sections['articles']['iteration'] == $this->_sections['articles']['total']);
?>
   <?php if ($this->_tpl_vars['INFOARTICLE'][$this->_sections['articles']['index']]['imgpath'] == ""): ?>
      <img src="./modules/articles/images/default.jpg" class = "float-left">
   <?php else: ?>
      <img src=<?php echo $this->_tpl_vars['INFOARTICLE'][$this->_sections['articles']['index']]['imgpath']; ?>
 class = "float-left">
   <?php endif; ?>
   <br><br>
   <center><b><u><?php echo $this->_tpl_vars['INFOARTICLE'][$this->_sections['articles']['index']]['title']; ?>
</u></b></center></br>
   <?php echo $this->_tpl_vars['INFOARTICLE'][$this->_sections['articles']['index']]['content']; ?>

<?php endfor; endif; ?>
</TD>
</TR>
</TABLE>