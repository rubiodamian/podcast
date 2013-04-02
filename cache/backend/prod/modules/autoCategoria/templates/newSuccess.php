<?php use_helper('I18N', 'Date') ?>
<?php include_partial('categoria/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Nueva categoria', array(), 'messages') ?></h1>

  <?php include_partial('categoria/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('categoria/form_header', array('categoria' => $categoria, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('categoria/form', array('categoria' => $categoria, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('categoria/form_footer', array('categoria' => $categoria, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
