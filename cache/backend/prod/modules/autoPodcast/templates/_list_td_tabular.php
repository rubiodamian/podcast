<td class="sf_admin_text sf_admin_list_td_nombre">
  <?php echo link_to($podcast->getNombre(), 'podcast_edit', $podcast) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_descripcion">
  <?php echo $podcast->getDescripcion() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_categoria">
  <?php echo $podcast->getCategoria() ?>
</td>
