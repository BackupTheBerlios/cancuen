<HTML>
<HEAD>
<link rel="stylesheet" href="../../themes/styletemp.css" type="text/css">
<style type="text/css">
</style>
</HEAD>
<BODY>
{if $CAMBIO eq "1"}
{include_php file="./modules/user/user.php" login="0" prguser=$PRGUSER mostrarinfo="1"}
{else}
<TABLE class="ventana" width=100%>
  <TR>
  <TD class="titulo" colspan=5>
  Avatares Disponibles
  </TD>
  </TR>

  <TR>
    {section name=avatar loop=$ARRAYUSERAVATAR}
    {cycle values="1,2,3,4,5" assign=CONTADOR}
      {if $CONTADOR neq 5}
        <TD align="CENTER">
          <A HREF="index.php?centermodule=user&cavatar=1&cambia={$ARRAYUSERAVATARNAME[avatar]}">
          <img src={$ARRAYUSERAVATAR[avatar]} border=0><br>{$ARRAYUSERAVATARNAME[avatar]}
          </A>
        </TD>
      {else}
        <TD align=CENTER>
          <A HREF="index.php?centermodule=user&cavatar=1&cambia={$ARRAYUSERAVATARNAME[avatar]}">
          <img src={$ARRAYUSERAVATAR[avatar]} border=0><br>{$ARRAYUSERAVATARNAME[avatar]}
          </A>
        </TD>
        </TR>
        <TR>
      {/if}
    {/section}
  </TR>
</TABLE>
{/if}
</BODY>
</HTML>
