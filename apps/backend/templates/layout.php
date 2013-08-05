<!DOCTYPE html>
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_component('componentesbe','titulo'); ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_component('componentesbe','estilo') ?>
    <?php include_javascripts() ?>
    <?php include_stylesheets() ?>
  </head>
  <body>
     <div id="wrapper">
	     <div id="header">
	      <div id="titulo">
	        <?php echo image_tag('/images/podcast_title.png','alt=Logo Header Podcast')?>
	      </div>
	    </div>
	    <div id="cuerpo">
		    <div id="sidebar">
		    <?php if((sfContext::getInstance()->getUser()->hasPermission('administrador')) OR (sfContext::getInstance()->getUser()->hasPermission('publicador'))) { ?>
		      <h2>Menu</h2>
		    <?php } ?>
		      <?php include_partial('principal/menu')?>
		    </div>
		    <div id="subCuerpo">
		    <?php echo $sf_content ?>
		    </div> 
		</div>
	    <div id="footer">
	      <div id="pie">
	        <?php echo image_tag('/images/footer.png','alt=Logo Footer Podcast')?>
	      </div>
	    </div>
	 </div>
  </body>
</html>
