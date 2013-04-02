<?php use_helper('I18N', 'Date') ?>
<?php include_partial('podcast/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Editar podcast %%nombre%%', array('%%nombre%%' => $podcast->getNombre()), 'messages') ?></h1>

  <?php include_partial('podcast/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('podcast/form_header', array('podcast' => $podcast, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('podcast/form', array('podcast' => $podcast, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('podcast/form_footer', array('podcast' => $podcast, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
