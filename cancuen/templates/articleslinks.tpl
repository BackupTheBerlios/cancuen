<TABLE WIDTH = 100% class = "ventana">
    <TR>
    <TD class="titulo">Información <img src = "./modules/articles/icons/topwindow.gif">
    </TD>
    </TR>
    
{section name=articleslinks loop="$ARTICLESLINKS"}
    <TR>
        <TD WIDTH="100%" VALIGN="TOP" align = "LEFT">
		   {if $ARTICLESLINKS[articleslinks].idparent eq 0}
		   <img src = "./modules/articles/icons/folder-closed.jpg"><a href="index.php?centermodule=articles&id={$ARTICLESLINKS[articleslinks].idarticle}&idarticle={$ARTICLESLINKS[articleslinks].idarticle}&idparent={$ARTICLESLINKS[articleslinks].idparent}" class = "menuitem">{$ARTICLESLINKS[articleslinks].title}</a>
		   {else}
		   <table><tr><td width="10%">&nbsp;</td><td><font color=BLUE><img src = "./modules/articles/icons/gtkvim.jpg"><a href="index.php?centermodule=articles&id={$ARTICLESLINKS[articleslinks].idarticle}&idarticle={$ARTICLESLINKS[articleslinks].idparent}&idparent=0" class = "menuitem">{$ARTICLESLINKS[articleslinks].title}</a></font></td></tr></table>
		   {/if}
		   
	   </TD>
    </TR>
{/section}
<TABLE>
