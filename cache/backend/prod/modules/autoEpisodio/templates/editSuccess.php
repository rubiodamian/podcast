<?php use_helper('I18N', 'Date') ?>
<?php include_partial('episodio/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Editar episodio %%nombre%%', array('%%nombre%%' => $episodio->getNombre()), 'messages') ?></h1>

  <?php include_partial('episodio/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('episodio/form_header', array('episodio' => $episodio, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('episodio/form', array('episodio' => $episodio, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('episodio/form_footer', array('episodio' => $episodio, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
