<td colspan="5">
  <?php echo __('%%Cantidad_items_por_pagina%% - %%Cantidad_podcast_por_pagina%% - %%Plantilla_defecto%% - %%Nombre_sitio%% - %%Sitio_habilitado%%', array('%%Cantidad_items_por_pagina%%' => $configuracion->getCantidadItemsPorPagina(), '%%Cantidad_podcast_por_pagina%%' => $configuracion->getCantidadPodcastPorPagina(), '%%Plantilla_defecto%%' => $configuracion->getPlantillaDefecto(), '%%Nombre_sitio%%' => $configuracion->getNombreSitio(), '%%Sitio_habilitado%%' => $configuracion->getSitioHabilitado()), 'messages') ?>
</td>
