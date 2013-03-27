<!DOCTYPE html>
<html>
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_component('componentes', 'titulo'); ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_component('componentes','estilo') ?>
    <?php include_javascripts() ?>
  </head>
  <body>
  	<div id="wrapper">
	    <div id="header">
	      <div id="titulo"> 
	        <?php echo image_tag('/images/podcast_title.png', 'alt=Logo Header Podcast')?>      
	      </div>
	      <div id="search">
			  <form id= "form1" action="<?php echo url_for('main/index') ?>" method="get">
			    <label for="nombredelabusqueda">Busqueda de podcasts por nombre:</label>
			    <input id="nombredelabusqueda" type="text" name="nombre" value="<?php echo $sf_request->getParameter('nombre') ?>" />
			    <input value="Buscar" type="submit" />
			  </form> 
		  </div>
	    </div>
	    <div id="cuerpo">
	      <?php echo $sf_content ?>
	    </div>
	</div>
    <div id="footer">
      <div id="pie">
        <?php echo image_tag('/images/footer.png', 'alt=Logo Footer Podcast')?>
      </div>
    </div>
  </body>
</html>
