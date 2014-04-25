<h1>Lista de Podcast</h1>
<div id="sort">  
  <form id="form2" action="<?php echo url_for('main/index') ?>" method="get">
    <label for="campo">Ordenar por</label>
  	<select id="campo" name="select">
	  <option value="nombre"  >Nombre</option>
	  <option value="fecha" >Fecha</option>
	</select>
	<label for="modo">Orden</label>
	<select id="modo" name="select2">
	  <option value="up" selected="selected" >Ascendente</option>
	  <option value="down" >Descendente</option>
	</select>
  <input value="Ordenar" type="submit" />	
  </form>
</div>
<div id="page">
    <?php foreach ($pager->getResults() as $podcast): ?>
     <div class="podcast">
      <div class="nombrePodcast">
       <?php echo $podcast->getNombre() ?>
      </div>
      	<div class="contenido">
		      <div class="usuarioPodcast"> 
		         Publicado por: <?php echo $podcast->getUser() ?> 
		      </div>
		      <div class="imagen">
		         <?php echo image_tag('/uploads/images/'.$podcast->getImagen(), 'alt=Imagen Podcast');?> 
		      </div> 
		      <div class="descPodcast">
		       <?php echo $podcast->getDescripcion() ?>
		      </div>
		      <div class="categPodcast">
		         Categoria: <?php echo $podcast->getCategoria() ?>
		      </div>
		      <div class="episodiosPodcast">
		         <?php echo link_to("Listado de Episodios de ".$podcast->getNombre(),url_for('main/episodios?listar='.$podcast->getIdPodcast())) ?>
		      </div>
		</div>
     </div>
    <?php endforeach; ?>

<?php include_partial('main/paginador',array('pager'=>$pager))?>
</div>