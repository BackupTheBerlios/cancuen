<table height = 20% width="100%" border="0" cellspacing="10" cellpadding="0">
{config_load file="searchnews.conf"}
    <TR>
        <TD WIDTH="100%" VALIGN="TOP" align = "CENTER" bgcolor = "BLACK"><font color = "WHITE">{#title#} {$SEARCH}</font></TD>
    </TR>
{section name=searchnew loop="$SEARCHNEWS"}
    <TR>
        <TD WIDTH="100%" VALIGN="TOP" align = "LEFT">
        <a href=index.php?centermodule=news&id={$SEARCHNEWS[searchnew].id} class = ".menuitem"><li>{$SEARCHNEWS[searchnew].shortnew}</li></a>
        </TD>
    </TR>
{/section}
</TABLE>

