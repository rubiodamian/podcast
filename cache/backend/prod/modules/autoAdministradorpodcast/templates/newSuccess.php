<?php use_helper('I18N', 'Date') ?>
<?php include_partial('administradorpodcast/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Nuevo permiso', array(), 'messages') ?></h1>

  <?php include_partial('administradorpodcast/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('administradorpodcast/form_header', array('administradorpodcast' => $administradorpodcast, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('administradorpodcast/form', array('administradorpodcast' => $administradorpodcast, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('administradorpodcast/form_footer', array('administradorpodcast' => $administradorpodcast, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
