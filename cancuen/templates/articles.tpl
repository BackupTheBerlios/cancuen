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
{section name=articles loop=$INFOARTICLE}
   {if $INFOARTICLE[articles].imgpath eq ""}
      <img src="./modules/articles/images/default.jpg" class = "float-left">
   {else}
      <img src={$INFOARTICLE[articles].imgpath} class = "float-left">
   {/if}
   <br><br>
   <center><b><u>{$INFOARTICLE[articles].title}</u></b></center></br>
   {$INFOARTICLE[articles].content}
{/section}
</TD>
</TR>
</TABLE>
