<table height = 20% width="100%" class = "ventana">
{config_load file="newslinks.conf"}
    {*FOR MAKE THE SEARCH*}
    <TR>
        <TD WIDTH="100%" VALIGN="TOP" class = "titulo"> <p>{#titlesearch#}</p>
        </TD>
    </TR>
    <TR>
        <TD>
         <FORM ACTION = "index.php">
           <LABEL>POR PALABRA </LABEL>
           <INPUT TYPE = "HIDDEN" NAME = "centermodule" VALUE="news">
           <INPUT TYPE = "TEXT" name = "search">
           </SELECT>
           <INPUT TYPE = "SUBMIT" VALUE = "Buscar">
        </FORM>
        </TD>
    </TR>
    
    <TR>
        <TD WIDTH="100%" class = "titulo_dos">{#title#}</TD>
    </TR>

    <TR>
        <TD WIDTH="100%" VALIGN="TOP" align = "LEFT" class="menuitem"><a href="index.php?centermodule=news&datefilter={$DATEFILTER}"><li> noticias del mes  </li></a>
        <FORM ACTION = "index.php">
           <INPUT TYPE = "HIDDEN" NAME = "centermodule" VALUE="news">
           <SELECT NAME = "datefilter">
           <OPTION>enero</OPTION>
           <OPTION>febrero</OPTION>
           <OPTION>marzo</OPTION>
           <OPTION>abril</OPTION>
           <OPTION>mayo</OPTION>
           <OPTION>junio</OPTION>
           <OPTION>julio</OPTION>
           <OPTION>agosto</OPTION>
           <OPTION>septiembre</OPTION>
           <OPTION>octubre</OPTION>
           <OPTION>noviembre</OPTION>
           <OPTION>diciembre</OPTION>
           </SELECT>
           <INPUT TYPE = "SUBMIT" VALUE = "Buscar">
        </FORM>
        </TD>
    </TR>

{section name=newlink loop="$NEWSLINKS"}
    <TR>
        <TD WIDTH="100%" VALIGN="TOP" align = "LEFT"><a href="index.php?centermodule=news&id={$NEWSLINKS[newlink].id}" class = "menuitem"><li>{$NEWSLINKS[newlink].title}</li></a></TD>
        {*<TD WIDTH="100%" VALIGN="TOP" align = "LEFT"><a href="{$NEWSLINKS[newlink].link}" class = "menuitem"><li>{$NEWSLINKS[newlink].nombre}</li></a></TD>*}
    </TR>
{/section}
</TABLE>
