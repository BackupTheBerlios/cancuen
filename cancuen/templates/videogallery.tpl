<table height = 20% width="100%" class = "ventana">
{config_load file="videogallery.conf"}
    <TR>
        <TD colspan=3 WIDTH="100%" class = "titulo">{#title#}</TD>
    </TR>
{if $ID eq ""}
    <TR>
      {section name=idx loop="$VIDEO"}
              <TD WIDTH="33%" VALIGN="TOP" align = "LEFT" class = "menuitem">
              <img src="./modules/videogallery/videos/{$VIDEO[idx].pathscreenshot}" border=0 class = "float-left">
              {$VIDEO[idx].title}<br>
              {$VIDEO[idx].description} <br><br>
              Versión: {$VIDEO[idx].version} | Tamaño: {$VIDEO[idx].size} <br>
              Puesto el: {$VIDEO[idx].date}<br>
              Descargado: {$VIDEO[idx].hints} veces <br>
              Descargar: <a href = "./modules/videogallery/videos/{$VIDEO[idx].pathvideo}">{$VIDEO[idx].title}</a>
			  </TD>
              </TR><TR>
      {/section}
    </TR colspan=2>
{else}
  <TR>
    <TD align = "center">
       <img src="./modules/videogallery/videos/{$VIDEO[idx].pathscreenshot}" border=0>
    </TD>
  </TR>
{/if}

</TABLE>

