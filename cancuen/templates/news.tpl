{section name=new loop="$NEWS"}
    <table height = 20% width="100%" border="0" cellspacing="1" cellpadding="0">
    <TR>
        <TD class = "titulo">{$NEWS[new].title}</TD>
    </TR>
    <TR>
       {if $LONGNEW eq 1}
        <TD VALIGN="TOP" class = "ventana"><img src="./modules/news/images/{$NEWS[new].pathimage}" class = "float-left">{$NEWS[new].longnew}
            <br>
            {*icono de leer completa Parte del long new*}
            <div align = "right">
              <a href="index.php?centermodule=news&id={$NEWS[new].id}&longnew=1">Leer mas<img src="./iconos/leercompleta.gif" border=0></a>
              <a href="index.php?centermodule=news&id={$NEWS[new].id}&longnew=0">solo intro <img src="./iconos/leerintro.gif" border=0></a>
              <a href="print.php?centermodule=news&id={$NEWS[new].id}&longnew=1&print=1">Imprimir <img src="./iconos/print.gif" border=0></a>
            </div>
        </TD>
        {else}
        <TD VALIGN="TOP" class = "ventana"><img src="./modules/news/images/{$NEWS[new].pathimage}" class = "float-left">{$NEWS[new].shortnew}
            <br>
            {*icono de leer completa Parte del short new*}
            <div align = "right">
              <a href="index.php?centermodule=news&id={$NEWS[new].id}&longnew=1">Leer mas<img src="./iconos/leercompleta.gif" border=0></a>
              <a href="index.php?centermodule=news&id={$NEWS[new].id}&longnew=0">solo intro <img src="./iconos/leerintro.gif" border=0></a>
              <a href="print.php?centermodule=news&id={$NEWS[new].id}&longnew=0&print=1">Imprimir <img src="./iconos/print.gif" border=0></a>
            </div>
        </TD>
        {/if}
    </TR>
    </TABLE>
{/section}
