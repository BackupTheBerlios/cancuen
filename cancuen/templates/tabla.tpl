{section name="fila" loop=$sections}
  {section name="campo" loop=$sections[fila]}
      <table width="30%" border="1" cellspacing="0" cellpadding="0">
        <tr>
          <td colspan = 2>{$sections[fila][campo]} </td>
        </tr>
        <tr>
          <td> {$sections[fila][campo]} </td>
          <td>  {$sections[fila][campo]} </td>
        </tr>
      </table>
      <br>
  {/section}
{/section}

