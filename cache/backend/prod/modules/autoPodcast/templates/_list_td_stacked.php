<td colspan="3">
  <?php echo __('%%nombre%% - %%descripcion%% - %%categoria%%', array('%%nombre%%' => link_to($podcast->getNombre(), 'podcast_edit', $podcast), '%%descripcion%%' => $podcast->getDescripcion(), '%%categoria%%' => $podcast->getCategoria()), 'messages') ?>
</td>
