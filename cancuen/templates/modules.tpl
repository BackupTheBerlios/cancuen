<table height = 20% width="100%" class = "ventana">
{config_load file="modules.conf"}
    <TR>
        <TD WIDTH="100%" VALIGN="TOP" align = "CENTER" bgcolor = "BLACK" class = "titulo"><font color = "WHITE">{#title#}<img src = "./modules/articles/icons/topwindow.gif"></font></TD>
    </TR>

{section name=module loop="$MODULES"}
    <TR>
        <TD WIDTH="100%" VALIGN="TOP" align = "LEFT" class = "menuitem"><a href=index.php?centermodule={$MODULES[module].name}><img src="./modules/modules/images/arrow0.gif" border=0>{$MODULES[module].description}</a></TD>
    </TR>
{/section}
</TABLE>
