<table height = 20% width="100%" class = "ventana">
{config_load file="imggallery.conf"}
    <TR>
        <TD WIDTH="100%" class = "titulo">{#title#}</TD>
    </TR>

{section name=cat loop="$CATEGORY"}
    <TR>
        <TD WIDTH="100%" VALIGN="TOP" align = "LEFT" class = "menuitem"><a href=index.php?centermodule=imggallery&cat={$CATEGORY[cat].id}><center><img src="./modules/imggallery/categories/{$CATEGORY[cat].pathimage}" border=0><br>{$CATEGORY[cat].namecategory}</a><center></TD>
    </TR>
{/section}
</TABLE>

