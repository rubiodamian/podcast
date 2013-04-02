<?php if ($sf_user->hasCredential('God')): ?>
<?php echo $helper->linkToNew(array(  'credentials' => 'God',  'params' =>   array(  ),  'class_suffix' => 'new',  'label' => 'New',)) ?>
<?php endif; ?>

