{if $CENTERMODULE eq "comments"}
  {section name=print loop=$PRINTS}
    <CENTER> <img src="{$PRINTS[print].pathavatar}"> 
		{$PRINTS[print].user} <BR> 
		<A HREF="http://{$PRINTS[print].url}">{$PRINTS[print].url} </A><BR>
		<A HREF="mailto:{$PRINTS[print].email}">{$PRINTS[print].email} </A><BR>
		<CENTER> <br>
    <CENTER> <B> {$PRINTS[print].title} </B> <CENTER> <br>
    <CENTER> {$DATEPOSTED} <CENTER> <br>
      <br>
      <br>
      <br>
    <CENTER> {$PRINTS[print].comment} <CENTER>
      <br>
      <br>
      <br>
    <FONT FACE='arial' size='2'>
    <CENTER> Este articulo proviene de: <CENTER> <br>
    <CENTER> {$ADDRESS} <CENTER> <br>
    <CENTER> La URL para este tema es: <CENTER> <br></FONT>
    <CENTER> <A HREF='{$ADDRESS}?{$ARGS[0]}'>{$ADDRESS}?{$ARGS[0]} </A><CENTER> <br>
  {/section}
{elseif $CENTERMODULE eq "news"}
  {section name=print loop=$PRINTS}
    <CENTER> {$PRINTS[print].logo} <CENTER> <br>
    <CENTER> <B> {$PRINTS[print].title} </B> <CENTER> <br>
    <CENTER> {$PRINTS[print].date} <CENTER> <br>
      <br>
      <br>
      <br>
    <CENTER> {$PRINTS[print].longnew} <CENTER>
      <br>
      <br>
      <br>
    <FONT FACE='arial' size='2'>
    <CENTER> Este articulo proviene de: <CENTER> <br>
    <CENTER> {$ADDRESS} <CENTER> <br>
    <CENTER> La URL para este tema es: <CENTER> <br></FONT>
    <CENTER> <A HREF='{$ADDRESS}?{$ARGS[0]}'>{$ADDRESS}?{$ARGS[0]} </A><CENTER> <br>
  {/section}
{/if}
