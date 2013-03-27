<rss version="2.0">
<channel>
	<title>Podcast</title>
    <subtitle>Lista de Episodios</subtitle>    
	<link><?php echo url_for('@homepage', true) ?></link>
	<description></description>
    <?php use_helper('Text') ?>
    <?php foreach (EpisodioTable::getEpisodiosDePodcast($_GET['id'])->execute() as $episodio): ?>
	<item>
	  <title>
        <?php echo $episodio->getNombre(); ?>
      </title>
      <link><?php echo "https://grupo93.proyecto2011.linti.unlp.edu.ar/alumno/entrega3/web/uploads/music/".$episodio->getFuentemp3()?></link> 
	</item>  
	<?php endforeach ?>
</channel>
</rss>
