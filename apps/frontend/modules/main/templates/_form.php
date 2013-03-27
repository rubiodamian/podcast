<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>


Notice: Undefined variable: user_id in /var/www/entrega3/lib/form/doctrine/PodcastForm.class.php on line 26
<form action="<?php echo url_for('main/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id_podcast='.$form->getObject()->getIdPodcast() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('main/index') ?>">Back to list</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'main/delete?id_podcast='.$form->getObject()->getIdPodcast(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['nombre']->renderLabel() ?></th>
        <td>
          <?php echo $form['nombre']->renderError() ?>
          <?php echo $form['nombre'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['descripcion']->renderLabel() ?></th>
        <td>
          <?php echo $form['descripcion']->renderError() ?>
          <?php echo $form['descripcion'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['publicado']->renderLabel() ?></th>
        <td>
          <?php echo $form['publicado']->renderError() ?>
          <?php echo $form['publicado'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['imagen']->renderLabel() ?></th>
        <td>
          <?php echo $form['imagen']->renderError() ?>
          <?php echo $form['imagen'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['categoria_idCategoria']->renderLabel() ?></th>
        <td>
          <?php echo $form['categoria_idCategoria']->renderError() ?>
          <?php echo $form['categoria_idCategoria'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['created_at']->renderLabel() ?></th>
        <td>
          <?php echo $form['created_at']->renderError() ?>
          <?php echo $form['created_at'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['updated_at']->renderLabel() ?></th>
        <td>
          <?php echo $form['updated_at']->renderError() ?>
          <?php echo $form['updated_at'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
