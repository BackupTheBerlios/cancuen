<?php /* Smarty version 2.5.0, created on 2004-10-27 15:22:51
         compiled from index.tpl */ ?>
<HTML>
<HEAD>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1252">
<META NAME="Generator" content="Dev-PHP 2.0.8">
<META NAME="author" CONTENT="Mario Enrique López Guzmán (mariotpc) mariotpc@intelnet.net.gt">
  <?php $this->config_load("colaborador.conf", null, 'local'); ?>
  <TITLE><?php echo $this->_config[0]['vars']['TITLEPAGE']; ?>
</TITLE>
  
  <link rel="stylesheet" href="./themes/<?php echo $this->_tpl_vars['THEME']; ?>
/style.css" type="text/css">
  <style type="text/css">
  </style>
</HEAD>
<BODY>
<table height = 100% width="100%" border="0" cellspacing="0" cellpadding="0">

    <TR HEIGHT="10%">
        <TD ALIGN="CENTER" COLSPAN = 4><IMG SRC="./themes/<?php echo $this->_tpl_vars['THEME']; ?>
/top.png" border=0>

		<!-- FLASH PUBLICITY SPACE

		<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0" width="200" height="59" id="top2" align="middle">
		<param name="allowScriptAccess" value="sameDomain" />
		<param name="movie" value="top2.swf" />
		<param name="quality" value="high" />
		<param name="bgcolor" value="#0066cc" />
		<embed src="top2.swf" quality="high" bgcolor="#0066cc" width="200" height="89" name="top2" align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
		</object>
		
        END -->

		</TD>
    </TR>

    <TR HEIGHT="10%" >
        <TD WIDTH="18%" VALIGN="TOP">&nbsp;</TD>
        <TD WIDTH="2%" VALIGN="TOP">&nbsp;</TD>
        <TD WIDTH="62%" VALIGN="TOP">&nbsp;</TD>
        <TD WIDTH="18%" VALIGN="TOP">&nbsp;</TD>
    </TR>

    <TR HEIGHT="2%">
        <TD WIDTH="18%" VALIGN="TOP">&nbsp;</TD>
        <TD WIDTH="2%" valign="top" align = "left"><IMG SRC="./themes/<?php echo $this->_tpl_vars['THEME']; ?>
/esquinaredondeada.bmp" border=0></TD>
        <TD WIDTH="80%" VALIGN="TOP" COLSPAN=2 class="solid-top">&nbsp;</TD>
    </TR>



    

    <TR>
        
        
        <TD WIDTH="18%" VALIGN="TOP" HEIGHT=271 class = "solid-right">
         

		<?php $this->_smarty_include_php("./modules/modules/modules.php", '', true, array()); ?>

        
        <?php $this->_smarty_include_php("./modules/articles/articleslinks.php", '', true, array('id' => $this->_tpl_vars['ID'],'idarticle' => $this->_tpl_vars['IDARTICLE'],'idparent' => $this->_tpl_vars['IDPARENT'])); ?>
        
		
        <?php if ($this->_tpl_vars['CENTERMODULE'] != 'user'): ?>
        <?php $this->_smarty_include_php("./modules/user/user.php", '', true, array('login' => 1,'prguser' => $this->_tpl_vars['PRGUSER'],'prgpassword' => $this->_tpl_vars['PRGPASSWORD'],'mostrarinfo' => $this->_tpl_vars['MOSTRARINFO'])); ?>
        <?php endif; ?>
	
        <?php $this->_smarty_include_php("./modules/statics/statics.php", '', true, array()); ?>

        </TD>


        
   		<?php if ($this->_tpl_vars['CENTRAL'] != '1'): ?>

		     

                  <TD WIDTH="64%" VALIGN="TOP" COLSPAN=2 HEIGHT=271 class = "dotted-right">
                      <?php if ($this->_tpl_vars['CENTERMODULE'] == 'news'): ?>
                           <?php if ($this->_tpl_vars['SEARCH'] == ""): ?>
                              <?php $this->_smarty_include_php("./modules/news/news.php", '', true, array('id' => $this->_tpl_vars['ID'],'longnew' => $this->_tpl_vars['LONGNEW'],'datefilter' => $this->_tpl_vars['DATEFILTER'])); ?>
                           <?php else: ?>
                               <?php $this->_smarty_include_php("./modules/news/searchnews.php", '', true, array('search' => $this->_tpl_vars['SEARCH'])); ?>
                           <?php endif; ?>
                      <?php elseif ($this->_tpl_vars['CENTERMODULE'] == 'imggallery'): ?>
                      	   <?php $this->_smarty_include_php("./modules/imggallery/imggallery.php", '', true, array('cat' => $this->_tpl_vars['CAT'],'id' => $this->_tpl_vars['ID'],'prguser' => $this->_tpl_vars['PRGUSER'])); ?>
					  					<?php elseif ($this->_tpl_vars['CENTERMODULE'] == 'user' && $this->_tpl_vars['CAVATAR'] != '1'): ?>
                           <?php $this->_smarty_include_php("./modules/user/user.php", '', true, array('login' => $this->_tpl_vars['LOGIN'],'prguser' => $this->_tpl_vars['PRGUSER'],'prgpassword' => $this->_tpl_vars['PRGPASSWORD'],'mostrarinfo' => $this->_tpl_vars['MOSTRARINFO'],'module' => $this->_tpl_vars['MODULE'],'commentuser' => $this->_tpl_vars['COMMENTUSER'])); ?>
                      <?php elseif ($this->_tpl_vars['CENTERMODULE'] == 'user' && $this->_tpl_vars['CAVATAR'] == '1'): ?>
                           <?php $this->_smarty_include_php("./modules/user/selavatar.php", '', true, array('cambia' => $this->_tpl_vars['CAMBIA'],'prguser' => $this->_tpl_vars['PRGUSER'],'login' => 0,'mostrarinfo' => 1)); ?>
                      <?php else: ?>
                         <CENTER><IMG SRC="./themes/<?php echo $this->_tpl_vars['THEME']; ?>
/altar.png" border=0></CENTER>
                      <?php endif; ?>
                  </TD>


                  

                  <TD WIDTH="18%" VALIGN="TOP" HEIGHT=271>
                      <?php if ($this->_tpl_vars['CENTERMODULE'] == 'news'): ?>
                         <?php $this->_smarty_include_php("./modules/news/newslinks.php", '', true, array('datefilter' => $this->_tpl_vars['DATEFILTER'])); ?>
                      <?php elseif ($this->_tpl_vars['CENTERMODULE'] == 'imggallery'): ?>
                         <?php $this->_smarty_include_php("./modules/imggallery/imggallerycategory.php", '', true, array()); ?>
                      <?php else: ?>
                         <CENTER><IMG SRC="./themes/<?php echo $this->_tpl_vars['THEME']; ?>
/altar.png" border=0></CENTER>
                      <?php endif; ?>

                  </TD>
  		<?php else: ?>
			<?php if ($this->_tpl_vars['CENTERMODULE'] == 'videogallery'): ?>
   		       <TD WIDTH="82%" COLSPAN = 3 VALIGN="TOP" HEIGHT=271>
                  <?php $this->_smarty_include_php("./modules/videogallery/videogallery.php", '', true, array('id' => $this->_tpl_vars['ID'],'idarticle' => $this->_tpl_vars['IDARTICLE'])); ?>
              </TD>
            <?php elseif ($this->_tpl_vars['CENTERMODULE'] == 'articles'): ?>
   		        <TD WIDTH="82%" COLSPAN = 3 VALIGN="TOP" HEIGHT=271>
                  <?php $this->_smarty_include_php("./modules/articles/articles.php", '', true, array('id' => $this->_tpl_vars['ID'],'idarticle' => $this->_tpl_vars['IDARTICLE'])); ?>
              </TD>
            <?php elseif ($this->_tpl_vars['CENTERMODULE'] == 'comments'): ?>
              <TD WIDTH="82%" COLSPAN = 3 VALIGN="TOP" HEIGHT=271>
	              <?php $this->_smarty_include_php("./modules/comments/comments.php", '', true, array('id' => $this->_tpl_vars['ID'],'reply' => $this->_tpl_vars['REPLY'],'prguser' => $this->_tpl_vars['PRGUSER'],'newcomment' => $this->_tpl_vars['NEWCOMMENT'])); ?>      
              </TD>
			<?php endif; ?>
         <?php endif; ?>
    </TR>

    
    <TR>
        <TD VALIGN="TOP" COLSPAN=4 class="solid-top">
        <br>
        <CENTER CLASS="menu">
		Cancuen es un portal que utiliza: <br>
		<img src="./images/PoweredByApache.jpg"	border="0" alt="Apache Logo">
		<img src="./images/PoweredByPHP.jpg"	border="0" alt="PHP Logo">
		<img src="./images/PoweredByMySQL.jpg"	border="0" alt="MySQL Logo">				
		<img src="./images/smarty_icon.gif"	border="0" alt="Smarty Logo"><br>
		Hospedado por: <br>
		<a href="http://developer.berlios.de" title="BerliOS Developer">
		<img src="http://developer.berlios.de/bslogo.php?group_id=2411" width="124px" height="32px" 
		border="0" alt="BerliOS Developer Logo"></a><br>
		Comentarios o consultas a: <a href="mailto:mariotpc@berlios.de">WebMaster</a>
		</CENTER>
        <br>
		<br>
		<br>
        </TD>
    </TR>
  </TABLE>
</BODY>
</HTML>